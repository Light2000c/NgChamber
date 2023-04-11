<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){

        $news = News::paginate(15);
        return view('admin.news',[
            'news' => $news,
        ]);
    }

    public function destroy(News $news){

        // $blogs = Blog::find($blog->id);

        $success = $news->delete();
        if($success){
            return back();
        }

    }
}
