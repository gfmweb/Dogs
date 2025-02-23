<?php

declare(strict_types=1);

namespace App\Modules\Users\_Framework\Providers;

use App\Common\ModuleContainer;
use App\Modules\Users\_Framework\UsersModule;
use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
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
        $module = new UsersModule();
        $this->app->make(ModuleContainer::class)->registerModule($module);
        $this->registerConfig();
        $this->registerEvents();
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/users.php',
            'users'
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
        return config('users.active', true);
    }

    public function getConfig(): ?array
    {
        return config('users');
    }
}
