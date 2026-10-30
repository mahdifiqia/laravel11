<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Method privat untuk menyimpan data proyek agar bisa dipakai bersama
    private function getProjectsData()
    {
        return [
            [
                'id' => 1,
                'title' => 'Sistem Informasi Akademik',
                'status' => 'In progress',
                'status_color' => 'bg-success',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, dan nilai secara terintegrasi.',
                'tech' => 'Laravel & Bootstrap',
                'image' => asset('images/project1.jpg')
            ],
            [
                'id' => 2,
                'title' => 'E-Commerce SEO Optimization',
                'status' => 'In progress',
                'status_color' => 'bg-success',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing katalog produk online shop untuk meningkatkan traffic organik.',
                'tech' => 'PHP & Google Search Console',
                'image' => asset('images/project2.jpg')
            ],
            [
                'id' => 3,
                'title' => 'Redesign Cover dan Branding',
                'status' => 'Selesai',
                'status_color' => 'bg-success',
                'description' => 'Perancangan elemen grafis personal branding dan aset media sosial.',
                'tech' => 'Figma & Canva',
                'image' => asset('images/project3.jpg')
            ],
            [
                'id' => 4,
                'title' => 'Aplikasi Kasir Toko Ponsel',
                'status' => 'Selesai',
                'status_color' => 'bg-success',
                'description' => 'Sistem Point of Sales (POS) berbasis web untuk transaksi dan pencatatan stok barang.',
                'tech' => 'PHP & MySQL',
                'image' => asset('images/project4.jpg')
            ],
            [
                'id' => 5,
                'title' => 'Portal Berita Kampus UNPAM',
                'status' => 'Selesai',
                'status_color' => 'bg-success',
                'description' => 'Platform publikasi artikel, pengumuman, dan berita seputar kegiatan mahasiswa.',
                'tech' => 'Laravel & Tailwind CSS',
                'image' => asset('images/project5.jpg')
            ],
            [
                'id' => 6,
                'title' => 'Sistem Inventaris Barang',
                'status' => 'In progress',
                'status_color' => 'bg-success',
                'description' => 'Aplikasi manajemen aset dan peminjaman fasilitas di lingkungan prodi.',
                'tech' => 'Laravel & Bootstrap',
                'image' => asset('images/project6.jpg')
            ],
            [
                'id' => 7,
                'title' => 'Landing Page UMKM Lokal',
                'status' => 'Selesai',
                'status_color' => 'bg-success',
                'description' => 'Desain halaman responsif untuk promosi produk usaha mikro masyarakat.',
                'tech' => 'HTML, CSS & JavaScript',
                'image' => asset('images/project7.jpg')
            ],
            [
                'id' => 8,
                'title' => 'Sistem Keuangan Pribadi',
                'status' => 'Selesai',
                'status_color' => 'bg-success',
                'description' => 'Aplikasi pencatatan pemasukan, pengeluaran, dan grafik rekap bulanan.',
                'tech' => 'Python & SQLite',
                'image' => asset('images/project8.jpg')
            ],
            [
                'id' => 9,
                'title' => 'Aplikasi Tracking Fitness & Lari',
                'status' => 'In progress',
                'status_color' => 'bg-success',
                'description' => 'Sistem pengolah data statistik jarak, rute, dan waktu latihan fisik.',
                'tech' => 'JavaScript & Bootstrap',
                'image' => asset('images/project9.jpg')
            ],
            [
                'id' => 10,
                'title' => 'Sistem Evaluasi Dosen UNPAM',
                'status' => 'Selesai',
                'status_color' => 'bg-success',
                'description' => 'Kuesioner online performa pengajaran untuk peningkatan mutu akademik.',
                'tech' => 'Laravel & MySQL',
                'image' => asset('images/project10.jpg')
            ],
        ];
    }

    // Menampilkan daftar semua proyek
    public function index()
    {
        $projects = $this->getProjectsData();
        return view('page.project', compact('projects'));
    }

    // Menampilkan detail proyek berdasarkan ID
    public function show($id)
    {
        $projects = $this->getProjectsData();
        
        // Cari proyek berdasarkan ID
        $project = collect($projects)->firstWhere('id', $id);

        // Jika tidak ditemukan, kembalikan error 404
        if (!$project) {
            abort(404);
        }

        return view('page.project-detail', compact('project'));
    }
}