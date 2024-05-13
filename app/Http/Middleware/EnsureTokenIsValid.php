<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request ->bearerToken();

        if (!$token){
            return response()->json(["error"=>"Token is missing"], 401);
        }

        if ($token !== env ('BEARER_TOKEN')) {
            return response()->json(['error' =>"Token is invalid"], 401);
        }

        return $next($request);
    }
}
