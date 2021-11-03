<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_tm',
        'name_en',
        'name_ru',
        'description',
        'price',
        'sale_price',
        'discount',
        'sale_type',
        'code',
        'images',
    ];

    protected $casts = [
        'images' => 'object',
    ];
}
