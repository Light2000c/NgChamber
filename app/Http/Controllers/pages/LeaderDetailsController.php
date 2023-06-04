<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaderDetailsController extends Controller
{
    public function index($id){
        if($id == null) {
            return redirect()->route('leaders');
        }
        return view('pages.leader-details', [
          'id' => $id,
        ]);
    }
}
