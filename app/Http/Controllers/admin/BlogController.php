<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){

        $blog = Blog::paginate(15);
        return view('admin.blog',[
            'blogs' => $blog,
        ]);
    }

    public function destroy(Blog $blog){

        // $blogs = Blog::find($blog->id);

        $success = $blog->delete();
        if($success){
            return back();
        }

    }

}
