<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Events\User\Story;

use App\Models\StoryFrame;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StoryCreatedEvent
{
    use Dispatchable, SerializesModels;

    public $frameData;

    /**
     * Create a new event instance.
     */
    public function __construct(StoryFrame $frameData)
    {
        $this->frameData = $frameData;
    }
}
