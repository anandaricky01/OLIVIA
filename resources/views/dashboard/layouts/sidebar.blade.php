<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/riwayat-kupon') ? 'active' : '' }}" aria-current="page" href="/dashboard/riwayat-kupon">
            <span data-feather="home"></span>
            Riwayat Kupon
          </a>
        </li>
        @if (auth()->user()->role_id == 2)
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/artikel') ? 'active' : '' }}" href="/dashboard/artikel">
            <span data-feather="file-text"></span>
            Artikel
          </a>
        </li> 
        @endif
      </ul>
    </div>
  </nav>