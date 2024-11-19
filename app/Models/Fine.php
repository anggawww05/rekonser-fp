<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    protected $fillable = [
        'fine_nominal',
        'delay_duration',
        'id_product',
        'id_returned',

    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
