<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Leaders;
use Exception;
use Illuminate\Http\Request;

class viewLeadersController extends Controller
{
    public function index(Leaders $leader)
    {
        return view('admin.viewLeaders', [
            'leader' => $leader,
        ]);
    }



    public function update(Request $request, Leaders $leader)
    {
        try{
        if ($request->hasFile('image')) {
            if ($request->name == $leader->name) {
                $this->validate($request, [
                    'name' => 'required',
                    'position' => 'required',
                    'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
                    'description' => 'required',
                ]);
            } else {
                $this->validate($request, [
                    'name' => 'required|unique:leaders,name',
                    'position' => 'required',
                    'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
                    'description' => 'required',
                ]);
            }


            $new_image = time() . '-' . $request->title . '.' . $request->file('image')->guessExtension();

            $upload = $request->file('image')->move('leaders/', $new_image);

            $success = $leader->update([
                'name' => $request->name,
                'position' => $request->position,
                'image' => $new_image,
                'description' => $request->description,
            ]);

            if ($upload && $success) {
                return back()->with('success', 'Leader details has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        } else {

            if ($request->name == $leader->name) {
                $this->validate($request, [
                    'name' => 'required',
                    'position' => 'required',
                    'description' => 'required',
                ]);
            } else {
                $this->validate($request, [
                    'name' => 'required|unique:leaders,name',
                    'position' => 'required',
                    'description' => 'required',
                ]);
            }

            $leaders = $leader->update([
                'name' => $request->name,
                'position' => $request->position,
                'description' => $request->description,
            ]);

            if ($leaders) {
                return back()->with('success', 'Leader details  has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        }
    } catch (Exception $e) {
        return back();
    }
    }
}
