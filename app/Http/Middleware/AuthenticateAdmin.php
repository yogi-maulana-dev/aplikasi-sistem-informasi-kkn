<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
class AuthenticateDosen extends Middleware
{
    // public function handle($request, Closure $next)
    // {

    // }

    public function handle($request, Closure $next, ...$guards)
    {

        if (Auth::guard('dosen')->check()) {
            return $next($request);
        }

        return redirect()->route('dosen.login')->with('error', 'Dosen: Anda perlu masuk terlebih dahulu.');
        // Your middleware logic here
    }

}
