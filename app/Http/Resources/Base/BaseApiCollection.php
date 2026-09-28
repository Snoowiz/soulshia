<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Resources\Base;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseApiCollection extends ResourceCollection
{
    public function toArray(Request $request):array
    {
        return [
            'status' => 'success',
            'code' => 200,
            'data' => parent::toArray($request)
        ];
    }
}