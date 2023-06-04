<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(){
        try{

        Auth::logout();

        return redirect()->route('home');
    } catch (Exception $e) {
        return back();
    }
    }
}
