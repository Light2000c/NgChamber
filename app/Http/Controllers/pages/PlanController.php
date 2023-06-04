<?php

namespace App\Http\Controllers\pages;

use Exception;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PlanController extends Controller
{
    public function index(){
        return view('pages.plans');
    }


    public function purchasePlan(Request $request)
    {
        try{
        

        $user = User::where('id', Auth::user()->id)->first();
        $this->validate($request, [
            'amount' => 'required',
            'plan' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required',
            'business_name' => 'required',
            'business_email' => 'required',
            'business_phone' => 'required',
            'business_city' => 'required',
            'business_state' => 'required',
            'business_country' => 'required',
            'business_address' => 'required',
            'business_number' => 'required',
            'business_type' => 'required',
            'business_industry' => 'required',
        ]);

        $plan = Plan::get();
        // if(!$plan->hasUser(Auth::user())){
         
      

        session_start();
        
       $_SESSION['userInfo'] = $request->all();

      
        $new_data = $_SESSION["userInfo"];

      
        // return redirect()->route('paystack');
        return redirect()->route('pay-with-paypal');

    // }else{
       
    //     return back()->with('info', 'You already have an active plan.');
     
    // }
} catch (Exception $e) {
    return back();
}
    }
}
