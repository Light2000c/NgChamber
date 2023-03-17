<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $product = Product::paginate(15);
        return view('admin/product',[
            'products' => $product,
        ]);
    }

    public function delete(){

    }

}