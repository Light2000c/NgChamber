<?php

namespace App\Http\Controllers\pages;

use App\Models\Ambassadors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmbassadorController extends Controller
{
    public function index(){

        $ambassadors = Ambassadors::paginate(10);
        return view('pages.ambassador', [
            'ambassadors' => $ambassadors
        ]);
    }
}
