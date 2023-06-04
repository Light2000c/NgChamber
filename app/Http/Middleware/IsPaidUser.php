<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsPaidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        try{
        if(Auth::user()){
            if(Auth::user()->is_paid_user == 1){
               return $next($request);
            }else{
                // return redirect()->route('plans');
                return back()->with('info', 'Please kindly purchase a Membership plan to complete your registration process.');
            }
    }

} catch (Exception $e) {
    return back();
}
    }
}
