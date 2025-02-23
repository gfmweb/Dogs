<?php

namespace App\Common\Interfaces;

use App\Common\Abstract\DTOs\CreateDTO;
use App\Common\Abstract\DTOs\FetchDTO;
use App\Common\Abstract\DTOs\UpdateDTO;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function list(): Collection;

    public function find($id): FetchDTO;

    public function create(CreateDTO $data): FetchDTO;

    public function update(UpdateDTO $data): FetchDTO;

    public function delete(int $id): void;
}
