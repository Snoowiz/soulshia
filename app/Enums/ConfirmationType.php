<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums;

enum ConfirmationType:string
{
    case EMAIL = 'email';
    case PHONE = 'phone';
}