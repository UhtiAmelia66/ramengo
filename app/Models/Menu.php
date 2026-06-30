<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Menu extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
        'kategori',
    ];

    protected $appends = [
        'gambar_url',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getGambarUrlAttribute(): string
    {
        $gambar = trim((string) $this->gambar);

        if ($gambar === '') {
            return asset('images/ramen.jpg');
        }

        if (Str::startsWith($gambar, ['http://', 'https://'])) {
            return $gambar;
        }

        if (Str::startsWith($gambar, 'storage/')) {
            return asset($this->encodeAssetPath($gambar));
        }

        if (Str::startsWith($gambar, 'images/') && file_exists(public_path($gambar))) {
            return asset($this->encodeAssetPath($gambar));
        }

        $publicMenuPath = 'images/menu/'.$gambar;

        if (file_exists(public_path($publicMenuPath))) {
            return asset($this->encodeAssetPath($publicMenuPath));
        }

        if (Storage::disk('public')->exists($gambar)) {
            return Storage::disk('public')->url($gambar);
        }

        return asset('images/ramen.jpg');
    }

    private function encodeAssetPath(string $path): string
    {
        return collect(explode('/', $path))
            ->map(fn (string $segment) => rawurlencode($segment))
            ->implode('/');
    }
}