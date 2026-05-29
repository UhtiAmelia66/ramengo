<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'nama'=>'Original Chicken Ramen',
            'harga'=>30000,
            'deskripsi'=>'Kuah original ayam khas Jepang',
            'kategori'=>'Original',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Spicy Beef Ramen',
            'harga'=>35000,
            'deskripsi'=>'Ramen pedas dengan irisan beef',
            'kategori'=>'Pedas',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Kari Ramen',
            'harga'=>32000,
            'deskripsi'=>'Kuah kari creamy dan gurih',
            'kategori'=>'Kari',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Dry Ramen Special',
            'harga'=>34000,
            'deskripsi'=>'Ramen tanpa kuah dengan saus spesial',
            'kategori'=>'Dry Ramen',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Chicken Rice Bowl',
            'harga'=>28000,
            'deskripsi'=>'Nasi ayam crispy saus teriyaki',
            'kategori'=>'Rice Bowl',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Beef Rice Bowl',
            'harga'=>33000,
            'deskripsi'=>'Rice bowl beef premium',
            'kategori'=>'Rice Bowl',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Ocha',
            'harga'=>10000,
            'deskripsi'=>'Teh Jepang segar',
            'kategori'=>'Minuman',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Matcha Latte',
            'harga'=>18000,
            'deskripsi'=>'Minuman matcha creamy',
            'kategori'=>'Minuman',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Miso Ramen',
            'harga'=>31000,
            'deskripsi'=>'Ramen kuah miso autentik',
            'kategori'=>'Original',
            'gambar'=>null
        ]);

        Menu::create([
            'nama'=>'Extreme Spicy Ramen',
            'harga'=>40000,
            'deskripsi'=>'Level pedas maksimal',
            'kategori'=>'Pedas',
            'gambar'=>null
        ]);
    }
}