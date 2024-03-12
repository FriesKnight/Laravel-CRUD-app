<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if user is authenticated and has the 'admin' role
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }

        // If not an admin, redirect or handle as per your application's logic
        return redirect()->route('home')->with('error', 'You do not have permission to access this page.');
    }
}