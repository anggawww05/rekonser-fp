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

    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    // public function favorites()
    // {
    //     return $this->belongsToMany(Favorite::class);
    // }

    // public function payments()
    // {
    //     return $this->hasOne(Payment::class);
    // }
}

