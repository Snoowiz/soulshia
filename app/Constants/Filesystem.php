<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Constants;

abstract class Filesystem
{
    const EXTERNAL_DISK_NAME = 'external';

    const IMAGE_PLACEHOLDER_WIDTH = 128;

    const IMAGE_PLACEHOLDER_BLUR = 1;

    static function mediaNamespace(string $mediaType) {
        return config("filesystems.upload_namespaces.media") . "/{$mediaType}";
    }
}
