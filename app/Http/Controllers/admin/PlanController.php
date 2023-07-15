<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Exception;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::paginate(15);
        return view('admin.plans', [
            'plans' => $plans,
        ]);
    }


    public function destroy(Plan $plan){


        try{

        $success = $plan->delete();
        if($success){
            return back();
        }
    } catch (Exception $e) {
        return back();
    }
    }
}
