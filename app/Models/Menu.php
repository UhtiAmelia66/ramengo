<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
        'kategori'

    ];
    public function orders()
{
    return $this->hasMany(Order::class);
}
}