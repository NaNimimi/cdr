<?php

namespace App\Transformers;

use App\Models\Order;
use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{
    public function transform(Order $model)
    {
        return [
            'id'             => (int) $model->id,
            'customer_email' => $model->customer_email,
            'total_price'    => (float) $model->total_price,
            'status'         => $model->status,
            'created_at'     => $model->created_at->toDateTimeString(),
        ];
    }
}