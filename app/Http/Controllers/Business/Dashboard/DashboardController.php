<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers\Business\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('business::dashboard.index');
    }
}
