<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    {{-- Logo --}}
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
      <div>
        <strong>POI</strong><br>
        <small>Politeknik Negeri Lampung</small>
      </div>
    </a>

    {{-- Toggle untuk mode mobile --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Menu utama --}}
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link fw-bold" href="{{ url('/') }}">BERANDA</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="{{ url('/tentang') }}">TENTANG</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="{{ url('/ormawa') }}">ORMAWA</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="{{ url('/ukm') }}">UKM</a></li>
      </ul>

      {{-- Form pencarian & tombol login/logout --}}
      <div class="d-flex align-items-center ms-3">
        <form class="d-flex" action="{{ url('/cari') }}" method="GET">
          <input class="form-control me-2" type="search" name="q" placeholder="Cari berita..." aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </form>

        <div class="ms-3">
          @if(Auth::guard('admin')->check())
              {{-- Jika admin sudah login --}}
              <form action="{{ route('admin.logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Logout</button>
              </form>
          @else
              {{-- Jika belum login --}}
              <a href="{{ route('admin.login') }}" class="btn btn-primary">Login</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>