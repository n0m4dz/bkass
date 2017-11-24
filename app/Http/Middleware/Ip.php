<?php

namespace App\Http\Middleware;

use Closure;

class Ip
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
            return redirect('/fail');
        }
        return $next($request);
    }
}
