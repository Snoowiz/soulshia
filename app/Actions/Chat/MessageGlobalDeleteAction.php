<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Actions\Chat;

use App\Actions\Media\DeleteMediaAction;
use App\Models\Message;

class MessageGlobalDeleteAction
{
	private Message $messageData;

	public function __construct(Message $messageData) {
		$this->messageData = $messageData;
	}

	public function execute()
	{
		$this->messageData->reactions()->delete();

        if($this->messageData->media) {
            (new DeleteMediaAction($this->messageData->media))->execute();
        }

		$this->messageData->linkSnapshot()->delete();

		$this->messageData->update([
			'content' => '',
			'is_deleted' => true
		]);
	}
}
