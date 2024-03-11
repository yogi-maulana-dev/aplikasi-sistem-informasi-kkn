<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuperAdmin;

class SuperAdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        SuperAdmin::create([
            'namalengkap'	=> 'yogi maulana',
            'email'	=> 'yogimaulana131@gmail.com',
            'nohp'	=> '089631031327',
            'password'	=> bcrypt('projectyai.com')
    ]);
    }
}
