<?php

namespace App\DTO;

use App\Http\Requests\OrderRequest;

class OrderDTO
{
    public function __construct(
        public readonly string $customer_email,
        public readonly float $total_price,
        public readonly string $status = 'pending'
    ) {}

    public static function fromRequest(OrderRequest $request): self
    {
        return new self(
            customer_email: $request->validated('customer_email'),
            total_price: (float)$request->validated('total_price'),
            status: $request->validated('status') ?? 'pending'
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}