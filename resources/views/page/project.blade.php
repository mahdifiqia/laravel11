@extends('layouts.app')

@section('title', 'Project')

@section('content')
<div class="container flex-grow-1">
    <!-- Header Section -->
    <div class="text-center my-4">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Daftar Project yang dikerjakan oleh mahasiswa</p>
    </div>

    <!-- Cards Section -->
    <div class="row g-4 mb-5">
        @foreach($projects as $item)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <img src="{{ $item['image'] }}" class="card-img-top rounded-top-3" alt="{{ $item['title'] }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">{{ $item['title'] }}</h5>
                        
                        <div class="mb-2">
                            <span class="badge bg-success fw-normal px-2 py-1">{{ $item['status'] }}</span>
                        </div>
                        
                        <p class="card-text text-muted small flex-grow-1">{{ $item['description'] }}</p>
                        
                        <p class="card-text small text-secondary mb-3">
                            <strong>Tech :</strong> {{ $item['tech'] }}
                        </p>
                        
                        <a href="/project/{{ $item['id'] }}" class="btn btn-primary w-100 fw-semibold">Detail Project</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection