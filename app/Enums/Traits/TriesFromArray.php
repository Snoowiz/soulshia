<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Traits;

trait TriesFromArray
{
	public static function tryFromArray(array $values)
	{
		$types = array_map(function($value) {
			return self::tryFrom($value);
		}, $values);

		return array_filter($types, function($value) {
			return (! empty($value));
		});
	}
}
