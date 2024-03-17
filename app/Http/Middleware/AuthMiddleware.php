<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            // Check if the route exists in the request
            if ($request->route()) {
                // Check if the current route is not the 'auth.request' route to avoid redirection loop
                if ($request->route()->getName() !== 'auth.request') {
                    return redirect()->route('auth.request')->with('error', 'Unauthorized. Please log in.');
                }
            }
        }

        // Proceed with the request
        return $next($request);
    }

}
