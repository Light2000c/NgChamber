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
        $category = Category::where('model','event')->get();
        $latestNews = Blog::orderBy('created_at', 'DESC')->take(3)->get();
        return view('pages.event',[
            'events' => $events,
            'categories' => $category,
            'latestNews' => $latestNews,
        ]);
    }
}
