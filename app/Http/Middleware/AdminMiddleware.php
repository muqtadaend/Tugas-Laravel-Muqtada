<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah user sudah login dan rolenya adalah admin
       if ($request->user() && $request->user()->role === 'admin') {
        return $next($request);
        }

        // Jika bukan admin, tendang ke halaman dashboard dengan error 403
        abort(403, 'Anda tidak memiliki akses ke halaman ini.');
    }
}