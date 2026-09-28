<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Store;

enum StoreStatus: string
{
	case ACTIVE = 'active';
	case INACTIVE = 'inactive';
	case SUSPENDED = 'suspended';
}
