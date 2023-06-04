<?php

namespace App\Http\Controllers\payment;

use Paystack;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


class PaystackController extends Controller
{

    public function __construct(){

        session_start();

    }


    public function index(){

        $user = $_SESSION['userInfo'];


        $plan = $user['plan'];
        $amount = $user['amount'];


        return view('payment.paystack', [
            "plan" => $plan,
            "amount" => $amount,
        ]);
    }

    
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

  
    public function handleGatewayCallback()
    {
        $user_data = $_SESSION['userInfo'];
        $paymentDetails = Paystack::getPaymentData();


        // dd($paymentDetails);

        if($paymentDetails['status']){

        $user = User::where('id', Auth::user()->id)->first();

        $plan = $user->plan()->create([
            'type' => $user_data['plan'],
            'amount' => $user_data['amount'],
         ]);
        }

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

        if($plan && $update){

            Alert::success('Purchase Plan Message!');
            
            return redirect()->route('profile');


        // dd($paymentDetails);
    }

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
