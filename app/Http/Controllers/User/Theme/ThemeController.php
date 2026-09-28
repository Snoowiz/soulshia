<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers\User\Theme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class ThemeController extends Controller
{
    public function switchTheme(string $theme)
    {
        if(in_array($theme, ['dark', 'light'])) {
            if(auth_check()) {
                me()->update([
                    'theme' => $theme
                ]);
            }
            
            Cookie::queue('theme', $theme, 60 * 24 * 365 * 3);
        
            session()->put('theme', $theme);
        }
        
        return redirect()->back();
    }
}
