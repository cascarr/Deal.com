<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class QamMiddleware
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
        foreach (Auth::user()->role as $role)
        {
            if ($role->name == 'QAM')
            {
                // proceed to the request
                return $next($request);
            }
        }
        
        //return redirect('/admin');
        return back();
    }
}
