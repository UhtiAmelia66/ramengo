<?php

namespace Database\Seeders;

use App\Models\Meja;
use Illuminate\Database\Seeder;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($nomor = 1; $nomor <= 20; $nomor++) {
            Meja::updateOrCreate(
                ['nomor_meja' => 'Meja '.str_pad((string) $nomor, 2, '0', STR_PAD_LEFT)],
                ['status' => 'tersedia']
            );
        }
    }
}
