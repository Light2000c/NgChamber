<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::whereNotNull('reviewed_at')->paginate(15);
        return view('admin/product', [
            'products' => $product,
        ]);
    }

    public function destroy(Product $product)
    {

        try {

            $success = $product->delete();

            if ($success) {
                return back();
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
