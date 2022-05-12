<?php

namespace App\Http\Middleware;

use Closure;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {

        if (in_array($request->user()->role, $roles)) {


            // ida ne Mak Middleware Function Check
            return $next($request);
        } else {
            return ('/');
        }
    }
}
