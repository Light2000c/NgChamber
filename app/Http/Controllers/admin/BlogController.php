<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class BlogController extends Controller
{
    public function index()
    {

        $blog = Blog::paginate(15);
        return view('admin.blog', [
            'blogs' => $blog,
        ]);
    }

    public function destroy(Blog $blog)
    {

        // $blogs = Blog::find($blog->id);

        try {
            $success = $blog->delete();
            if ($success) {
                return back();
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
