<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

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
                'title' => 'required',
                'category' => 'required',
                'to' => 'required',
                'from' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,jfif',
                'description' => 'required',
            ]);

            $new_image = time() . '-' . $request->title . '.' . $request->file('image')->guessExtension();

            $upload = $request->file('image')->move('event/', $new_image);

            $success = $event->update([
                'title' => $request->title,
                'category' => $request->category,
                'to' => $request->to,
                'from' => $request->from,
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
                'title' => 'required',
                'category' => 'required',
                'to' => 'required',
                'from' => 'required',
                'description' => 'required',
            ]);

            $events = $event->update([
                'title' => $request->title,
                'category' => $request->category,
                'to' => $request->to,
                'from' => $request->from,
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
