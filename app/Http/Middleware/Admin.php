<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\User;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && User::isAdmin()){
            return $next($request);
        } else {
            return redirect()->route('welcome');
        }
        
    }
}
