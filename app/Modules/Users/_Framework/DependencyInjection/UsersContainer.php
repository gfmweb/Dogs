<?php

declare(strict_types=1);

namespace App\Modules\Users\_Framework\DependencyInjection;

use App\Common\Abstract\DTOs\FetchDTO;
use App\Modules\Users\Application\DTOs\TemplateFetchDOR;
use Illuminate\Container\Container;

class UsersContainer extends Container
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