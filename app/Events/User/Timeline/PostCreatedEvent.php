<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Events\User\Timeline;

use App\Models\Post;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class PostCreatedEvent
{
    use Dispatchable, SerializesModels;

    public $postData;

    public function __construct(Post $postData)
    {
        $this->postData = $postData;
    }
}
