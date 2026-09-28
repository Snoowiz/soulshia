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
use App\Data\DataCapsule;
use App\Jobs\User\Views\RegisterResourceViews;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TerminatingMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    public function terminate(Request $request): void
    {
        $dataCapsule = app()->make(DataCapsule::class);
        $capsuledViews = $dataCapsule->get('resourceViews');

        if(! empty($capsuledViews)) {
            RegisterResourceViews::dispatch($capsuledViews);
        }
    }
}
