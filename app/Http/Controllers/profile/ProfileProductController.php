<?php

namespace App\Http\Controllers\profile;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileProductController extends Controller
{
    public function index(){
        $categories = Category::where('model', 'product')->get();
        $products = Product::where('user_id', Auth::user()->id)->get();
        return view('profile.profileProduct', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }


    public function store(Request $request){

        $this->validate($request, [
            'product_name' => 'required|unique:products,product_name',
            'product_category' => 'required',
            'product_price' => 'required',
            'product_image' => 'required|mimes:jpeg,jpg,png,jfif,webp',
            'product_description' => 'required',
         ]);
    
    
         $new_image = time().'-'.$request->title.'.'.$request->file('product_image')->guessExtension();
    
         $upload = $request->file('product_image')->move('products/', $new_image);
    
         $product = Auth::user()->product()->create([
          'product_name'=> $request->product_name,
          'product_category'=> $request->product_category,
          'product_price'=> $request->product_price,
          'product_brand'=> $request->product_brand,
          'product_size'=> $request->product_size,
          'product_colour'=> $request->product_colour,
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
