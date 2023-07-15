<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Exception;
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

    public function index()
    {
        return view('auth.register');
    }



    public function register(Request $request)
    {

        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'agreement-to-terms-and-conditions' => 'required',
        ], [
            'agreement-to-terms-and-conditions.required' => 'Please agree to terms and condions.',
        ]);

        try{

        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (!Auth::attempt($request->only('email', 'password', true))) {
            return back()->with('error', 'Something went wrong, please try again later.');
        }

        return redirect()->route('home');
    } catch (Exception $e) {
        return back();
    }
    }



    // public function purchasePlan(Request $request)
    // {

    //     $this->validate($request, [
    //         'amount' => 'required',
    //         'plan' => 'required',
    //         'phone' => 'required',
    //         'city' => 'required',
    //         'state' => 'required',
    //         'country' => 'required',
    //         'address' => 'required',
    //         'business_name' => 'required',
    //         'business_email' => 'required',
    //         'business_phone' => 'required',
    //         'business_city' => 'required',
    //         'business_state' => 'required',
    //         'business_country' => 'required',
    //         'business_address' => 'required',
    //         'business_number' => 'required',
    //     ]);

    //     session_start();

    //     $_SESSION['userInfo'] = $request->all();


    //     $new_data = $_SESSION["userInfo"];

    //     // dd($new_data);
    //     return redirect()->route('paystack');
    // }
}
