<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">UNPAM - Prodi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-ul ms-auto d-flex align-items-center list-unstyled m-0 gap-3">
        <li class="nav-item">
          <a class="nav-link text-white" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/about">About</a>
        </li>
        <!-- Tombol Admin Panel Ditambahkan Di Sini -->
        <li class="nav-item ms-lg-2">
          <a href="{{ route('admin.home') }}" class="btn btn-warning text-dark fw-semibold px-3 py-1">Admin Panel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>