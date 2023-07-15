<?php

namespace App\Http\Controllers\profile;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index(){

        $transactions = Transaction::where('user_id', Auth::user()->id)->paginate(10);
     return view('profile.transaction', [
        'transactions' => $transactions
     ]);
    }
}
