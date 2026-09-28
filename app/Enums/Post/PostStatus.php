<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Enums\Post;

enum PostStatus:string
{
    case ACTIVE = 'active';
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case DELETED = 'deleted';
    case PROCESSING_VIDEO = 'processing_video';
}
