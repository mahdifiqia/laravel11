<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('page.home');
});

// Route profile diubah agar memanggil MahasiswaController
Route::get('/profile', [MahasiswaController::class, 'index']);

Route::get('/project', function () {
    $projects = [
        [
            'id' => 1,
            'title' => 'Sistem Informasi AKademik',
            'status' => 'In progress',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, dan nilai.',
            'tech' => 'Laravel & Bootstrap',
            'image' => asset('images/project1.jpg')
        ],
        [
            'id' => 2,
            'title' => 'E-Commerce SEO Optimization',
            'status' => 'In progress',
            'description' => 'Aplikasi optimalisasi struktur heading dan indexing katalog produk online shop.',
            'tech' => 'PHP & Google Search Console',
            'image' => asset('images/project2.jpg')
        ],
        [
            'id' => 3,
            'title' => 'Redesign Cover dan Branding',
            'status' => 'Selesai',
            'description' => 'Perancangan elemen grafis personal branding dan aset media sosial.',
            'tech' => 'Figma & Canva',
            'image' => asset('images/project3.jpg')
        ],
        [
            'id' => 4,
            'title' => 'Aplikasi Kasir Toko Ponsel',
            'status' => 'Selesai',
            'description' => 'Sistem Point of Sales (POS) berbasis web untuk transaksi dan pencatatan stok barang.',
            'tech' => 'PHP & MySQL',
            'image' => asset('images/project4.jpg')
        ],
        [
            'id' => 5,
            'title' => 'Portal Berita Kampus UNPAM',
            'status' => 'Selesai',
            'description' => 'Platform publikasi artikel, pengumuman, dan berita seputar kegiatan mahasiswa.',
            'tech' => 'Laravel & Tailwind CSS',
            'image' => asset('images/project5.jpg')
        ],
        [
            'id' => 6,
            'title' => 'Sistem Inventaris Barang',
            'status' => 'In progress',
            'description' => 'Aplikasi manajemen aset dan peminjaman fasilitas di lingkungan prodi.',
            'tech' => 'Laravel & Bootstrap',
            'image' => asset('images/project6.jpg')
        ],
        [
            'id' => 7,
            'title' => 'Landing Page UMKM Lokal',
            'status' => 'Selesai',
            'description' => 'Desain halaman responsif untuk promosi produk usaha mikro masyarakat.',
            'tech' => 'HTML, CSS & JavaScript',
            'image' => asset('images/project7.jpg')
        ],
        [
            'id' => 8,
            'title' => 'Sistem Keuangan Pribadi',
            'status' => 'Selesai',
            'description' => 'Aplikasi pencatatan pemasukan, pengeluaran, dan grafik rekap bulanan.',
            'tech' => 'Python & SQLite',
            'image' => asset('images/project8.jpg')
        ],
        [
            'id' => 9,
            'title' => 'Aplikasi Tracking Fitness & Lari',
            'status' => 'In progress',
            'description' => 'Sistem pengolah data statistik jarak, rute, dan waktu latihan fisik.',
            'tech' => 'JavaScript & Bootstrap',
            'image' => asset('images/project9.jpg')
        ],
        [
            'id' => 10,
            'title' => 'Sistem Evaluasi Dosen UNPAM',
            'status' => 'Selesai',
            'description' => 'Kuesioner online performa pengajaran untuk peningkatan mutu akademik.',
            'tech' => 'Laravel & MySQL',
            'image' => asset('images/project10.jpg')
        ],
    ];

    return view('page.project', compact('projects'));
});

Route::get('/about', function () {
    return view('page.about');
});