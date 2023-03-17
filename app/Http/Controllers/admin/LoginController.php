<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){
     $this->validate($request,[
        'email'=> 'required',
        'password'=> 'required'
      ]);

      if(!Auth::attempt($request->only('email','password',true))){
        return back()->with('error','Login was not successful, please check login details and try again.');
      }

      return redirect()->route('adminDashboard');
    }
}
