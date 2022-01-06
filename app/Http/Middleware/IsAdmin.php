<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // guest() bisa di ganti menggunakan check(). check() melihat seorang user sudah login atau belum
        // kalau menggunakan check(), tambahkan "!"auth(). karna check kalau user sudah login menghasilkan nilai true
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }

        return $next($request);
    }
}
