<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DoctorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika sudah login sebagai doctor
        if (Auth::guard('doctor')->check()) {
            // Jika mencoba akses halaman login lagi, redirect ke dashboard
            if ($request->routeIs('doctor.login') || $request->routeIs('doctor.authenticate')) {
                return redirect()->route('doctor.dashboard.index');
            }

            return $next($request);
        }

        // Jika belum login dan bukan halaman login, redirect ke login
        if (!$request->routeIs('doctor.login') && !$request->routeIs('doctor.authenticate')) {
            return redirect()->route('doctor.login');
        }

        return $next($request);
    }
}
