<?php

namespace App\Services;


use App\Repositories\OrderItemRepository;
use App\DTO\OrderItemDTO;

class OrderItemService {
    public function __construct(protected OrderItemRepository $repository) {}
    public function getAll() { return $this->repository->all(); }
    public function find($id) { return $this->repository->find($id); }
    public function create(OrderItemDTO $dto) { return $this->repository->create($dto->toArray()); }
    public function update($id, OrderItemDTO $dto) { return $this->repository->update($dto->toArray(), $id); }
    public function delete($id) { return $this->repository->delete($id); }
}