<?php

namespace App\Http\Middleware;

use Closure;
use App\User as user

class AdminType
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
        if($request->user()->type == "admin"){
            return $next($request);
          }
            return redirect('auth/login')->with('error','You have not admin access');
    }
}
