<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    //  // Check if the custom header exists
    //  if (!$request->hasHeader('Authorization')) {
    //     return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    // }

    // // Retrieve the token from the custom header
    // $token = $request->header('Authorization');
    // ## replace Bearer with empty string
    // $token = str_replace('Bearer ', '', $token);

    // try {
    //     // Attempt to verify the token
    //     $user = JWTAuth::parseToken($token)->authenticate();
    //     print_r($user);

    //     // If the token is valid, set the user on the request
    //     $request->merge(['user' => $user]);
    // } catch (\Exception $e) {
    //     print_r($e->getMessage());
    //     // Token is invalid or expired
    //     return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    // }

    // // Proceed to the next middleware or route handler
    // return $next($request);
     // Check if the token exists in the request header
     if (!$request->hasHeader('Authorization')) {
        return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }

    // Retrieve the token from the request header
    $token = $request->bearerToken();

    if (!$token) {
        return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }

    try {
        // Attempt to verify the token
        $user = JWTAuth::setToken($token)->getPayload();
        $data = $user['data'];
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }
        $exp = $data['exp'];
        if ($exp < time()) {
            return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        // merge the user into the request
        $request->merge(['user' => $data]);
    } catch (\Exception $e) {
        // Token is invalid or expired
        return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }

    // Proceed to the next middleware or route handler
    return $next($request);

    }
}
