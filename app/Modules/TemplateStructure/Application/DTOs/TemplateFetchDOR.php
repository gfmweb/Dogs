<?php

namespace App\Modules\TemplateStructure\Application\DTOs;

use App\Common\Abstract\DTOs\FetchDTO;

readonly class TemplateFetchDOR extends FetchDTO
{
    public function __construct(public int $id) {
    }
}