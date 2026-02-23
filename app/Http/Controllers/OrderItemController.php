<?php

namespace App\Http\Controllers;


use App\Http\Requests\OrderItemRequest;
use App\Services\OrderItemService;
use App\DTO\OrderItemDTO;

class OrderItemController extends Controller {
    public function __construct(protected OrderItemService $service) {}
    public function index() { return response()->json($this->service->getAll()); }
    public function store(OrderItemRequest $request) {
        return response()->json($this->service->create(OrderItemDTO::fromRequest($request)), 201);
    }
    public function show($id) { return response()->json($this->service->find($id)); }
    public function update(OrderItemRequest $request, $id) {
        return response()->json($this->service->update($id, OrderItemDTO::fromRequest($request)));
    }
    public function destroy($id) { $this->service->delete($id); return response()->json(null, 204); }
}