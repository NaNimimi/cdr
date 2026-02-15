<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ProductTransformer;

/**
 * Class ProductTransformerTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProductTransformerTransformer extends TransformerAbstract
{
    /**
     * Transform the ProductTransformer entity.
     *
     * @param \App\Entities\ProductTransformer $model
     *
     * @return array
     */
    public function transform(Product $model) {
        return [
            'id'      => (int) $model->id,
            'name'    => strtoupper($model->name),
            'price'   => (float) $model->price,
            'stock'   => (int) $model->stock,
            'is_available' => $model->stock > 0,
        ];
    }
}
