<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Media;

enum MediaStatus:string
{
    case PROCESSING = 'processing';
    case PROCESSED = 'processed';
    case UNPROCESSED = 'unprocessed';
    case FAILED = 'failed';

    public function isProcessed():bool
    {
        return $this == self::PROCESSED;
    }

    public function isProcessing():bool
    {
        return $this == self::PROCESSING;
    }
    
    
}
