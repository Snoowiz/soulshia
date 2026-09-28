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
use App\Http\Resources\User\Story\ViewResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ViewCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($viewItem) {
            return ViewResource::make($viewItem->resource);
        })->all();
    }
}
