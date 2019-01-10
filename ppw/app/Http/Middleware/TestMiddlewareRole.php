<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddlewareRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $age)
    {

        $reqRole = $request->role;
        $reqAge = $request->age;

        if($reqAge < $age || $reqRole != $role){
            return redirect('testRole')
                ->with( [
                    'age'   =>  $reqAge,
                    'role'  =>  $reqRole
                ]);     // obbligatorio il metodo redirect

        }
        return $next($request);
    }
}
