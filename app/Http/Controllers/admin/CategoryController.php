<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(15);
        return view('admin.category', [
            'categories' => $categories,
        ]);
    }

    public function destroy(Category $category)
    {

        try {
            $success = $category->delete();

            if (!$success) {
                return back('error', 'Something went wrong, try again later.');
            }

            return back();
        } catch (Exception $e) {
            return back();
        }
    }
}
