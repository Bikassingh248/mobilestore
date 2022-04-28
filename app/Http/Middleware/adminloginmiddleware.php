<?php

namespace App\Http\Middleware;

use Closure;

class adminloginmiddleware
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
        // if($request->path()=="adminlogin" && $request->session()->has('admin')){
        //     return redirect('dashboard');

        // }
        // return $next($request);
        }
}
