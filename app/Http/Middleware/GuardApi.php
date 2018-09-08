<?php

namespace App\Http\Middleware;

use Closure;

class GuardApi
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
		if($request->api_key !== config('app.api_key')){
			return redirect()->back();
		}
		
        return $next($request);
    }
}
