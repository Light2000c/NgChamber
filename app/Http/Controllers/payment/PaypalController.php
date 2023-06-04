<?php

namespace App\Http\Controllers\payment;

use App\Mail\Plan;
use App\Models\User;
use Omnipay\Omnipay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PaypalController extends Controller
{
    public $gateway;

    public function __construct(){

        session_start();

        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);

    }

    public function index(){
        
        $user = $_SESSION['userInfo'];


        $plan = $user['plan'];
        $amount = $user['amount'];

        return view('payment.paypal', [
            "plan" => $plan,
            "amount" => $amount,
        ]);
    }

    public function pay(Request $request){

        $user = $_SESSION["userInfo"];

        try{

            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'plan' => $request->plan,
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

        $user_data = $_SESSION['userInfo'];
        $user = User::where('id', Auth::user()->id)->first();
        $details = [
            "name" => $user->fullname,
        ];

        if($request->input('paymentId') && $request->input('PayerID')){
          
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));

            $response = $transaction->send();

            if($response->isSuccessful()){
                
                

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
        
                if($plan && $update){
        
                    Mail::to($user->email)->send(new Plan($details));
                    Alert::success('You have successfully purchased a membeship plan. Thankyou.');
                    
                    return redirect()->route('profile');
        
        
                // dd($paymentDetails);
            }

            }else{

               return $response->getMessage();
            }

        }else{
            // return 'Payment Declined';
            Alert::error('Something happened, please try again later.');
                    
            return redirect()->route('pay-with-paypal');
        }
    

    }

    public function error(){
        Alert::error('Something happened, please try again later.');
        return redirect()->route('pay-with-paypal');
        // return 'User Declined The Payment';

    }


}
