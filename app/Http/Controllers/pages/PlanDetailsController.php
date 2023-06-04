<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class PlanDetailsController extends Controller
{
   
    public function index($plan){
        
        if(!$plan){
            return redirect()->route('plans');
        }
       return view('pages.planDetails',[
        'plan' => $plan,
       ]);
    }

    public function pay(Request $request){
        try{
        if($request->pay == 'paystack'){
           return redirect()->route('paystack');
        }

        if($request->pay == 'stripe'){

        }
    } catch (Exception $e) {
        return back();
    }
    }
}
