<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTokenDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedDomain = config("app.url");

        $origin = $request->headers->get('Origin') ?? $request->headers->get('Referer');

        if ($origin == null && strpos($origin, $allowedDomain) === false) {
            return response()->json(['message' => 'Unauthorized request'], 403);
        }
        return $next($request);
    }
}
