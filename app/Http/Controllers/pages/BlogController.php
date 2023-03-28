<?php

namespace App\Http\Controllers\pages;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $category = Category::where('model', 'blog')->get();
        return view('pages.blog',[
            'categories' => $category,
        ]);
    }
}
