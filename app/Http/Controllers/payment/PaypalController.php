<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaypalController extends Controller
{
    public $gateway;

    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function index(){
        return view('payment.paypal');
    }

    public function pay(Request $request){
        try{

            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
               'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('paypal-success'),
                'cancelUrl' => url('paypal-error'),
            ))->send();

            if($response->isRedirect()){
                $response->redirect();
            }else{
                return $response->getMessage();
            }

        }catch(\Throwable $th){
          return $th->getMessage();
        }
    }

    public function success(Request $request){

        if($request->input('paymentId') && $request->input('PayerID')){
          
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));

            $response = $transaction->send();

            if($response->isSuccessful()){
                return "Payment is Successful.";
            }else{
               return $response->getMessage();
            }

        }else{
            return 'Payment Declined';
        }

    }

    public function error(){
        return 'User Declined The Payment';
    }


}
