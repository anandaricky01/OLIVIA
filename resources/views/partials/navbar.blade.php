 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 fixed-top">
  <div class="container">
    <div>
      <img style="width: 30px; height: 30px; margin-right: 10px" src="/img/LOGO.png" alt="Logo" />
    </div>
    <a class="navbar-brand" href="/">SAGA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <div class="navbar-nav mx-auto">
        <a class="nav-link beranda {{ Request::is('') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/">Beranda</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('about') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Tentang Kami</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="/about">Tentang SAGA</a></li>
            <li><a class="dropdown-item" href="/about">Tentang Tim</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Layanan</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="#">Layanan Setor</a></li>
            <li><a class="dropdown-item" href="#">Layanan Kurir</a></li>
            <li><a class="dropdown-item" href="#">Layanan Mitra</a></li>
          </ul>
        </li>
        <a class="nav-link artikel {{ Request::is('artikel') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/artikel">Artikel</a>
        <a class="nav-link faq {{ Request::is('faq') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/faq">FAQ</a>
      </div>

      <ul class="navbar-nav ms-auto">
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}!
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">  
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log out </button>
              </form>
            </li>
          </ul>
        </li>
      @else 
        <a class="btn text-white" href="/login" tabindex="-1" aria-disabled="true">Masuk</a>
      @endauth
    </ul>
    
    </div>
  </div>
</nav>
<!-- akhir navbar -->