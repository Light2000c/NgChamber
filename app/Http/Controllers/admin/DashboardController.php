<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        
        $allNews = News::orderBy('created_at', 'DESC')->paginate(4);
        $users = User::get();
        $events = Event::get();
        $news = News::get();
        return view('admin.dashboard', [
            'users' => $users,
            'events' => $events,
            'news' => $news,
            'allNews' => $allNews,
        ]);
    }
}
