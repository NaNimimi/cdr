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
        'name',
        'price',
        'stock',
        'description',
    ];

    /**
     * Приведение типов (Casting)
     */
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];
}