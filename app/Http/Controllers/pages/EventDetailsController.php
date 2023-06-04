<?php

namespace App\Http\Controllers\pages;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventDetailsController extends Controller
{
    public function index(Event $event){
        
    // $event = Event::find($id);

    // if(!$event){
    //     return;
    // }

    return view('pages.eventDetails',[
        'event' => $event,
    ]);
     
    }
}
