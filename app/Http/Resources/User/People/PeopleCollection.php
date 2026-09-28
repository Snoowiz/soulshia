<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Resources\User\People;

use Illuminate\Http\Request;
use App\Http\Resources\User\People\PeopleResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PeopleCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($peopleItem) {
            return PeopleResource::make($peopleItem->resource);
        })->all();
    }
}
