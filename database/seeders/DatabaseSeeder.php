<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'namalengkap'	=> 'yogi maulana',
            'email'	=> 'yogimaulana131@gmail.com',
            'nohp'	=> '089631031327',
            'gambar'	=> 'jalan',
            'jk'	=> 'jalan',
            'alamat'	=> 'jalan',
            'password'	=> bcrypt('sangsurya')
    ]);
    }
}
