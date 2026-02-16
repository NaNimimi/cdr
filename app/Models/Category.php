<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model implements Transformable
{
    use HasFactory, TransformableTrait;

    /**
     * Поля для массового заполнения.
     * Не забудь добавить 'slug', так как он есть в твоей миграции.
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Связь: Одна категория имеет много товаров.
     * * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Автоматическая генерация slug при сохранении (опционально, но удобно).
     * Если хочешь, чтобы slug создавался сам из имени.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = \Illuminate\Support\Str::slug($category->name);
            }
        });
    }
}