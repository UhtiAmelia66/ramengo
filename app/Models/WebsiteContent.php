<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteContent extends Model
{
    protected $fillable = [

        'halaman',
        'judul',
        'isi',
        'poster_path',
        'is_active'

    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
