<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
class AuthenticateAdmin extends Middleware
{
    // public function handle($request, Closure $next)
    // {

    // }

    public function handle($request, Closure $next, ...$guards)
    {

        if (Auth::guard('admin')->check()) {
            return $next($request);
        }

        return redirect()->route('admin.login')->with('error', 'Admin: Anda perlu masuk terlebih dahulu.');
        // Your middleware logic here
    }

}
