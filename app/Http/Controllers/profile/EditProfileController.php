<?php

namespace App\Http\Controllers\profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index(){
        return view('profile.editProfile');
    }

    public function store(Request $request){

      try{
      $this->validate($request, [
        'fullname' => 'required',
        'email' => 'required',
        'business_name' => 'required',
        'business_email' => 'required',
        'business_number' => 'required',
        'business_type' => 'required',
        'business_industry' => 'required',
      ]);
      $user = User::where('id', Auth::user()->id)->first();

      $update = $user->update([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'phone' => $request->phone,
        'city' => $request->city,
        'state' => $request->state,
        'country' => $request->country,
        'address' => $request->address,
        'business_name' => $request->business_name,
        'business_email' => $request->business_email,
        'business_phone' => $request->business_phone,
        'business_city' => $request->business_city,
        'business_state' => $request->business_state,
        'business_country' => $request->business_country,
        'business_address' => $request->business_address,
        'business_number' => $request->business_number,
        'business_type' => $request->business_type,
        'business_industry' => $request->business_industry,
      ]);

      if($update){
        return back();
      }
    } catch (Exception $e) {
      return back();
  }
    }

}
