<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {

        $mahasiswa = [
            'nama' => 'Razan Muhammad Al-azzam',
            'nim' => '251011701090',
            'prodi' => 'Sistem Informasi',
            'email' => 'razan.alazzam@example.com',
            'kampus' => 'Universitas Pamulang (UNPAM)',
            'status' => 'Aktif'
        ];

       
       return view('mahasiswa', compact('mahasiswa'));
    }
}