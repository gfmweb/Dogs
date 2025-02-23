<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\Common\Facades;

use Illuminate\Support\Facades\Facade;

class Template extends Facade
{
    public static function isActive(): bool
    {
        return config('template.active', true);
    }

    protected static function getFacadeAccessor(): string
    {
        return 'template-module';
    }
}