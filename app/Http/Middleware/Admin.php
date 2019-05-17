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
            return redirect()->away('https://www.youtube.com/watch?v=tEo9sqzX1lQ');
        }
        
    }
}
