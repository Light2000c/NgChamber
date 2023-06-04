<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Exception;
use Illuminate\Support\Facades\Auth;

class AddNewsController extends Controller
{
    public function index()
    {
        $category = Category::where('model', 'news')->get();
        return view('admin.addnews', [
            'categories' => $category,
        ]);
    }

    public function store(Request $request)
    {

        try {
            $this->validate($request, [
                'title' => 'required|unique:blogs,title',
                'category' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
                'description' => 'required',
            ]);


            $new_image = time() . '-' . $request->title . '.' . $request->file('image')->guessExtension();

            $upload = $request->file('image')->move('news/', $new_image);

            $news = News::create([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'category' => $request->category,
                'image' => $new_image,
                'description' => $request->description,
            ]);

            if ($upload && $news) {
                return back()->with('success', 'News has been successfully created.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
