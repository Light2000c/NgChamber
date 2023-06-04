<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class TeamMembersController extends Controller
{
    public function index(){
        $users = User::where('is_admin', 1)->paginate(15);
        return view('admin.teamMember', [
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
