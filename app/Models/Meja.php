<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $fillable = [
        'nomor_meja',
        'status',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
