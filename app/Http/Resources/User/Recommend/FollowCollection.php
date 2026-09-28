<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Resources\User\Recommend;

use Illuminate\Http\Request;
use App\Http\Resources\User\Recommend\FollowResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FollowCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($userItem) {
            return FollowResource::make($userItem->resource);
        })->all();
    }
}
