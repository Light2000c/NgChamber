<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class viewProductController extends Controller
{
    public function index(Product $product)
    {
        return view('admin.viewProduct', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        try{
        if ($request->hasFile('product_image')) {
            $this->validate($request, [
                'product_name' => 'required',
                'product_category' => 'required',
                'product_price' => 'required',
                'product_image' => 'required|mimes:jpeg,jpg,png,jfif',
                'product_description' => 'required',
            ]);

            $new_image = time() . '-' . $request->title . '.' . $request->file('product_image')->guessExtension();

            $upload = $request->file('product_image')->move('products/', $new_image);

            $success = $product->update([
                'product_name' => $request->product_name,
                'product_category' => $request->product_category,
                'product_price' => $request->product_price,
                'product_brand'=> $request->product_brand,
                'product_size'=> $request->product_size,
                'product_colour'=> $request->product_colour,
                'product_image' => $new_image,
                'product_description' => $request->product_description,
            ]);

            if ($upload && $success) {
                return back()->with('success', 'Product has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }

        } else {

            $this->validate($request, [
                'product_name' => 'required',
                'product_category' => 'required',
                'product_description' => 'required',
            ]);

            $products = $product->update([
                'product_name' => $request->product_name,
                'product_category' => $request->product_category,
                'product_price' => $request->product_price,
                'product_brand'=> $request->product_brand,
                'product_size'=> $request->product_size,
                'product_colour'=> $request->product_colour,
                'product_description' => $request->product_description,
            ]);

            if ($products) {
                return back()->with('success', 'Product has been successfully updated.');
            } else {
                return back()->with('error', 'Something went wrong, please try again later.');
            }
        }
    } catch (Exception $e) {
        return back();
    }
    }

}
