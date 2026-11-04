<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - UNPAM Sistem Informasi</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        /* Navbar Atas */
        .navbar-top {
            background-color: #ffc107;
            min-height: 70px;
        }
        /* Sidebar Samping */
        .sidebar {
            min-height: calc(100vh - 70px);
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            transition: 0.2s;
        }
        .sidebar a:hover, .sidebar a.active {
            color: #fff;
            background-color: #495057;
        }
        .content-area {
            padding: 30px;
        }
    </style>
</head>
<body>

    <!-- Header / Navbar Atas -->
    <header class="navbar-top px-4 d-flex justify-content-between align-items-center shadow-sm">
        <div class="d-flex align-items-center">
            <div>
                <h4 class="fw-bold text-dark m-0" style="letter-spacing: 0.5px;">UNIVERSITAS PAMULANG</h4>
                <small class="text-dark fw-semibold" style="font-size: 0.75rem; letter-spacing: 1px;">SISTEM INFORMASI</small>
            </div>
        </div>
        
        <!-- Menu Kanan Atas (Dashboard & Dropdown Administrator) -->
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('admin.home') }}" class="text-dark text-decoration-none fw-semibold">Dashboard</a>
            
            <!-- Dropdown Administrator -->
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle fw-semibold text-dark border-0 bg-transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Administrator
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" style="min-width: 200px;">
                    <li>
                        <span class="dropdown-item-text text-muted small py-2">
                            {{ session('admin_email', 'admin@unpam.ac.id') }}
                        </span>
                    </li>
                    <li><hr class="dropdown-divider my-0"></li>
                    <li>
                        <a class="dropdown-item py-2 text-danger fw-medium" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar / Menu Samping -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
                <div class="position-sticky pt-3">
                    <div class="px-3 mb-2 text-uppercase text-muted fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;">Admin Menu</div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.projects.index') }}" class="{{ request()->routeIs('admin.projects*') ? 'active' : '' }}">Data Project</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Area Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content-area">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle (Wajib untuk dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>