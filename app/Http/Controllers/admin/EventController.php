<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(){

        $event = Event::paginate(15);
        return view('admin.event',[
            'events' => $event,
        ]);
    }


    public function delete(){

    }
}
