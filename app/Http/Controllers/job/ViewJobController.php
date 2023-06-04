<?php

namespace App\Http\Controllers\job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class ViewJobController extends Controller
{
    public function index(Job $job){
     return  view('job.viewjob', [
        'job' => $job
       ]);
    }
}
