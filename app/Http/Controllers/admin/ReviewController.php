<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;

class ReviewController extends Controller
{
    public function index(){
        $products = Product::whereNull('reviewed_at')->get();
        return view('admin.review', [
            'products' => $products,
        ]);
    }

    public function approve(Product $product){

      try{
      $approve = $product->update([
        // 'reviewed_at' => Carbon::now()->timestamp,
        'reviewed_at' => Carbon::now()->toDateTimeString(),
      ]);

    //   dd(Carbon::now()->toDateTimeString());

      if($approve){
        return back();
      }
    } catch (Exception $e) {
      return back();
  }
    }

}
