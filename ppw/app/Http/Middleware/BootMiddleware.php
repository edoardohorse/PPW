<?php

namespace App\Http\Middleware;

use App\Http\Controllers\BootController;
use Closure;

class BootMiddleware
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

//        dd(BootController::isASDAlreadySigned());

        if( BootController::isASDAlreadySigned() == false){;
            return redirect()->route('A001');     // obbligatorio il metodo redirect
        }

        return $next($request);
    }
}
