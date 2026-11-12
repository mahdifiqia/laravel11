<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Projects</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; color: #333; }
        h2 { text-align: center; margin-bottom: 20px; color: #1a1a1a; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; vertical-align: middle; }
        th { background-color: #f4f4f4; color: #333; }
        .text-center { text-align: center; }
        .badge { padding: 3px 8px; border-radius: 4px; font-size: 10px; color: #fff; display: inline-block; }
        .badge-active { background-color: #28a745; }
        .badge-archived { background-color: #6c757d; }
    </style>
</head>
<body>

    <h2>Laporan Data Projects - Universitas Pamulang</h2>

    <table>
        <thead>
            <tr>
                <th width="35" class="text-center">No</th>
                <th width="70" class="text-center">Gambar</th>
                <th>Title</th>
                <th>Teknologi</th>
                <th>Description</th>
                <th width="70" class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $index => $p)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td class="text-center">
                    @if(!empty($p['image']) && file_exists(public_path('uploads/projects/' . $p['image'])))
                        {{-- Menggunakan public_path agar Dompdf dapat membaca file gambar secara lokal --}}
                        <img src="{{ public_path('uploads/projects/' . $p['image']) }}" width="50" style="height: 35px; object-fit: cover; border-radius: 3px;" alt="Image">
                    @else
                        <span style="font-size: 10px; color: #777;">No Image</span>
                    @endif
                </td>
                <td>{{ $p['title'] }}</td>
                <td>{{ $p['tech'] }}</td>
                <td>{{ $p['description'] }}</td>
                <td class="text-center">
                    <span class="badge {{ $p['status'] == 'active' ? 'badge-active' : 'badge-archived' }}">
                        {{ ucfirst($p['status']) }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>