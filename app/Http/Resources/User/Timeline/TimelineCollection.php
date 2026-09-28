<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Resources\User\Timeline;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TimelineCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($postItem) {
            return TimelineResource::make($postItem->resource);
        })->all();
    }
}
