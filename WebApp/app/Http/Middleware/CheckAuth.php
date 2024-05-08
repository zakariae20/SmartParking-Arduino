<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuth
{
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            abort(404);
        }

        return $next($request);
    }
}
