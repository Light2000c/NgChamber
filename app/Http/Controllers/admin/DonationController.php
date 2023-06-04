<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Exception;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        $donations = Donation::paginate(15);
        return view('admin.donation', [
           'donations' => $donations,
        ]);
    }


    public function destroy(Donation $donation){


        try{

        $success = $donation->delete();
        if($success){
            return back();
        }
    } catch (Exception $e) {
        return back();
    }
    }
}
