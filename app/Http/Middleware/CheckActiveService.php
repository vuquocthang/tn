<?php

namespace App\Http\Middleware;

use Closure;

class CheckActiveService
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
		if( empty($request->user()->service_type) ){
			return redirect()->back();
		}
		
        return $next($request);
    }
}
