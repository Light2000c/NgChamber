<?php

namespace App\Http\Controllers\admin;

use App\Models\Leaders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class addLeadersController extends Controller
{
    public function index()
    {
        return view('admin.addLeaders');
    }

    public function store(Request $request)
    {

        try {
            $this->validate($request, [
                'name' => 'required|unique:leaders,name',
                'position' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
                'description' => 'required',
            ]);


            $new_image = time() . '-' . $request->name . '.' . $request->file('image')->guessExtension();

            $upload = $request->file('image')->move('leaders/', $new_image);

            $leaders = Leaders::create([
                'name' => $request->name,
                'position' => $request->position,
                'image' => $new_image,
                'description' => $request->description,
            ]);

            if ($upload && $leaders) {
                return back()->with('success', 'Leader has been successfully created.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
