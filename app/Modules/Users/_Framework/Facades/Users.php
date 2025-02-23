<?php

declare(strict_types=1);

namespace App\Modules\Users\_Framework\Facades;

use Illuminate\Support\Facades\Facade;

class Users extends Facade
{
    public static function isActive(): bool
    {
        return config('users.active', true);
    }

    protected static function getFacadeAccessor(): string
    {
        return 'users-module';
    }
}