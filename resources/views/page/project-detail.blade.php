@extends('layouts.app')

@section('title', 'Detail Project')

@section('content')
<div class="container py-5">
    <!-- Tombol Kembali -->
    <div class="mb-4">
        <a href="{{ url('/project') }}" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Daftar Project</a>
    </div>

    <!-- Detail Content -->
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ $project['image'] }}" class="img-fluid rounded-4 shadow-sm w-100" alt="{{ $project['title'] }}" style="max-height: 350px; object-fit: cover;">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">{{ $project['title'] }}</h2>
            
            <div class="mb-3">
                <span class="badge bg-success fw-normal px-3 py-2 fs-6">{{ $project['status'] }}</span>
            </div>
            
            <hr>
            
            <h5 class="fw-semibold text-dark">Deskripsi Project:</h5>
            <p class="text-muted leading-relaxed">{{ $project['description'] }}</p>
            
            <h5 class="fw-semibold text-dark mt-4">Teknologi yang Digunakan:</h5>
            <p class="text-secondary mb-4">
                <span class="badge bg-light text-dark border px-3 py-2 fs-6">{{ $project['tech'] }}</span>
            </p>
        </div>
    </div>
</div>
@endsection