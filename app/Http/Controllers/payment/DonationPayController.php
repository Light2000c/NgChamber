<?php

namespace App\Http\Controllers\payment;

use Paystack;
use Exception;
use App\Models\User;
use App\Models\Donation;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class DonationPayController extends Controller
{
    
    public $stripe;
    public $details;

    public function __construct()
    {
        session_start();

        $this->stripe = $this->stripe = new StripeClient(config('stripe.sk'));

        $donator = $_SESSION['donator'];
       
        $this->details = [
            "name" => $donator["name"],
            "email" => $donator["email"],
            "amount" => $donator["amount"],
        ];
    }

    public function index(){ 

        $donator = $_SESSION['donator'];
       
        // dd($donator);

        if(!$donator["amount"]){
           return back();
        }

      return view('payment.donationPay', [
        'amount' => $donator["amount"],
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
                "description" => "Payment for donation.",

            ]);
      

        if ($charge["status"] == "succeeded") {
          return  $this->saveDonatorInfo();
        }
    } catch (Exception $e) {
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
            return back()->with('error', $e->getMessage());
            // dd($e->getMessage());
        }

        return $token;
    }


    public function saveDonatorInfo()
    {

       $donate = Donation::create([
          'name' => $this->details["name"],
          'email' => $this->details["email"],
          'amount' => $this->details["amount"],
        ]);

        if ($donate) {

            // Mail::to($user->email)->send(new Plan($details));
            Alert::success('You have successfully made a donation. Thankyou.');

            return redirect()->route('donation');


            // dd($paymentDetails);
        }
    }
}
