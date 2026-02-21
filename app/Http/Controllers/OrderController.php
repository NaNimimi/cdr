<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Services\OrderService;
use App\DTO\OrderDTO;

class OrderController extends Controller
{
    public function __construct(protected OrderService $service) {}

    public function index() {
         return response()->json($this->service->getAll()); 
        }

    public function show($id) {
         return response()->json($this->service->find($id)); 
        }
        
    public function store(OrderRequest $request) {
        return response()->json($this->service->create(OrderDTO::fromRequest($request)), 201);
    }
    public function update(OrderRequest $request, $id) {
        return response()->json($this->service->update($id, OrderDTO::fromRequest($request)));
    }
    public function destroy($id) {
        $this->service->delete($id);
        return response()->json(['message' => 'Order deleted'], 200);
    }
}