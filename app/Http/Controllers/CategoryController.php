<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;
use App\DTO\CategoryDTO;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $service) {}

    public function index()
    {
        return response()->json($this->service->getAll());
    }

    public function store(CategoryRequest $request)
    {
        return response()->json($this->service->create(CategoryDTO::fromRequest($request)), 201);
    }

    // Добавляем метод SHOW
    public function show($id)
    {
        // Репозиторий l5-repository сам применит презентер/трансформер
        return response()->json($this->service->find($id));
    }

    public function update(CategoryRequest $request, $id)
    {
        return response()->json($this->service->update($id, CategoryDTO::fromRequest($request)));
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['message' => 'Category deleted successfully'], 200);
    }
}