<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'start_rent',
        'end_rent',
        'quantity',
        'payment_method',
        'rent_method',
        'delivery_price',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
