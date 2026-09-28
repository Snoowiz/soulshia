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
use App\Http\Resources\User\Story\StoryResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StoryCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($storyItem) {
            return StoryResource::make($storyItem->resource);
        })->all();
    }
}
