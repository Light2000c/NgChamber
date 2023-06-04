<?php

namespace App\Http\Controllers\plans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class corporateController extends Controller
{
    public function index(){
        return view('plans.corporate');
       }
}
