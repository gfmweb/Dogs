<?php

declare(strict_types=1);

namespace App\Modules\TemplateStructure\_Framework\DependencyInjection;

use App\Common\Abstract\DTOs\FetchDTO;
use App\Modules\TemplateStructure\Application\DTOs\TemplateFetchDOR;
use Illuminate\Container\Container;

class TemplateContainer extends Container
{
    public function list(): FetchDTO
    {
        return new TemplateFetchDOR(123);
    }

    public function someMethod(string $condition): array
    {
        return [];
    }
}