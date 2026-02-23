<?php
namespace App\DTO;
use App\Http\Requests\OrderItemRequest;

class OrderItemDTO {
    public function __construct(
        public readonly int $order_id,
        public readonly int $product_id,
        public readonly int $quantity,
        public readonly float $price
    ) {}
    public static function fromRequest(OrderItemRequest $request): self {
        return new self(
            order_id: (int)$request->validated('order_id'),
            product_id: (int)$request->validated('product_id'),
            quantity: (int)$request->validated('quantity'),
            price: (float)$request->validated('price')
        );
    }
    public function toArray(): array { return get_object_vars($this); }
}