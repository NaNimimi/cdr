<?php

namespace App\Transformers;

use App\Models\Order;
use League\Fractal\TransformerAbstract;

class OrderItemTransformer extends TransformerAbstract 
{
    public function transform(OrderItem $model) {
        return [
            'id' => (int)$model->id,
            'order_id' => (int)$model->order_id,
            'product_id' => (int)$model->product_id,
            'quantity' => (int)$model->quantity,
            'price' => (float)$model->price,
        ];
    }
}