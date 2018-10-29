<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AuthorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//    const ADMIN_CP_ROLE = 2;
//    const ADMIN_ROLE = 1;
//    const MEMBER = 0;
    public function handle($request, Closure $next, $role, $role1)
    {
        if (Auth::user()->role == $role || Auth::user()->role == $role1){
            return response()->view('error.error404');
        }
        return $next($request);
    }
}
