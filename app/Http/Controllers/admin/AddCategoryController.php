<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class AddCategoryController extends Controller
{
  public function index()
  {

    return view('admin.addCategory');
  }

  public function store(Request $request)
  {

    try {
      $this->validate($request, [
        'model' => 'required',
        'name' => 'required',
      ]);

      $category =  Category::create([
        'name' => strtolower($request->name),
        'model' => $request->model,
      ]);

      if (!$category) {
        return back()->with('error', 'Something went wrong, please try again later.');
      }

      return back()->with("success", "Category has been successfully added.");
    } catch (Exception $e) {
      return back();
    }
  }
}
