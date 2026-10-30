<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - UNPAM Sistem Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .admin-header { background-color: #ffc107; border-bottom: 3px solid #e0a800; }
        .admin-sidebar { min-height: calc(100vh - 70px); background-color: #343a40; color: #fff; }
        .admin-sidebar .nav-link { color: #adb5bd; padding: 12px 20px; }
        .admin-sidebar .nav-link:hover, .admin-sidebar .nav-link.active { color: #fff; background-color: #495057; }
    </style>
</head>
<body>

    <header class="admin-header px-4 py-3 d-flex justify-content-between align-items-center shadow-sm">
        <div>
            <h4 class="fw-bold mb-0 text-dark">UNIVERSITAS PAMULANG</h4>
            <small class="text-secondary fw-semibold">SISTEM INFORMASI</small>
        </div>
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('admin.home') }}" class="text-dark text-decoration-none fw-medium">Dashboard</a>
            <a href="{{ route('logout') }}" class="text-dark text-decoration-none fw-semibold">Logout</a>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block admin-sidebar p-0">
                <div class="position-sticky pt-3">
                    <div class="text-uppercase text-secondary px-3 mb-2" style="font-size: 0.75rem;">Admin Menu</div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/projects*') ? 'active' : '' }}" href="{{ url('/admin/projects') }}">Data Project</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <div class="bg-white p-4 rounded shadow-sm border" style="min-height: 80vh;">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>