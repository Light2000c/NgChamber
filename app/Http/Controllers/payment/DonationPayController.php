<?php

namespace App\Http\Controllers\payment;

use Paystack;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class DonationPayController extends Controller
{
    public function redirectToGateway(Request $request)
    {

            
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'amount' => 'required|numeric|min:10',
       ],[
        'amount.min'=> 'The amount must be $10 and above',
       ]);
    //    dd($request->all());

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

           dd($paymentDetails);

            // Alert::success('Purchase Plan Message!');
            
            // return redirect()->route('profile');


        }

    }
}
