<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Seller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'seller') {
            return $next($request);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Permission denied'
            ]);;
        }
    }
}
