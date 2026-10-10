@extends('layouts.app')

@section('title', 'Profile Mahasiswa')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow-sm border-0 p-4 text-center" style="width: 100%; max-width: 500px;">
        
        <!-- Bagian Foto Profil yang sudah disesuaikan posisinya -->
        <div class="mb-3">
            <img src="{{ $mahasiswa['foto'] }}" alt="Foto {{ $mahasiswa['nama'] }}" class="rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover; object-position: center 20%;">
        </div>

        <h4 class="fw-bold mb-1">{{ $mahasiswa['nama'] }}</h4>
        <p class="text-muted mb-2">NIM: {{ $mahasiswa['nim'] }}</p>
        
        <div class="mb-3">
            <span class="badge bg-success">{{ $mahasiswa['status'] }}</span>
        </div>

        <ul class="list-group list-group-flush text-start">
            <li class="list-group-item"><strong>Prodi:</strong> {{ $mahasiswa['prodi'] }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $mahasiswa['email'] }}</li>
            <li class="list-group-item"><strong>Kampus:</strong> {{ $mahasiswa['kampus'] }}</li>
        </ul>
    </div>
</div>
@endsection