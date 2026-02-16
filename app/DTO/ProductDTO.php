<?php 
namespace App\DTO;

use App\Http\Requests\ProductRequest;

class ProductDTO {
    public function __construct(
        public readonly int $category_id, // Добавили поле
        public readonly string $name,
        public readonly float $price,
        public readonly int $stock,
        public readonly ?string $description
    ) {}

    public static function fromRequest(ProductRequest $request): self {
        return new self(
            category_id: (int)$request->validated('category_id'),
            name: $request->validated('name'),
            price: (float)$request->validated('price'),
            stock: (int)$request->validated('stock'),
            description: $request->validated('description'),
        );
    }

    public function toArray(): array {
        return get_object_vars($this);
    }
}