<?php

namespace App\Transformers;

use App\Models\Product;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    // Разрешаем загрузку категории по запросу
    protected array $availableIncludes = ['category'];

    public function transform(Product $model)
    {
        return [
            'id'           => (int) $model->id,
            'name'         => $model->name,
            'price'        => (float) $model->price,
            'stock'        => (int) $model->stock,
            'category_id'  => (int) $model->category_id,
        ];
    }

    // Логика трансформации связанной категории
    public function includeCategory(Product $model)
    {
        $category = $model->category;
        if (!$category) return null;

        return $this->item($category, function($cat) {
            return [
                'id'   => $cat->id,
                'name' => $cat->name,
                'slug' => $cat->slug,
            ];
        });
    }
}