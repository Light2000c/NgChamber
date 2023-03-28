<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AddBlogController extends Controller
{
    public function index()
    {
        $category = Category::where('model','blog')->get();
        return view('admin.addBlog',[
            'categories' => $category,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'title'=>'required|unique:blogs,title',
          'category'=> 'required',
          'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
          'description' => 'required'
        ]);


    $new_image = time().'-'.$request->title.'.'.$request->file('image')->guessExtension();

   $upload = $request->file('image')->move('blog/', $new_image);

   $blog = Blog::create([
    'user_id' => Auth::user()->id,
    'title'=> $request->title,
          'category'=> $request->category,
          'image' => $new_image,
          'description' => $request->description,
   ]);

   if($upload && $blog){
    return back()->with('success', 'Blog Post has been successfully created.');
   }else{
    return back()->with('error', 'Something went wrong, please try again later.');
   }


    }

}
