<?php

namespace App\Http\Controllers\pages;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){}


    public function store(Request $request, Product $product){

        // if($product->hasCart(Auth::user())){
        //     return back();
        // }

       $product->cart()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
       
    }

    public function destroy(Request $request, Product $product){
     
        $product->cart()->where('user_id', Auth::user()->id)->delete();

        return back();
       
    }
}
