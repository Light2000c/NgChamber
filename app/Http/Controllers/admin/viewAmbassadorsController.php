<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ambassadors;
use Exception;
use Illuminate\Http\Request;

class viewAmbassadorsController extends Controller
{
    public function index(Ambassadors $ambassador)
    {
        return view('admin.viewAmbassador', [
            'ambassador' => $ambassador,
        ]);
    }



    public function update(Request $request, Ambassadors $ambassador)
    {
        try {
            if ($request->hasFile('image')) {
                if ($request->name == $ambassador->name) {
                    $this->validate($request, [
                        'name' => 'required',
                        'position' => 'required',
                        'role' => 'required',
                        'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
                        'description' => 'required',
                    ]);
                } else {
                    $this->validate($request, [
                        'name' => 'required|unique:ambassadors,name',
                        'position' => 'required',
                        'role' => 'required',
                        'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
                        'description' => 'required',
                    ]);
                }

                $new_image = time() . '-' . $request->title . '.' . $request->file('image')->guessExtension();

                $upload = $request->file('image')->move('ambassadors/', $new_image);

                $success = $ambassador->update([
                    'name' => $request->name,
                    'position' => $request->position,
                    'role' => $request->role,
                    'image' => $new_image,
                    'description' => $request->description,
                ]);

                if ($upload && $success) {
                    return back()->with('success', 'Ambassador details has been successfully updated.');
                } else {
                    return back()->with('error', 'Something went wrong, please try again later.');
                }
            } else {

                if ($request->name == $ambassador->name) {
                    $this->validate($request, [
                        'name' => 'required',
                        'position' => 'required',
                        'role' => 'required',
                        'description' => 'required',
                    ]);
                } else {
                    $this->validate($request, [
                        'name' => 'required|unique:ambassadors,name',
                        'position' => 'required',
                        'role' => 'required',
                        'description' => 'required',
                    ]);
                }

                $success = $ambassador->update([
                    'name' => $request->name,
                    'position' => $request->position,
                    'role' => $request->role,
                    'description' => $request->description,
                ]);

                if ($success) {
                    return back()->with('success', 'Ambassador details  has been successfully updated.');
                } else {
                    return back()->with('error', 'Something went wrong, please try again later.');
                }
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
