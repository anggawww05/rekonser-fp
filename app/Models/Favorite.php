<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'id_product',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
