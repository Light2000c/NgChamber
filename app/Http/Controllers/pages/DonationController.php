<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function  index(){
        return view('pages.donation');
    }

    public function pay(Request $request){
       $this->validate($request, [
        'name' => 'required',
        'amount' => 'required|numeric|min:10',
       ],[
        'amount.min'=> 'The amount must be $10 and above',
       ]);

       dd($request->all());
    }
}
