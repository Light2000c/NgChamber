<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;

class viewBlogController extends Controller
{
    public function index(Blog $blog)
    {

        return view('admin.viewBlog', [
            'blog' => $blog,
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        try{
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'title' => 'required',
                'category' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,jfif',
                'description' => 'required',
            ]);

            $new_image = time() . '-' . $request->title . '.' . $request->file('image')->guessExtension();

            $upload = $request->file('image')->move('blog/', $new_image);

            $success = $blog->update([
                'title' => $request->title,
                'category' => $request->category,
                'image' => $new_image,
                'description' => $request->description,
            ]);

            if ($upload && $success) {
                return back()->with('success', 'Blog Post has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }

        } else {

            $this->validate($request, [
                'title' => 'required',
                'category' => 'required',
                'description' => 'required',
            ]);

            $blogs = $blog->update([
                'title' => $request->title,
                'category' => $request->category,
                'description' => $request->description,
            ]);

            if ($blogs) {
                return back()->with('success', 'Blog Post has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        }
    } catch (Exception $e) {
        return back();
    }
    }

}
