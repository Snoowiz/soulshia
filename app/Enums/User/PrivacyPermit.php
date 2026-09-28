<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\User;

enum PrivacyPermit: string
{
	case ALL = 'all';
	case FOLLOWERS = 'followers';
	case NOBODY = 'nobody';
	case APPROVED = 'approved';

	public function nobody(): bool
	{
		return $this === self::NOBODY;
	}

	public static function followPermits(): array
	{
		return [
			self::ALL,
			self::APPROVED
		];
	}

	public function onlyApproved()
	{
		return $this === self::APPROVED;
	}
}