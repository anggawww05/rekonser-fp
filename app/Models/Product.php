<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'stock',
        'product_img',
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

}

