<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Muhammad Mahdi Mahda Fiqia',
            'nim' => '251011700790',
            'prodi' => 'Sistem Informasi',
            'email' => 'mahdi@example.com',
            'kampus' => 'Universitas Pamulang (UNPAM)',
            'status' => 'Aktif',
            'foto' => asset('images/mahdi-foto.jpeg') // Menggunakan helper asset() agar terbaca dari folder public/images/
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}