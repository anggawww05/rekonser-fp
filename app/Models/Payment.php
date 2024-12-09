<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'start_date',
        'end_date',
        'quantity',
        'payment_method',
        'rent_method',
        'delivery_price',
        'transaction_img',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function returned()
    {
        return $this->hasOne(Returned::class);
    }
}
