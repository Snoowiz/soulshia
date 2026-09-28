<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Story;

enum StoryStatus: string
{
	case DRAFT = 'draft';
	case ACTIVE = 'active';
    case PROCESSING = 'processing';

	public function isDraft():bool
    {
        return $this == self::DRAFT;
    }

	public function isActive():bool
    {
        return $this == self::ACTIVE;
    }

    public function isProcessing():bool
    {
        return $this == self::PROCESSING;
    }
}
