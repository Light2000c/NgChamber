<?php

namespace App\Http\Controllers\job;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InternController extends Controller
{
    public function index(){
        $jobs = Job::where('type','intern')->paginate(10);
        return view('job.intern',[
            'jobs' => $jobs,
        ]);
    }
}
