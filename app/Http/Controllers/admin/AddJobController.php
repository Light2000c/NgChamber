<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;

class AddJobController extends Controller
{
    public function index()
    {
        return view('admin.addJob');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|unique:jobs,title',
                'type' => 'required',
                'description' => 'required',
            ]);

            $job = Job::create([
                'title' => $request->title,
                'type' => $request->type,
                'description' => $request->description,
            ]);

            if ($job) {
                return back()->with('success', 'Job has been successfully created.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
