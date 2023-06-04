<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class EventController extends Controller
{
    public function index()
    {

        $event = Event::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.event', [
            'events' => $event,
        ]);
    }


    public function destroy(Event $event)
    {

        try {

            $success = $event->delete();
            if ($success) {
                return back();
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
