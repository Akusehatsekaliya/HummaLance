<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DynamicRedirectAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $redirectRoute
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $redirectRoute = null)
    {
        if (!Auth::check()) {
            return redirect($redirectRoute ? route($redirectRoute)  : "/");
        }

        return $next($request);
    }
}