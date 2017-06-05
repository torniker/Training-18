<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsAdmin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard($guard)->user() || !Auth::guard($guard)->user()->is_admin) {
            return redirect('/home');
        }

        return $next($request);
    }
}
