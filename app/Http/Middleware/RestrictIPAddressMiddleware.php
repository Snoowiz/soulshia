<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Middleware;
use App\Services\Blacklist\BlacklistService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictIPAddressMiddleware
{
    private BlacklistService $blacklistService;

    public function __construct(BlacklistService $blacklistService) {
        $this->blacklistService = $blacklistService;
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (in_array($request->ip(), $this->getBlockIps())) {
            abort(403, __('auth.ip_blocked'));
        }

        return $next($request);
    }

    private function getBlockIps(): array
    {
        return $this->blacklistService->getBlacklistedIps();
    }
}
