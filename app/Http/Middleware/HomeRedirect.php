<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeRedirect
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('/')) {
            return redirect('/weather');
        }

        return $next($request);
    }
}
