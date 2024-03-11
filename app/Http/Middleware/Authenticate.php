<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request)
    {
      if($request->expectsJson()){
        return route('api.login');
      }

      if($request->is('admin/*')) {
        return route('admin.login');
      }

      if($request->is('superadmin/*')) {
        return route('superadmin.login');
      }

      return route('login');

    }
}
