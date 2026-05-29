<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteContent extends Model
{
    protected $fillable = [

        'halaman',
        'judul',
        'isi'

    ];
}