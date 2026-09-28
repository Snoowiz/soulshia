<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Category;

enum CategoryType: string
{
	case UNCATEGORIZED = 'uncategorized';
	case PRODUCT = 'product';
	case JOB = 'job';

	public function isProduct(): bool
	{
		return $this === self::PRODUCT;
	}
	
	public function isJob(): bool
	{
		return $this === self::JOB;
	}

	public function label(): string
	{
		return match ($this) {
			self::PRODUCT => __('labels.category_type_labels.product'),
			self::JOB => __('labels.category_type_labels.job'),
			self::UNCATEGORIZED => __('labels.category_type_labels.uncategorized'),
		};
	}

	public function emoji(): string
	{
		return match ($this) {
			self::PRODUCT => '📦',
			self::JOB => '💼',
			self::UNCATEGORIZED => '🔍',
		};
	}
}
