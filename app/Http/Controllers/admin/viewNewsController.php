<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class viewNewsController extends Controller
{
    public function index(News $news)
    {

        return view('admin.viewNews', [
            'news' => $news,
        ]);
    }

    public function update(Request $request, News $news)
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

            $success = $news->update([
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

            $blogs = $news->update([
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
