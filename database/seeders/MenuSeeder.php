<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'nama' => 'Tori Paitan Ramen',
                'harga' => 38000,
                'deskripsi' => 'Ramen dengan kuah kaldu ayam kental gurih, ayam chashu, dan telur ajitama.',
                'gambar' => 'Tori Paitan Ramen.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Shoyu Ramen',
                'harga' => 35000,
                'deskripsi' => 'Ramen klasik khas Tokyo dengan kuah kecap asin Jepang yang ringan.',
                'gambar' => 'Shoyu Ramen.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Tonkotsu Ramen',
                'harga' => 39000,
                'deskripsi' => 'Ramen kuah kaldu tulang yang creamy, gurih, dan kaya rasa.',
                'gambar' => 'Tonkotsu Ramen.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Spicy Jigoku Ramen',
                'harga' => 40000,
                'deskripsi' => 'Ramen kuah pedas berlevel dengan bumbu cabai spesial khas RamenGo.',
                'gambar' => 'Spicy Jigoku Ramen.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Karari Ramen',
                'harga' => 39000,
                'deskripsi' => 'Ramen kari Jepang yang kaya akan rempah-rempah beraroma kuat.',
                'gambar' => 'Karari Ramen.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Tantanmen Ramen',
                'harga' => 42000,
                'deskripsi' => 'Ramen kuah wijen pedas gurih dengan topping daging ayam cincang.',
                'gambar' => 'Tantanmen Ramen.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Dry Tsukemen',
                'harga' => 36000,
                'deskripsi' => 'Ramen kering tanpa kuah, disajikan dengan saus celup pekat terpisah.',
                'gambar' => 'Dry Tsukemen.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Abura Soba',
                'harga' => 35000,
                'deskripsi' => 'Soba kering yang diaduk dengan minyak aromatik, kecap asin, dan rebung.',
                'gambar' => 'Abura Soba.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Gyoza Panggang',
                'harga' => 20000,
                'deskripsi' => 'Pangsit Jepang isi daging ayam dan sayuran, dimasak pan-seared.',
                'gambar' => 'Gyoza Panggang.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Chicken Karaage',
                'harga' => 22000,
                'deskripsi' => 'Ayam goreng tepung khas Jepang yang renyah di luar dan juicy di dalam.',
                'gambar' => 'Chicken Karage 500gr.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Ebi Furai',
                'harga' => 25000,
                'deskripsi' => 'Udang goreng tepung roti bertekstur sangat renyah.',
                'gambar' => 'Ebi Furai (Japanese Deep-fried Shrimp with Panko).jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Chicken Katsu',
                'harga' => 24000,
                'deskripsi' => 'Fillet dada ayam goreng tepung roti, disajikan dengan saus katsu.',
                'gambar' => 'Chiken Katsu.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Takoyaki (6 pcs)',
                'harga' => 18000,
                'deskripsi' => 'Bola-bola camilan khas Osaka dengan isian gurita segar di dalamnya.',
                'gambar' => 'Takoyaki (6 pcs).jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Chahan (Nasi Goreng Jepang)',
                'harga' => 23000,
                'deskripsi' => 'Nasi goreng oriental khas Jepang dengan potongan daging ayam dan telur.',
                'gambar' => 'Chahan (Nasi Goreng Jepang).jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Beef Yakiniku Don',
                'harga' => 32000,
                'deskripsi' => 'Mangkuk nasi dengan irisan daging sapi tipis saus yakiniku manis gurih.',
                'gambar' => 'Beef Yakiniku Don.jpg',
                'kategori' => 'Makanan',
            ],
            [
                'nama' => 'Ocha Cold (Free Refill)',
                'harga' => 8000,
                'deskripsi' => 'Teh hijau Jepang dingin otentik, bisa isi ulang sepuasnya.',
                'gambar' => 'Ocha Cold (Free Refill).jpg',
                'kategori' => 'Minuman',
            ],
            [
                'nama' => 'Ocha Hot (Free Refill)',
                'harga' => 8000,
                'deskripsi' => 'Teh hijau Jepang hangat otentik, pas untuk pendamping kuah ramen.',
                'gambar' => 'Ocha Hot (Free Refill.jpg',
                'kategori' => 'Minuman',
            ],
            [
                'nama' => 'Ice Lemon Tea',
                'harga' => 12000,
                'deskripsi' => 'Teh manis segar berpadu dengan perasan jeruk lemon asli.',
                'gambar' => 'Ice Lemon Tea.jpg',
                'kategori' => 'Minuman',
            ],
            [
                'nama' => 'Matcha Latte',
                'harga' => 18000,
                'deskripsi' => 'Minuman susu creamy dengan bubuk matcha premium khas Jepang.',
                'gambar' => 'Matcha Latte.jpg',
                'kategori' => 'Minuman',
            ],
            [
                'nama' => 'Mizu (Air Mineral)',
                'harga' => 5000,
                'deskripsi' => 'Air minum mineral kemasan botol dingin.',
                'gambar' => 'Mizu (Air Mineral).jpg',
                'kategori' => 'Minuman',
            ],
            [
                'nama' => 'Ajitama Egg (1 pcs)',
                'harga' => 6000,
                'deskripsi' => 'Telur rebus setengah matang khas Jepang yang dimarinasi bumbu kecap manis gurih.',
                'gambar' => 'Ajitama Egg (1 pcs).jpg',
                'kategori' => 'Topping',
            ],
            [
                'nama' => 'Extra Chicken Chashu (3 pcs)',
                'harga' => 12000,
                'deskripsi' => 'Tambahan irisan daging ayam gulung gurih yang dimasak perlahan.',
                'gambar' => 'Extra Chicken Chashu (3 pcs).jpg',
                'kategori' => 'Topping',
            ],
            [
                'nama' => 'Nori Seaweed (4 sheets)',
                'harga' => 4000,
                'deskripsi' => 'Lembaran rumput laut kering renyah penambah aroma gurih alami.',
                'gambar' => 'Nori Seaweed (4 sheets).jpg',
                'kategori' => 'Topping',
            ],
            [
                'nama' => 'Menma (Seasoned Bamboo Shoots)',
                'harga' => 5000,
                'deskripsi' => 'Rebung Jepang fermentasi bertekstur renyah dengan rasa gurih yang khas.',
                'gambar' => 'Menma (Seasoned Bamboo Shoots).jpg',
                'kategori' => 'Topping',
            ],
            [
                'nama' => 'Narutomaki (Fish Cake - 4 pcs)',
                'harga' => 5000,
                'deskripsi' => 'Olahan kue ikan khas Jepang berbentuk bundar dengan corak pusaran merah muda ikonik.',
                'gambar' => 'Narutomaki (Fish Cake - 4 pcs).jpg',
                'kategori' => 'Topping',
            ],
        ];

        foreach ($menus as $menu) {
            Menu::updateOrCreate(
                ['nama' => $menu['nama']],
                $menu
            );
        }
    }
}