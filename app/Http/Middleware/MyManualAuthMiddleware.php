<?php

namespace App\Http\Middleware;

use App\ManualAuth\Guard;
use Closure;

class MyManualAuthMiddleware
{
    protected $manualguard;

    /**
     * MyManualAuthMiddleware constructor.
     * @param $manualguard
     */
    public function __construct(Guard $manualguard)
    {
        $this->manualguard = $manualguard;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->manualguard->check()){
            return $next($request);
        }
        return redirect('login');
    }
}
