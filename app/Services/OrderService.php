<?php

namespace App\Services;

use App\Repositories\OrderRepository;
use App\DTO\OrderDTO;

class OrderService
{
    public function __construct(protected OrderRepository $repository) {}

    public function getAll() {        
         return $this->repository->all(); 
        }

    public function find($id) {
         return $this->repository->find($id); 
        }

    public function create(OrderDTO $dto) {
         return $this->repository->create($dto->toArray()); 
        }

    public function update(int $id, OrderDTO $dto) {
         return $this->repository->update($dto->toArray(), $id); 
        }

    public function delete(int $id) {
         return $this->repository->delete($id); 
        }
}