<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers\Api\User\Recommend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Http\Api\SupportsApiResponses;
use App\Actions\Recommend\FetchFollowRecommendation;
use App\Http\Resources\User\Recommend\FollowCollection;

class FollowRecommendController extends Controller
{
    use SupportsApiResponses;

    public function getFollowRecommendations(Request $request)
    {
        $limit = $request->integer('limit', config('recommend.follow_recommendation_limit'));

        $recommendations = (new FetchFollowRecommendation())->handle($limit);

        return $this->responseSuccess([
            'data' => FollowCollection::make($recommendations)
        ]);
    }
}
