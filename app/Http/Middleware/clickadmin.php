<?php

namespace App\Http\Middleware;

use Closure;

class clickadmin
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
        if($request->session()-has('aname'))
        {    
            return $next($request);
        }
        else
        {
            return redirect('adminlogin');
        }
    }
}