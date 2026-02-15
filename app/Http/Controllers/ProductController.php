<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Services\ProductService;
use App\DTO\ProductDTO;

class ProductController extends Controller {
    public function __construct(protected ProductService $service) {}

    public function index() {
        return response()->json($this->service->getAll());
    }

    public function store(ProductRequest $request) {
        $dto = ProductDTO::fromRequest($request);
        return response()->json($this->service->create($dto), 201);
    }

    public function update(ProductRequest $request, $id) {
        $dto = ProductDTO::fromRequest($request);
        return response()->json($this->service->update($id, $dto));
    }

    public function destroy($id) {
        $this->service->delete($id);
        return response()->json(null, 204);
    }
}