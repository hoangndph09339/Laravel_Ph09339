<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->password == $request->password)
        //dd($request->only('username', 'password'));
        //if (Auth::attempt($request->only('username', 'password')))
        {
            return $next($request);
        }else{return redirect()->route('/');}
    }
}
