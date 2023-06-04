<?php

namespace App\Http\Controllers\job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class NormalController extends Controller
{
    public function index(){
        $jobs = Job::where('type','normal')->paginate(10);
        return view('job.normal',[
            'jobs' => $jobs,
        ]);
    }
}
