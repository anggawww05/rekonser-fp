<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returned extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'status_id',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    // public function users()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function statuses()
    // {
    //     return $this->belongsTo(Status::class);
    // }
}
