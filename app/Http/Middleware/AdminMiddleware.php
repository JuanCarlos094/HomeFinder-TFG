<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Si no es admin, redirige a /home o donde prefieras
        if (!Auth::check() || Auth::user()->rol !== 'admin') {
            return redirect()->route('admin.home');
        }

        return $next($request);
    }
}
