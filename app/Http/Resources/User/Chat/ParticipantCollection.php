<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Resources\User\Chat;

use Illuminate\Http\Request;
use App\Http\Resources\User\Chat\ParticipantResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ParticipantCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($participantItem) {
            return ParticipantResource::make($participantItem->resource);
        })->all();
    }
}
