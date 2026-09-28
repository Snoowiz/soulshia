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
use App\Http\Resources\User\Chat\ChatResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ChatCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($chatItem) {
            return ChatResource::make($chatItem->resource);
        })->all();
    }
}
