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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class UserLanguageMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = config('app.locale');

        if(auth_check()) {
            $locale = me()->language;
        }
        
        else if (Cookie::has('selected_locale')) {
            $locale = Cookie::get('selected_locale');
        }

        else if (session()->has('selected_locale')) {
            $locale = session()->get('selected_locale');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
