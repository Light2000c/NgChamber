<?php

namespace App\Http\Controllers\pages;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    
    public function index(){
        $products = Product::whereNotNull('reviewed_at')->orderBy('created_at', 'Desc')->paginate(9);
        $topProducts = Product::whereNotNull('reviewed_at')->orderBy('created_at', 'Desc')->take(3)->get();
        $categories = Category::where('model', 'product')->get();
       return view('pages.shop', [
        'products' => $products,
        'categories' => $categories,
        'topProducts' => $topProducts
       ]);
    }
}
