@extends('admin.template')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold text-dark m-0">Edit Project</h2>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.projects.update', $project['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label text-secondary fw-semibold" style="font-size: 0.9rem;">Nama Project</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $project['title'] }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="tech" class="form-label text-secondary fw-semibold" style="font-size: 0.9rem;">Teknologi</label>
                    <input type="text" class="form-control" id="tech" name="tech" value="{{ $project['tech'] }}" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label text-secondary fw-semibold" style="font-size: 0.9rem;">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="active" {{ $project['status'] == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $project['status'] == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="image" class="form-label text-secondary fw-semibold" style="font-size: 0.9rem;">Upload Gambar Project</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>

            <div class="mb-4">
                <label for="description" class="form-label text-secondary fw-semibold" style="font-size: 0.9rem;">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $project['description'] }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4 fw-semibold">Perbarui</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-danger px-4 fw-semibold text-white">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection