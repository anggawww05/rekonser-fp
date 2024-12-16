<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image_url1',
        'image_url2',
        'image_url3',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}
