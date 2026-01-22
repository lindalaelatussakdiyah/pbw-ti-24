<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'judul' => 'Peresmian Gedung Baru Fakultas Teknik',
            'slug' => Str::slug('Peresmian Gedung Baru Fakultas Teknik'),
            'isi' => 'Universitas meresmikan gedung baru untuk Fakultas Teknik yang dilengkapi dengan laboratorium canggih dan ruang kelas modern. Gedung ini diharapkan dapat menunjang kegiatan belajar mengajar mahasiswa.',
            'gambar' => null, // Atau URL gambar jika ada
        ]);

        Berita::create([
            'judul' => 'Seminar Nasional Teknologi Informasi 2024',
            'slug' => Str::slug('Seminar Nasional Teknologi Informasi 2024'),
            'isi' => 'Himpunan Mahasiswa Teknik Informatika akan mengadakan seminar nasional dengan tema "Masa Depan AI di Indonesia" pada bulan depan. Segera daftarkan diri Anda!',
            'gambar' => null,
        ]);

        Berita::create([
            'judul' => 'Mahasiswa Kita Juara 1 Lomba Coding Nasional',
            'slug' => Str::slug('Mahasiswa Kita Juara 1 Lomba Coding Nasional'),
            'isi' => 'Selamat kepada tim mahasiswa yang berhasil meraih juara 1 dalam kompetisi coding tingkat nasional yang diselenggarakan di Jakarta. Prestasi ini sangat membanggakan kampus.',
            'gambar' => null,
        ]);
        
        Berita::create([
            'judul' => 'Jadwal Libur Semester Genap',
            'slug' => Str::slug('Jadwal Libur Semester Genap'),
            'isi' => 'Diberitahukan kepada seluruh sivitas akademika bahwa libur semester genap akan dimulai pada tanggal 20 Juli hingga 30 Agustus. Harap mempersiapkan diri.',
            'gambar' => null,
        ]);
        
        Berita::create([
            'judul' => 'Program Pertukaran Pelajar Internasional',
            'slug' => Str::slug('Program Pertukaran Pelajar Internasional'),
            'isi' => 'Pendaftaran program pertukaran pelajar ke Jepang dan Korea Selatan kini telah dibuka. Mahasiswa semester 5 ke atas dapat mendaftar melalui kantor urusan internasional.',
            'gambar' => null,
        ]);
    }
}
