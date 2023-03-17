<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddEventController extends Controller
{
    public function index(){
        return view('admin.addEvent');
    }

    public function store(Request $request){
     $this->validate($request, [
        'title' => 'required|unique:events,title',
        'category' => 'required',
        'to' => 'required',
        'from' => 'required',
        'description' => 'required',
     ]);
     $new_image = time().'-'.$request->title.'.'.$request->file('image')->guessExtension();

     $upload = $request->file('image')->move('event/', $new_image);

     $event = Event::create([
      'user_id' => Auth::user()->id,
      'title'=> $request->title,
            'category'=> $request->category,
            'to' => $request->to,
            'from' => $request->from,
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
