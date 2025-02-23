<?php

declare(strict_types=1);

namespace App\Common;

use App\Common\Interfaces\ModuleInterface;

class ModuleContainer
{
    private array $modules = [];

    public function registerModule(ModuleInterface $module): void
    {
        $this->modules[$module->getName()] = $module;
    }

    public function getModule(string $name): ?ModuleInterface
    {
        return $this->modules[$name] ?? null;
    }

    public function hasModule(string $name): bool
    {
        return isset($this->modules[$name]);
    }

    public function getModules(): array
    {
        return $this->modules;
    }
}