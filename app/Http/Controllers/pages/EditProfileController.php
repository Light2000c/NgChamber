<?php

namespace App\Http\Controllers\pages;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index(){
        return view('pages.editProfile');
    }

    public function store(Request $request){

        try{
        if(Auth::user()->email == $request->email){
        $this->validate($request,[
            'fullname' => 'required',
            'email' => 'required',
        ]);
    }else{
        $this->validate($request,[
            'fullname' => 'required',
            'email' => 'required|unique:users,email',
        ]);
    }

    $user = User::find(Auth::user()->id);
    $success = $user->update([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'business_name' => $request->business_name,
        'article_of_registration' => $request->article_of_registration,
        'phone' => $request->phone,
        'website' => $request->website,
        'whatsapp' => $request->whatsapp,
    ]);

    if(!$success){
        return back()->with('error', 'Something went wrong, please try again later.');
    }else{
        return back()->with('success', 'Profile has been successfully updated');
    }
} catch (Exception $e) {
    return back();
}
    }
}
