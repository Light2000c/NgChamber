<?php

namespace App\Http\Controllers\pages;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class viewBlogpostController extends Controller
{
   public function index($blog){

    $blogs = Blog::find($blog);
    $related = Blog::where('category', $blogs->category)->take(3)->get();
    return view(
        'pages.viewBlogPost', [
            'blogs' => $blogs,
            'related' => $related,
    ]);
   }

}
