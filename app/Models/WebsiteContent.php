<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WebsiteContent extends Model
{
    protected $fillable = [
        'halaman',
        'judul',
        'isi',
        'poster_path',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'poster_url',
    ];

    public function getPosterUrlAttribute(): ?string
    {
        $posterPath = trim((string) $this->poster_path);

        if ($posterPath === '') {
            return null;
        }

        if (Str::startsWith($posterPath, ['http://', 'https://'])) {
            return $posterPath;
        }

        if (Str::startsWith($posterPath, 'storage/')) {
            return asset($this->encodeAssetPath($posterPath));
        }

        if (Str::startsWith($posterPath, 'images/') && file_exists(public_path($posterPath))) {
            return asset($this->encodeAssetPath($posterPath));
        }

        if (Storage::disk('public')->exists($posterPath)) {
            return Storage::disk('public')->url($posterPath);
        }

        return null;
    }

    private function encodeAssetPath(string $path): string
    {
        return collect(explode('/', $path))
            ->map(fn (string $segment) => rawurlencode($segment))
            ->implode('/');
    }
}