<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {
        //     return route('admin.login');
        // }
        $uri = $request->path();
        if(str_contains($uri, 'admin')){
            return $request->expectsJson() ? null : route('admin.login');
        }elseif(str_contains($uri, 'tipper')){
            return $request->expectsJson() ? null : route('website.tipper.login');
        }elseif(str_contains($uri, 'customer')){
            return $request->expectsJson() ? null : route('pos.login');
        }else{
            return $request->expectsJson() ? null : route('welcome');
        }
    }
}
