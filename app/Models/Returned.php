<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returned extends Model
{
    protected $fillable = [
        'id_product',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
