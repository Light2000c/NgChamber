<?php

namespace App\Http\Controllers\pages;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(){
        $category = Category::where('model','event')->get();
        $latestNews = Blog::orderBy('created_at', 'DESC')->take(3)->get();
        return view('pages.event',[
            'categories' => $category,
            'latestNews' => $latestNews,
        ]);
    }
}
