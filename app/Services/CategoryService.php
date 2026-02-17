<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\DTO\CategoryDTO;

class CategoryService {
    public function __construct(protected CategoryRepository $repository) {}

    public function getAll() {
        return $this->repository->all();
    }

    public function create(CategoryDTO $dto) {
        return $this->repository->create($dto->toArray());
    }

    public function update(int $id, CategoryDTO $dto) {
        return $this->repository->update($dto->toArray(), $id);
    }

    public function delete(int $id) {
        return $this->repository->delete($id);
    }
}