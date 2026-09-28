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
use App\Http\Resources\User\Story\FeedResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FeedCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($storyItem) {
            return FeedResource::make($storyItem->resource);
        })->all();
    }
}
