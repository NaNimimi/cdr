<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use HasFactory, TransformableTrait;

    /**
     * Поля, которые можно заполнять массово (Mass Assignment)
     * Это важно для метода $repository->create($dto->toArray())
     */
    protected $fillable = [
        'category_id', // ОБЯЗАТЕЛЬНО ДОБАВЬ ЭТО
        'name',
        'price',
        'stock',
        'description',
    ];

    // Обратная связь, чтобы работал Transformer (includeCategory)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}