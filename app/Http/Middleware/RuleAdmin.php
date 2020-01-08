<?php

namespace App\Http\Middleware;

use Closure;

class RuleAdmin
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
        if ($request->user()->rule == 2){
            return $next($request);
        }
        return view("welcome");
    }
}
