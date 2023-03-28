<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddEventController extends Controller
{
    public function index(){
        $category = Category::where('model', 'event')->get();
        return view('admin.addEvent', [
            'categories' => $category,
        ]);
    }

    public function store(Request $request){
     $this->validate($request, [
        'title' => 'required|unique:events,title',
        'category' => 'required',
        'start_date' => 'required',
        'image' => 'required|mimes:jpeg,jpg,jfif,png,webp',
        'description' => 'required',
     ]);
     $new_image = time().'-'.$request->title.'.'.$request->file('image')->guessExtension();

     $upload = $request->file('image')->move('event/', $new_image);

     $event = Auth::user()->event()->create([
      'title'=> $request->title,
        'category'=> $request->category,
        'location' => $request->location,
        'host' => $request->host,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'image' => $new_image,
        'description' => $request->description,
     ]);

     if($upload && $event){
      return back()->with('success', 'Event has been successfully created.');
     }else{
      return back()->with('error', 'Something went wrong, please try again later.');
     }

    }
}
