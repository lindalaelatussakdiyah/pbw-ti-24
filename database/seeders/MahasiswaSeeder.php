<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'name' => "Linda Laelatus Sakdiyah",
                'NIM' => "13242420016",
                'prodi' => "Teknologi Informasi",
                'email' => "lindalaila11@gmail.com",
                'nohp' => "08895042668",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dian Fadhilah",
                'NIM' => "13242420048",
                'prodi' => "Sistem Informasi",
                'email' => "dian@example.com",
                'nohp' => "6281234567890",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Jeny wulandari",
                'NIM' => "13242420009",
                'prodi' => "Teknik Komputer",
                'email' => "jny@example.com",
                'nohp' => "08896252625",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}