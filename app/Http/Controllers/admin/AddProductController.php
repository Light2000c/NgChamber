<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddProductController extends Controller
{
    public function index(){
        return view('admin.addProduct');
    }

    public function store(Request $request){

     $this->validate($request, [
        'product_name' => 'required|unique:products,product_name',
        'product_category' => 'required',
        'product_image' => 'required|mimes:jpeg,jpg,png,jfif',
        'product_description' => 'required',
     ]);


     $new_image = time().'-'.$request->title.'.'.$request->file('product_image')->guessExtension();

     $upload = $request->file('product_image')->move('products/', $new_image);

     $product = Auth::user()->product()->create([
      'product_name'=> $request->product_name,
      'product_category'=> $request->product_category,
      'product_image'=> $new_image,
      'product_description'=> $request->product_description,
     ]);

     if($upload && $product){
      return back()->with('success', 'Product has been successfully created.');
     }else{
      return back()->with('error', 'Something went wrong, please try again later.');
     }

    }
}
