<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project; // Pastikan model Project di-import

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'E-Commmerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Redesign Cover Dan Branding',
                'description' => 'Perancangan element grafis personal branding dan design sampul buku rekayasa web',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Toko Musik Fisik & Merchandise',
                'description' => 'Platform e-commerce untuk perilisan musik fisik, manajemen inventaris kaset, dan keranjang belanja',
                'teknologi' => 'PHP, MySQL & JavaScript',
                'image' => 'project4.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Sistem Manajemen Order Percetakan',
                'description' => 'Aplikasi internal untuk melacak status pesanan cetak pelanggan, stok kertas, dan jadwal produksi harian',
                'teknologi' => 'PHP, MySQL & Tailwind CSS',
                'image' => 'project5.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Galeri Fotografi Personal',
                'description' => 'Website portofolio minimalis untuk menampilkan hasil jepretan kamera digital beserta detail metadata',
                'teknologi' => 'HTML, CSS & JavaScript',
                'image' => 'project6.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Desain Kemasan Souvenir',
                'description' => 'Perancangan pola potong (die-cut) hardbox dan softbox sleeve untuk packaging produk suvenir',
                'teknologi' => 'Adobe Illustrator & Photoshop',
                'image' => 'project7.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Company Profile Ruang Kreatif',
                'description' => 'Landing page responsif untuk menampilkan profil agensi, portofolio layanan, dan kontak bisnis',
                'teknologi' => 'HTML & Bootstrap',
                'image' => 'project8.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Sistem Publikasi Esai & Blog',
                'description' => 'Sistem manajemen konten (CMS) sederhana untuk menulis, mengedit, dan mempublikasikan artikel personal',
                'teknologi' => 'PHP & MySQL',
                'image' => 'project9.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Program Kalkulator Logika Dasar',
                'description' => 'Aplikasi console-based untuk mengeksekusi dan menghitung operasi logika algoritma dasar',
                'teknologi' => 'C++ & Flowgorithm',
                'image' => 'project10.jpg',
                'status' => 'Selesai',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}