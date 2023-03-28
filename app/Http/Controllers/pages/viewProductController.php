<?php

namespace App\Http\Controllers\pages;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class viewProductController extends Controller
{

    public function index(Product $product){
        $others = Product::where('product_category', $product->product_category)->take(4)->get();
        return view('pages.viewProduct',[
            'product' => $product,
            'others' => $others,
        ]);
    }
}
