<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class cartController extends Controller
{
    public function index(){}

    public function addToCart(Request $request){

        $request->validate([
            'productId' => 'required',
            'userId' => 'required',
        ]);

        $product = Product::find($request->productId);
        $user = User::find($request->userId);

        if($product->hasCart($user)){
          
        }

       $success = $product->cart()->create([
            'user_id' => $user->id
        ]);

        if($success){
            return json_encode(array('success'=> true));
        }else{
            return json_encode(array('success'=> false));
        }


        
    }
}
