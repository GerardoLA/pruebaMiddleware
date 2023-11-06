<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AfterCarga 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->setContent(view('vistaAfer'));
        Log::info("Este es el mensaje en el log aftercarga");
        return $response;
    }
}
