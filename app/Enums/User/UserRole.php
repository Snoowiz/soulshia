<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\User;

enum  UserRole: string
{
	case ROOT = 'root'; // The most powerful role in the system.
	case ADMIN = 'admin';
	case USER = 'user';
	case MODERATOR = 'moderator';
}