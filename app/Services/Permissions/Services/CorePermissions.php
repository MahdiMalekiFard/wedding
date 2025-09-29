<?php

namespace App\Services\Permissions\Services;

use App\Services\Permissions\Models\BlogPermissions;
use App\Services\Permissions\Models\CategoryPermissions;
use App\Services\Permissions\Models\UserPermissions;

class CorePermissions
{
    public static function all(): array
    {
        return [
            resolve(UserPermissions::class)->all(),
            resolve(CategoryPermissions::class)->all(),
            resolve(BlogPermissions::class)->all(),
        ];
    }
}
