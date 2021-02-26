<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;


class CustomerMiddleware
{
    private $cus;
    public function __construct()
    {
        
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guards = 'cus')
    {
        if (Auth::guard('cus')->check()) {
            return $next($request);
        }
        return redirect()->back()->with('first_login','Bạn cần đăng nhập');   
    }
}
