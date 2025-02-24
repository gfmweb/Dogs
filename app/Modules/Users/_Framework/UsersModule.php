<?php

declare(strict_types=1);

namespace App\Modules\Users\_Framework;

use App\Common\Abstract\AbstractModule;
use App\Modules\Users\_Framework\DependencyInjection\UsersContainer;


class UsersModule extends AbstractModule
{
    private UsersContainer $container;

    public function __construct()
    {
        $this->container = new UsersContainer();
    }

    public function getName(): string
    {
        return 'users';
    }

    public function getContainer(): UsersContainer
    {
        return $this->container;
    }

    public function isActive(): bool
    {
        return config('users.active', true);
    }
}