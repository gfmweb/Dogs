<?php

namespace App\Modules\Users\Infrastructure\Repositories;

use App\Common\Abstract\DTOs\CreateDTO;
use App\Common\Abstract\DTOs\FetchDTO;
use App\Common\Abstract\DTOs\UpdateDTO;
use App\Common\Interfaces\RepositoryInterface;
use Illuminate\Support\Collection;

class Repository implements RepositoryInterface
{

    public function list(): Collection
    {
        // TODO: Implement list() method.
    }

    public function find($id): FetchDTO
    {
        // TODO: Implement find() method.
    }

    public function create(CreateDTO $data): FetchDTO
    {
        // TODO: Implement create() method.
    }

    public function update(UpdateDTO $data): FetchDTO
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}