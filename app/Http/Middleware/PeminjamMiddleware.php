<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login-user');
        }

        if (Auth::user()->role !== 'peminjam') {
            abort(403, 'Akses peminjam saja');
        }

        return $next($request);
    }
}