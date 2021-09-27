<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class my1stmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //  middleware logic comes inside it
    public function handle(Request $request, Closure $next)
    {
        if( $request->access && $request->access='no' )
        {
            return redirect('about.blade.php');
        }
        return $next($request);
    }
}
