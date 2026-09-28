<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Actions\Chat;

use App\Models\HiddenMessage;
use Illuminate\Database\Eloquent\Collection;

class MessagesLocalDeleteAction
{
	private Collection $messagesList;

	public function __construct(Collection $messagesList) {
		$this->messagesList = $messagesList;
	}

	public function execute()
	{
		HiddenMessage::insert($this->messagesList->map(function($item) {
			return [
				'message_id' => $item->id,
				'chat_id' => $item->chat_id,
				'user_id' => me()->id
			];
		})->toArray());
	}
}
