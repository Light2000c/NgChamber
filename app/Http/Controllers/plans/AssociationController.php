<?php

namespace App\Http\Controllers\plans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public function index(){
        return view('plans.association');
       }
}
