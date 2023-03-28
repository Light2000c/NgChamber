<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class viewEventController extends Controller
{
    public function index(Event $event)
    {
        return view('admin.viewEvent', [
            'event' => $event,
        ]);
    }

    public function update(Request $request, Event $event)
    {
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'title' => 'required|',
                'category' => 'required',
                'start_date' => 'required',
                'image' => 'required|mimes:jpeg,jpg,jfif,png,webp',
                'description' => 'required',
            ]);

            $new_image = time() . '-' . $request->title . '.' . $request->file('image')->guessExtension();

            $upload = $request->file('image')->move('event/', $new_image);

            $success =  Auth::user()->event()->update([
              'title'=> $request->title,
                'category'=> $request->category,
                'location' => $request->location,
                'host' => $request->host,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'image' => $new_image,
                'description' => $request->description,
             ]);

            if ($upload && $success) {
                return back()->with('success', 'Event has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }

        } else {

            $this->validate($request, [
                'title' => 'required|',
                'category' => 'required',
                'start_date' => 'required',
                'description' => 'required',
            ]);

            $events = $event->update([
                'title'=> $request->title,
                  'category'=> $request->category,
                  'location' => $request->location,
                  'host' => $request->host,
                  'start_date' => $request->start_date,
                  'end_date' => $request->end_date,
                  'description' => $request->description,
            ]);

            if ($events) {
                return back()->with('success', 'Event has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        }

    }
}
