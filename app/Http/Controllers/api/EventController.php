<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return Event::paginate(4);
    }

    
      public function search($param){
         return Event::where('title','LIKE','%'.$param.'%')->paginate(2);
      }
    
}
