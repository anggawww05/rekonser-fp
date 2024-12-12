<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'condition',
        'stock',
        'category_id',

    ];

    public function productImage()
    {
        return $this->hasOne(ProductImage::class);
    }

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }

    public function returneds()
    {
        return $this->hasOne(Returned::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

