<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'SIMRS UHTP')</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  @stack('styles')
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .carousel img {
      height: 450px;
      object-fit: cover;
      border-radius: 8px;
    }
    footer {
      background-color: #f8f9fa;
      border-top: 1px solid #dee2e6;
      padding: 20px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">SIMRS UNIVERSITAS HANG TUAH PEKANBARU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle 
                     {{ request()->is('identitas*') || request()->is('sambutan*') ? 'active' : '' }}" 
             href="#" role="button" data-bs-toggle="dropdown">
            Tentang RS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('identitas.index') }}">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="{{ route('sambutan.direktur') }}">Sambutan Direktur RS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('informasi*') ? 'active' : '' }}" href="{{ route('informasi.index') }}">Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('rekam-medis*') ? 'active' : '' }}" href="{{ route('rekam.index') }}">Rekam Medis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('kontak*') ? 'active' : '' }}" href="{{ route('kontak.index') }}">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('pendaftaran*') ? 'active' : '' }}" href="{{ route('front.pendaftaran') }}">Pendaftaran Pasien</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<main class="container py-4">
  @yield('content')
</main>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <small>&copy; {{ date('Y') }} SIMRS Universitas Hang Tuah Pekanbaru. All rights reserved.</small>
  </div>
</footer>

<!-- Scripts -->
@stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
