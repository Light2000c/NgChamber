<?php

namespace App\Http\Controllers\payment;

use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function index()
    {
        return view('payment.stripe');
    }

    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

            // $session =   \Stripe\Checkout\Session::create(
            // [
            //     'line_items': [
            //         [
            //             'price_data' => [
            //                 'currency' => 'gbd',
            //                 'price_data' => [
            //                     'name' => 'send me money!!!',
            //                 ],
            //                 'unit_amount' => 500,
            //             ],
            //             'quantity' => 1,
            //         ],
            // ],
            //     'mode' => 'payment',
            //     'success_url' => route('success'),
            //     'cancel_url' => route('pay'),
            // ]);

            

        

            // return redirect()->away($session->url);

            \Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source_url" => route('success'),
                "description" => "Test payment from itsolutionstuff.com."
          
             ]);
             Session::flash('success', 'Payment successful!');
          
             return back();
    }

    public function success()
    {
        return view('payment.stripe');
    }
}
