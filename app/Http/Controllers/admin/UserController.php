<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class UserController extends Controller
{
    public function index(){
        $users = User::where('is_admin', 0)->paginate(15);
        return view('admin.user', [
            'users' => $users,
        ]);
    }

    public function destroy(User $user){
        
        try{

        $success = $user->delete();

        if($success){
            return back();
        }
    } catch (Exception $e) {
        return back();
    }
    }
}
