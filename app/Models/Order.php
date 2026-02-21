<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use HasFactory, TransformableTrait;

    protected $fillable = [
        'customer_email',
        'total_price',
        'status',
    ];
}