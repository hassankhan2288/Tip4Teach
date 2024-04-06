<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Branch;


class BasicAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        $credentials = $this->getBasicAuthCredentials($request);

        if (!$this->validateBasicAuthCredentials($credentials)) {
            return response()->json(['error' => 'Invalid Basic Auth credentials'], 401);
        }
//
//        // Attempt to authenticate the user using the provided credentials
//        if (!$this->authenticateUser($credentials)) {
//            return response()->json(['error' => 'Invalid credentials'], 401);
//        }

        return $next($request);
    }

    private function getBasicAuthCredentials(Request $request)
    {
        $header = $request->header('Authorization');

        if (Str::startsWith(strtolower($header), 'basic ')) {
            $credentials = base64_decode(substr($header, 6));
            $credentialsArray = explode(':', $credentials, 2);

            if (count($credentialsArray) == 2) {
                list($email, $password) = $credentialsArray;
                return compact('email', 'password');
            }
        }

        return [];
    }

    private function validateBasicAuthCredentials($credentials)
    {
        return isset($credentials['email']) && isset($credentials['password']);
    }

    private function authenticateUser($credentials)
    {
        return Auth::once($credentials);
    }

}
