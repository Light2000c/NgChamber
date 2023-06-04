<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;

class ViewJobController extends Controller
{
    public function index(Job $job){
        return view('admin.viewJob', [
            'job' => $job,
        ]);
    }



    public function update(Request $request, Job $job)
    {
        try{
        if($request->title == $job->title){
            $this->validate($request, [
                'title'=>'required',
          'type'=> 'required',
          'description' => 'required',
            ]);
        }else{
            $this->validate($request, [
            'title'=>'required|unique:jobs,title',
            'type'=> 'required',
            'description' => 'required',
              ]);
        }


            $success = $job->update([
                'title'=> $request->title,
                'type'=> $request->type,
                'description' => $request->description,
            ]);


            if ($success) {
                return back()->with('success', 'Job details  has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        } catch (Exception $e) {
            return back();
        }

    }
 
}
