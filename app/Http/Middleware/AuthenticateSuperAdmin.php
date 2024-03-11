<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
class AuthenticateSuperAdmin extends Middleware
{
    // public function handle($request, Closure $next)
    // {

    // }

    public function handle($request, Closure $next, ...$guards)
    {

        if (Auth::guard('superadmin')->check()) {
            return $next($request);
        }

        return redirect()->route('superadmin.login')->with('error', 'Admin: Anda perlu masuk terlebih dahulu.');
        // Your middleware logic here
    }

}
