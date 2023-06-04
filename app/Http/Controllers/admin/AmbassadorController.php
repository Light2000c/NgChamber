<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ambassadors;
use Exception;
use Illuminate\Http\Request;

class AmbassadorController extends Controller
{
    public function index(){
        $ambassadors = Ambassadors::paginate(15);
        return view('admin.ambassador', [
           'ambassadors' => $ambassadors,
        ]);
    }


    public function destroy(Ambassadors $ambassador){

        // $blogs = Blog::find($blog->id);
        try{

        $success = $ambassador->delete();
        if($success){
            return back();
        }

    } catch (Exception $e) {
        return back();
    }

    }
}
