<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returned extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'payment_id',
        'status',
        'delay_payment_img',
        'product_condition_img',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

}
