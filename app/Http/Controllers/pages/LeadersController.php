<?php

namespace App\Http\Controllers\pages;

use App\Models\Leaders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeadersController extends Controller
{
    public function index(){

        $leaders = Leaders::paginate(10);
        return view('pages.leaders', [
            'leaders' => $leaders,
        ]);
    }
}
