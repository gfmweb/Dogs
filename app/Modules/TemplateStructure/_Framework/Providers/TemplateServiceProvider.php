<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\_Framework\Providers;

use App\Common\ModuleContainer;
use App\Modules\TemplateStructure\_Framework\TemplateModule;
use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Убедимся, что ModuleContainer зарегистрирован
        if (!$this->app->has(ModuleContainer::class)) {
            $this->app->singleton(ModuleContainer::class, function () {
                return new ModuleContainer();
            });
        }

        // Регистрируем модуль
        $module = new TemplateModule();
        $this->app->make(ModuleContainer::class)->registerModule($module);

        $this->registerConfig();
        $this->registerEvents();
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/template.php',
            'template'
        );
    }

    protected function registerEvents(): void
    {
        $this->app->register(EventServiceProvider::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../Internal/Infrastructure/ORM/migrations');

        if ($this->isActive()) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        } else {
          //todo disable routes and other features when module is not active
        }
    }

    public function isActive(): bool
    {
        return config('template.active', true);
    }

    public function getConfig(): ?array
    {
        return config('template');
    }
}
