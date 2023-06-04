<?php

namespace App\Http\Controllers\admin;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::paginate(15);
        return view('admin.job', [
           'jobs' => $jobs,
        ]);
    }


    public function destroy(Job $job){

        try{

        $success = $job->delete();
        if($success){
            return back();
        }
    } catch (Exception $e) {
        return back();
    }
    }
}
