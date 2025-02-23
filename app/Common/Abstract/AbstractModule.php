<?php

declare(strict_types=1);

namespace App\Common\Abstract;

use App\Common\Interfaces\ModuleInterface;

abstract class AbstractModule implements ModuleInterface
{
    abstract public function getName(): string;
}
