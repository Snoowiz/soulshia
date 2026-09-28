<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Events\User\Auth;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegisteredEvent
{
    use Dispatchable, SerializesModels;

    public array $data;

    /**
     * Create a new event instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
