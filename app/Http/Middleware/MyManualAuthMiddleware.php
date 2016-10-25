<?php

namespace App\Http\Middleware;

use Closure;
use App\ManualAuth\ManualGuard;

class MyManualAuthMiddleware
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
        $manualguard = new ManualGuard();
        if($manualguard->check()){
            return $next($request);
        }
        return redirect('login');
    }
}
