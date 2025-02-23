<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\Common;

use App\Common\Abstract\AbstractModule;
use App\Modules\TemplateStructure\Common\DependencyInjection\TemplateContainer;

class TemplateModule extends AbstractModule
{
    private TemplateContainer $container;

    public function __construct()
    {
        $this->container = new TemplateContainer();
    }

    public function getName(): string
    {
        return 'template';
    }

    public function getContainer(): TemplateContainer
    {
        return $this->container;
    }
}