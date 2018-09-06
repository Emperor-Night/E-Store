<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->is_admin) {
            return back()->withInfo("You don't have a permission to access this page !");
        }

        return $next($request);
    }
}
