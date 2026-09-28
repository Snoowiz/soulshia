<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Resources\User\Story;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User\User\UserPreviewResource;

class ViewResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'relations' => [
                'user' => UserPreviewResource::make($this->user)
            ],
            'date' => [
                'time_ago' => $this->viewed_at->getTimeAgo(),
                'time' => $this->viewed_at->getTime(),
                'is_today' => $this->viewed_at->isToday()
            ]
        ];
    }
}
