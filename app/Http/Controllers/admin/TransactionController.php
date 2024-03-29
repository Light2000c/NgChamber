<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::paginate(15);
        return view('admin.transactions', [
            'transactions' => $transactions,
        ]);
    }


    public function destroy(Transaction $transaction){


        try{

        $success = $transaction->delete();
        if($success){
            return back();
        }
    } catch (Exception $e) {
        return back();
    }
    }
}
