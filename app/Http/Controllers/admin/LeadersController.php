<?php

namespace App\Http\Controllers\admin;

use App\Models\Leaders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class LeadersController extends Controller
{
    public function index()
    {
        $leaders = Leaders::paginate(15);
        return view('admin.leaders', [
            'leaders' => $leaders,
        ]);
    }


    public function destroy(Leaders $leaders)
    {

        try {

            $success = $leaders->delete();
            if ($success) {
                return back();
            }
        } catch (Exception $e) {
            return back();
        }
    }
}
