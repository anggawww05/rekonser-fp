<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'total_price',
        'quantity',
        'start_date',
        'end_date',
        'payment_method',
        'id_user',
        'id_product',
    ];
}
