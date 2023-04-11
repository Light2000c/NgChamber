<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
      $this->validate($request,[
        'fullname' => 'required',
        'email' => 'required|unique:users,email',
        'business_name' => 'required',
        'article_of_registration' => 'required',
        'phone' => 'required',
        'password' => 'required|min:8|confirmed',
      ]);


      $user = User::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'business_name' => $request->business_name,
        'article_of_registration' => $request->article_of_registration,
        'phone' => $request->phone,
        'website' => $request->website,
        'password' => Hash::make($request->password),
      ]);

      if(!Auth::attempt($request->only('email','password', true))){
        return back()->with('error', 'Something went wrong, please try again later.');
      }

      return redirect()->route('home');
    }

}
