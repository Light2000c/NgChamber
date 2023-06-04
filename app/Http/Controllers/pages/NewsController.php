<?php

namespace App\Http\Controllers\pages;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index($category = null){

        if($category){
            $news = News::where('category', $category)->paginate(15);
    }else{
        $news = News::paginate(15);
    }
        $categories = Category::where('model', 'news')->get();
        return view('pages/news',[
            'news' => $news,
            'categories' => $categories,
        ]);
    }
}
