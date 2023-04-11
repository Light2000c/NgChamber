<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function index(){
        return view('profile.call');
    }
}
