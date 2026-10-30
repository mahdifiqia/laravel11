@extends('admin.template')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark m-0">Data Projects</h2>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary fw-semibold px-3">+ Tambah Project</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 15%;">Gambar</th>
                <th style="width: 20%;">Title</th>
                <th style="width: 20%;">Teknologi</th>
                <th style="width: 25%;">Description</th>
                <th style="width: 10%;">Status</th>
                <th style="width: 15%;" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    @if(!empty($p['image']))
                        <img src="{{ asset('uploads/projects/' . $p['image']) }}" alt="Project Image" class="rounded shadow-sm" style="width: 70px; height: 45px; object-fit: cover;">
                    @else
                        <span class="badge bg-light text-dark border px-2 py-1">No Image</span>
                    @endif
                </td>
                <td class="fw-semibold">{{ $p['title'] }}</td>
                <td>{{ $p['tech'] }}</td>
                <td class="text-muted small">{{ $p['description'] }}</td>
                <td>
                    @if($p['status'] == 'active')
                        <span class="badge bg-success px-3 py-2 fw-semibold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Active</span>
                    @else
                        <span class="badge bg-secondary px-3 py-2 fw-semibold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Inactive</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-1">
                        <a href="{{ route('admin.projects.edit', $p['id']) }}" class="btn btn-warning btn-sm text-dark fw-medium px-2 py-1">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $p['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm px-2 py-1" onclick="return confirm('Yakin ingin menghapus project ini?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection