<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
{
    public function index()
    {


        return view('admin.editprofile');
    }

    public function update(Request $request)
    {


        try {
            $user = User::where('id', Auth::user()->id)->first();

            if ($request->has('fullname')) {

                $this->validate($request, [
                    'fullname' => 'required',
                    'email' => 'required',
                ]);

                $update = $user->update([
                    'fullname' => $request->fullname,
                    'email' => $request->email
                ]);

                if (!$update) {
                    return back()->with('error', 'profile was not successfully updated.');
                } else {
                    return back()->with('success', 'Profile has been successfully updated.');
                }
            } else {
                $this->validate($request, [
                    'current_password' => 'required',
                    'password' => 'required|confirmed',
                ]);


                if (Hash::check($request->current_password, $user->password)) {

                    $update = $user->update([
                        'password' => Hash::make($request->password),
                    ]);

                    if (!$update) {
                        return back()->with('error', 'Password was not successfully changed.');
                    } else {
                        return back()->with('success', 'Password has been successfully changed.');
                    }
                } else {
                    return back()->with('check', 'The current password you provided is incorrect.');
                }
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
