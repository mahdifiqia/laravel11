<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', function () {
    $mahasiswa = [
        'nama' => 'Muhammad Mahdi Mahda Fiqia',
        'nim' => '251011700790',
        'prodi' => 'Sistem Informasi',
        'email' => 'mahdi@example.com',
        'kampus' => 'UNPAM',
        'status' => 'Aktif'
    ];

    return view('page.profile', compact('mahasiswa'));
});

Route::get('/about', function () {
    return view('page.about');
});