<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ambassadors;
use Exception;
use Illuminate\Http\Request;

class addAmbassadorsController extends Controller
{
    public function index()
    {
        return view('admin.addAmbassador');
    }

    public function store(Request $request)
    {

        try {

            $this->validate($request, [
                'name' => 'required|unique:blogs,title',
                'position' => 'required',
                'role' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
                'description' => 'required',
            ]);


            $new_image = time() . '-' . $request->name . '.' . $request->file('image')->guessExtension();

            $upload = $request->file('image')->move('ambassadors/', $new_image);

            $leaders = Ambassadors::create([
                'name' => $request->name,
                'position' => $request->position,
                'role' => $request->role,
                'image' => $new_image,
                'description' => $request->description,
            ]);

            if ($upload && $leaders) {
                return back()->with('success', 'Ambassador has been successfully added.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
