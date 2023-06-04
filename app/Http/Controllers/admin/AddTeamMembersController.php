<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AddTeamMembersController extends Controller
{
    public function index(){
        return view('admin.addTeamMember');
    }

    public function store(Request $request){
        $this->validate($request, [
            'fullname' => 'required|',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);

       $users = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 1,
        ]);

        if(!$users){
           return back()->with('error', 'Soemthing went wrong, please try again later.');
        }

        return back()->with('success', 'Team member has been successfully added.');
    }
}
