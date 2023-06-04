<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlutterController extends Controller
{
    public function index(){
   return view('payment.flutter');
    }
}
