<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyAjax
{
    public function handle(Request $request, Closure $next)
    {
        if ( ! $request->ajax())
            return abort(404, 'NOT FOUND');

        return $next($request);
    }
}
