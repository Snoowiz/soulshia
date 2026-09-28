<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin::auth.index');
    }
}
