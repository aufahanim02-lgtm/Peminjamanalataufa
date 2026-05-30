<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// ✅ Import seeder dengan nama class yang BENAR
use Database\Seeders\namaseeder_peminjamanaufa;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Panggil seeder utama
        $this->call(namaseeder_peminjamanaufa::class);
    }
}