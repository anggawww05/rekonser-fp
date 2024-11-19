<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Payment extends Model
{
    protected $fillable = [
        'id_product',
        'id_payment',
    ];

    public function payments()
    {
        return $this->belongsTo(Payment::class);
    }
}
