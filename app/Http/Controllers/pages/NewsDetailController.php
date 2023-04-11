<?php

namespace App\Http\Controllers\pages;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsDetailController extends Controller
{
    public function index(News $news){
        return view('pages.newsDetail',[
            'news' => $news,
        ]);
    }
}
