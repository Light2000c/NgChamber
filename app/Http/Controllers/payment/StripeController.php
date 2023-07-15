<?php

namespace App\Http\Controllers\payment;

use Exception;
use App\Mail\Plan;
use Stripe\Stripe;
use App\Models\User;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class StripeController extends Controller
{

    public $stripe;
    public $can_submit = false;
    public function __construct()
    {
        session_start();
        $this->stripe = $this->stripe = new StripeClient(config('stripe.sk'));
    }

    public function index()
    {

        $user = $_SESSION['userInfo'];

        if (!$user['plan'] && !$user['amount']) {
            return back();
        }

        $plan = $user['plan'];
        $amount = $user['amount'];

        return view('payment.stripe', [
            "plan" => $plan,
            "amount" => $amount,
        ]);
    }

    public function checkout(Request $request)
    {


        $this->validate($request, [
            'fullName' => 'required',
            'cardNumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required',
            'amount' => 'required',
        ]);


        $token = $this->createToken($request);

        $charge = null;
        try {

            $charge = $this->stripe->charges->create([
                "amount" => $request->amount,
                "currency" => "usd",
                "source" => $token,
                "description" => "Purchased a membership plan.",

            ]);
      

        if ($charge["status"] == "succeeded") {
          return  $this->saveUserInfo();

        }

    } catch (Exception $e) {
        // dd($e->getMessage());
        return back()->with('error', $e->getMessage());
      
    }
       
    }



    private function createToken($cardData)
    {

        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            dd($e->getMessage());
            return back()->with('error', $e->getMessage());
            // dd($e->getMessage());
        }

        return $token;
    }


    public function saveUserInfo()
    {

        $user_data = $_SESSION['userInfo'];
        $user = User::where('id', Auth::user()->id)->first();
        $details = [
            "name" => $user->fullname,
        ];

        $plan = $user->plan()->create([
            'type' => $user_data['plan'],
            'amount' => $user_data['amount'],
        ]);


        $paid_user = 1;

        $update = $user->update([
            'is_paid_user' => $paid_user,
            'phone' => $user_data['phone'],
            'city' => $user_data['city'],
            'state' => $user_data['state'],
            'country' => $user_data['country'],
            'address' => $user_data['address'],
            'business_name' => $user_data['business_name'],
            'business_email' => $user_data['business_email'],
            'business_phone' => $user_data['business_phone'],
            'business_city' => $user_data['business_city'],
            'business_state' => $user_data['business_state'],
            'business_country' => $user_data['business_country'],
            'business_address' => $user_data['business_address'],
            'business_number' => $user_data['business_number'],
            'business_type' => $user_data['business_type'],
            'business_industry' => $user_data['business_industry'],
        ]);

       $transaction =  $user->transaction()->create([
         'type' => 'Plan',
         'amount' =>  $user_data['amount'],
         'description' => 'Purchase '.$user_data['plan'].' Membership Plan',
         'status' => 'success',
        ]);

        if ($plan && $update && $transaction) {

            Mail::to($user->email)->send(new Plan($details));
            Alert::success('You have successfully purchased a membeship plan. Thankyou.');

            return redirect()->route('transactions');


            // dd($paymentDetails);
        }
    }
}
