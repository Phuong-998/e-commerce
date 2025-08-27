<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if (!Auth::check()) {
            // Nếu là API thì trả JSON
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Bạn cần đăng nhập để tiếp tục'
                ], 401);
            }

            // Nếu là web thì chuyển hướng về trang login
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập');
        }

        // Nếu đăng nhập rồi thì cho đi tiếp
        return $next($request);
    }
}
