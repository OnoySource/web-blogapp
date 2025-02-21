<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengunjung adalah user yang baru
        if (!session()->has('visitor')) {
            // Catat kunjungan pengunjung baru
            Visitor::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'visited_at' => now(),
            ]);
            session(['visitor' => true]); // Tandai bahwa pengunjung sudah tercatat
            
        }

        return $next($request);
    }
}
