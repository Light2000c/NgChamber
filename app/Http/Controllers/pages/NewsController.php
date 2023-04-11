<?php

namespace App\Http\Controllers\pages;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(15);
        return view('pages/news',[
            'news' => $news,
        ]);
    }
}
