<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Category;

/**
 * Class CategoryTransformer.
 *
 * @package namespace App\Transformers;
 */
class CategoryTransformer extends TransformerAbstract
{
    protected array $availableIncludes = [
        'products'
    ];
    /**
     * Transform the Category entity.
     *
     * @param \App\Entities\Category $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'slug'       => $model->slug,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
    public function includeProducts(Category $model)
    {
        $products = $model->products;

        return $this->collection($products, new ProductTransformer());
    }
}
