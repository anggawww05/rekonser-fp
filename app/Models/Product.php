<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_picture',
        'description',
        'price',
        'stock',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }
}

