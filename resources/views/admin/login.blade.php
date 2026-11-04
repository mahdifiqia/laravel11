<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - UNPAM Sistem Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url("{{ asset('images/background-unpam.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .login-card {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        .login-header {
            background-color: #ffc107;
            color: #000;
            text-align: center;
            padding: 20px;
            font-weight: bold;
            font-size: 1.3rem;
        }
        .login-body {
            padding: 30px;
        }
        .btn-warning-custom {
            background-color: #ffc107;
            border-color: #ffc107;
            font-weight: 600;
            color: #000;
        }
        .btn-warning-custom:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }
    </style>
</head>
<body>

    <div class="login-overlay"></div>

    <div class="login-card">
        <div class="login-header">
            Admin Login
        </div>
        <div class="login-body">
            @if(session('error'))
                <div class="alert alert-danger py-2 small mb-3">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label small fw-semibold text-secondary">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="admin@unpam.ac.id" required>
                </div>
                <div class="mb-4">
                    <label class="form-label small fw-semibold text-secondary">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-warning-custom w-100 py-2">Login</button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted" style="font-size: 0.75rem;">
                    Demo Login : admin@unpam.ac.id / password123
                </small>
            </div>
        </div>
    </div>

</body>
</html>