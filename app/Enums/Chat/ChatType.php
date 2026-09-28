<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Chat;

enum ChatType: string
{
	case DIRECT = 'direct';
	case GROUP = 'group';

	public function isGroup():bool
    {
        return $this == self::GROUP;
    }

	public function isDirect():bool
    {
        return $this == self::DIRECT;
    }

	public function label(): string
	{
		return match ($this) {
			self::DIRECT => __('labels.chat_type_labels.direct'),
			self::GROUP => __('labels.chat_type_labels.group'),
		};
	}
	
	public function emoji(): string
	{
		return match ($this) {
			self::DIRECT => '💬',
			self::GROUP => '👥',
		};
	}
}
