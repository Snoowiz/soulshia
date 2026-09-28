<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Category;

enum CategoryStatus: string
{
	case ACTIVE = 'active';
	case INACTIVE = 'inactive';
	case DRAFT = 'draft';

	public function isActive(): bool
	{
		return $this === self::ACTIVE;
	}

	public function isInactive(): bool
	{
		return $this === self::INACTIVE;
	}

	public function isDraft(): bool
	{
		return $this === self::DRAFT;
	}

	public function label(): string
	{
		return match ($this) {
			self::ACTIVE => __('labels.status_labels.active'),
			self::INACTIVE => __('labels.status_labels.inactive'),
			self::DRAFT => __('labels.status_labels.draft'),
		};
	}

	public function emoji(): string
	{
		return match ($this) {
			self::ACTIVE => '✅',
			self::INACTIVE => '❌',
			self::DRAFT => '🗒️',
		};
	}
}