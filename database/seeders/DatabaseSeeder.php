<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Penerbit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Penerbit::create([
            'id_penerbit' => 'SP01',
            'nama' => 'Penerbit Informatika',
            'alamat' => 'Jl. Buah Batu No. 121',
            'kota' => 'Bandung',
            'telepon' => '0813-2220-1946'
        ]);
        Penerbit::create([
            'id_penerbit' => 'SP02',
            'nama' => 'Andi Offset',
            'alamat' => 'Jl. Suryalaya IX No.3',
            'kota' => 'Bandung',
            'telepon' => '0878-3903-0688'
        ]);
        Penerbit::create([
            'id_penerbit' => 'SP03',
            'nama' => 'Danendra',
            'alamat' => 'Jl Moch. Toha 44',
            'kota' => 'Bandung',
            'telepon' => '022-5201215'
        ]);
        Buku::create([
            'id_buku' => 'K1001',
            'kategori' => 'Keilmuan',
            'nama_buku' => 'Analisis & Perancangan Sistem Informasi',
            'harga' => '50000',
            'stok' => '60',
            'id_penerbit' => 'SP01'
        ]);
    }
}
