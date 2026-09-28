<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Events\User\Chat;

use App\Http\Resources\User\Chat\MessageResource;
use App\Models\Message;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class MessageReceivedEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $messageData;

    public function __construct(Message $messageData)
    {
        $this->messageData = $messageData;
    }

    public function broadcastAs()
    {
        return 'chat.message.received';
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel("App.Models.Chat.{$this->messageData->chat_uuid}")
        ];
    }

    public function broadcastWith()
    {
        return [
            'data' => MessageResource::make($this->messageData)
        ];
    }
}
