<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Story;

enum StoryPrivacy: string
{
	case ALL = 'all';
	case FOLLOWERS = 'followers';
	case SELECTED_USERS = 'selected_users';
}
