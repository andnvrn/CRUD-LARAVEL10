<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PwlMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(session('token', null) == null){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
