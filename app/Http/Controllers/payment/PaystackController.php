<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;


class PaystackController extends Controller
{
    public function index($plan){

        if(!$plan){
            return redirect()->route('plans');
        }

        $amount = 0;

        if($plan == "individual"){
          $amount = 275;
        }else if($plan == "bronze"){
            $amount = 475;
          }else if($plan == "gold"){
            $amount = 300;
          }else if($plan == "platinum"){
            $amount = 700;
          }


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
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
