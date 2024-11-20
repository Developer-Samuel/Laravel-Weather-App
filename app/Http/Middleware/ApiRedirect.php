<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiRedirect
{
    public function handle(Request $request, Closure $next)
    {
        // Skontrolujte, či URL začína s /api
        if ($request->is('api/*')) {
            // Získajte pôvodnú URL
            $originalUrl = $request->getRequestUri();

            // Odstráňte /api z URL
            $newUrl = str_replace('/api', '', $originalUrl);

            // Presmerujte na novú URL
            return redirect($newUrl);
        }

        return $next($request);
    }
}
