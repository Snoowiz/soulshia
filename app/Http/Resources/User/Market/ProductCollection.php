<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Resources\User\Market;

use Illuminate\Http\Request;
use App\Http\Resources\User\Market\ProductResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($productItem) {
            return ProductResource::make($productItem->resource);
        })->all();
    }
}
