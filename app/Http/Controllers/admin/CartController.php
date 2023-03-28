<?php

namespace App\Http\Controllers\admin;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
       $carts = Cart::paginate(15);
        return view('admin.cart',[
            'carts' => $carts,
         ]);
    }

    public function destroy(Cart $cart){

        $success = $cart->delete();

        if(!$success){
            return back()->with('error', 'Something went wrong, Please try again later.');
        }

        return back();

    }
}
