<?php

namespace App\Common\Abstract;

use App\Common\ModuleContainer;
use Illuminate\Container\Container;

abstract class AbstractInteractor
{
    public function __construct(
        protected ModuleContainer $container
    ) {
    }

    protected function getModule(string $moduleName)
    {
        $module = $this->container->getModule($moduleName);
        if (!$module) {
            throw new \InvalidArgumentException("Module '$moduleName' not found");
        }
        if (!$module->isActive()) {
            throw new \LogicException("Module '$moduleName' is not active");
        }
        return $module->getContainer();
    }

    protected function safeMethodCall(Container $container, string $method)
    {
        if (!method_exists($container, $method)) {
            return null;
        }
        return $container->$method();
    }
}