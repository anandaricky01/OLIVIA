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
        <a class="nav-link beranda {{ ($active === 'home') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/">Beranda</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($active === 'about') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Tentang Kami</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="/about">Tentang SAGA</a></li>
            <li><a class="dropdown-item" href="/about">Tentang Tim</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($active === 'layanan') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Layanan</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="#">Layanan Setor</a></li>
            <li><a class="dropdown-item" href="#">Layanan Kurir</a></li>
            <li><a class="dropdown-item" href="#">Layanan Mitra</a></li>
          </ul>
        </li>
        <a class="nav-link artikel {{ ($active === 'artikel') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/artikel">Artikel</a>
        <a class="nav-link faq {{ ($active === 'faq') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/faq">FAQ</a>
      </div>
      <a class="btn text-white" href="/login" tabindex="-1" aria-disabled="true">Masuk</a>
    </div>
  </div>
</nav>
<!-- akhir navbar -->