<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class namaseeder_peminjamanaufa extends Seeder
{
    public function run(): void
    {

        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */

        DB::table('users')->insert([

            [
                'nama' => 'Admin',
                'username' => 'admin', 
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Petugas',
                'username' => 'petugas',
                'password' => Hash::make('123456'),
                'role' => 'petugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Peminjam',
                'username' => 'peminjam',
                'password' => Hash::make('123456'),
                'role' => 'peminjam',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | KATEGORI
        |--------------------------------------------------------------------------
        */

        DB::table('kategoris')->insert([

            [
                'nama_kategori' => 'Elektronik',
                'deskripsi' => 'Peralatan elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_kategori' => 'Laboratorium',
                'deskripsi' => 'Peralatan laboratorium',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_kategori' => 'Multimedia',
                'deskripsi' => 'Peralatan multimedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ALAT
        |--------------------------------------------------------------------------
        */

        DB::table('alats')->insert([

            [
                'kategori_id' => 1,
                'nama_alat' => 'Laptop',
                'stok' => 10,
                'kondisi' => 'baik',
                'foto' => null,
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_id' => 2,
                'nama_alat' => 'Mikroskop',
                'stok' => 5,
                'kondisi' => 'baik',
                'foto' => null,
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_id' => 3,
                'nama_alat' => 'Proyektor',
                'stok' => 8,
                'kondisi' => 'baik',
                'foto' => null,
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | PEMINJAMAN
        |--------------------------------------------------------------------------
        */

        DB::table('peminjamans')->insert([

            [
                'user_id' => 3,
                'alat_id' => 1,
                'tanggal_pinjam' => now()->toDateString(),
                'tanggal_kembali' => now()->addDays(3)->toDateString(),
                'jumlah' => 1,
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);


        /*
        |--------------------------------------------------------------------------
        | PENGEMBALIAN
        |--------------------------------------------------------------------------
        */

        DB::table('pengembalians')->insert([

            [
                'peminjaman_id' => 1,
                'tanggal_pengembalian' => now()->toDateString(),
                'keterlambatan' => 0,
                'denda' => 0,
                'kondisi_kembali' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);


        /*
        |--------------------------------------------------------------------------
        | LOG ACTIVITY
        |--------------------------------------------------------------------------
        */

        DB::table('log_activities')->insert([

            [
                'user_id' => 1,
                'aktivitas' => 'Seeder data awal',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}