<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Event;
use App\Mail\ContactUs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

  public $dates;

  public function __construct()
  {
    // $this->middleware('auth');
  }


  public function index()
  {


    // $initialDate = Carbon::createFromFormat('Y-m-d H:i:s', '2023-05-17 19:08:01');
    // $newDate = $initialDate->addYear();
    // $formattedDate = $newDate->format('Y-m-d H:i:s');

    // echo $formattedDate;

    // if($initialDate->isBefore($newDate)){
    //   echo "it is lesser";
    // }else{
    //   echo "it is greater";
    // }

    $events = Event::get();
    $news = News::get();
    return view('home', [
      'events' => $events,
      'news' => $news,
    ]);
  }

  public function sendMessage(Request $request)
  {

    try{
    $this->validate($request, [
      'fullname' => 'required',
      'email' => 'required',
      'subject' => 'required',
      'phone' => 'required',
      'message' => 'required',
    ]);

    $details = [
      'fullname' => $request->fullname,
      'email' => $request->email,
      'subject' => $request->subject,
      'phone' => $request->phone,
      'message' => $request->message,
    ];



    if (Mail::to('service@nigeriadiasporachamber.com')->send(new ContactUs($details))) {
      return back()->with('success', 'Message has been successfully sent to our team');
    }
  } catch (Exception $e) {
    return back();
}
  }
}
