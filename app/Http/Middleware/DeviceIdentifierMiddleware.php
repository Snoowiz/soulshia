<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class DeviceIdentifierMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $deviceId = $request->cookie('device_id');

        if (empty($deviceId)) {

            $deviceId = (string) Str::uuid();

            Cookie::queue('device_id', $deviceId, 60 * 24 * 365);
        }

        return $next($request);
    }
}
