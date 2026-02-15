<?php

namespace App\Services;
use App\Repositories\ProductRepository;
use App\DTO\ProductDTO;

class ProductService {
    public function __construct(protected ProductRepository $repository) {}

    public function getAll() {
        return $this->repository->all();
    }

    public function create(ProductDTO $dto) {
        return $this->repository->create($dto->toArray());
    }

    public function update(int $id, ProductDTO $dto) {
        return $this->repository->update($dto->toArray(), $id);
    }

    public function delete(int $id) {
        return $this->repository->delete($id);
    }
}