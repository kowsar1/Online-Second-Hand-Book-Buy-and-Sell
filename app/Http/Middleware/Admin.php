<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        if(auth()->user()->role=='admin')
        {
                //notify()->error('Your are not admin');

        return $next($request);
        }
               notify()->error('Your are not admin');

        return redirect()->route('webhome');
    }
}

// if(auth()->user()->role=='admin'){
//     return $next($request);
// }
// //        notify()->error('Your are not admin');
// return redirect()->route('home');