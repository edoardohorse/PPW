<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddlewareAge
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

        $reqAge = intval($request->age);
        if($reqAge < 14){
            return redirect()->route('testAge')->with( ['age' => $reqAge]);     // obbligatorio il metodo redirect
        }

        return $next($request);
    }
}
