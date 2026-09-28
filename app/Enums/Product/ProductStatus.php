<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Product;

enum ProductStatus: string
{
	case DRAFT = 'draft';
	case ACTIVE = 'active';
	case INACTIVE = 'inactive';

	public function label(): string
	{
		return match ($this) {
			self::DRAFT => __('labels.status_labels.draft'),
			self::ACTIVE => __('labels.status_labels.active'),
			self::INACTIVE => __('labels.status_labels.inactive')
		};
	}

	public function emoji(): string
	{
		return match ($this) {
			self::DRAFT => '🗒️',
			self::ACTIVE => '🚀',
			self::INACTIVE => '❌',
		};
	}

	public function isActive(): bool
	{
		return $this === self::ACTIVE;
	}
}
