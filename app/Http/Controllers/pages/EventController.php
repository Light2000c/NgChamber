<?php

namespace App\Http\Controllers\pages;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(){

        $events = Event::paginate(10);
        return view('pages.event',[
            'events' => $events,
        ]);
    }
}
