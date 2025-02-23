<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\Common\Providers;

use App\Modules\Users\Internal\Application\Events\UserEvent;
use App\Modules\Users\Internal\Application\Listeners\UserListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [

    ];

    public function boot(): void
    {
        parent::boot();
    }
}