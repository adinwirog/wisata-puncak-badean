<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style= "overflow-y: scroll;">
    <div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link @yield('dashboard')" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link @yield('post')" href="/post">
            <span data-feather="file" class="align-text-bottom"></span>
            Post
        </a>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link @yield('product')" href="/products">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Products
        </a>
        </li> --}}
        <li class="nav-item">
        <a class="nav-link @yield('ticket')" href="{{ route('ticketting.index') }}">
            <span data-feather="users" class="align-text-bottom"></span>
            Ticketting manajemen
        </a>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link @yield('booking')" href="#">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Daftar customer booking
        </a>
        </li> --}}
        <li class="nav-item">
        <a class="nav-link @yield('verified')" href="#">
            <span data-feather="layers" class="align-text-bottom"></span>
            Verifikasi tiket
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link @yield('laporan')" href="#">
            <span data-feather="layers" class="align-text-bottom"></span>
            Laporan pengunjung
        </a>
        </li>
    </ul>

    @if (Auth::user()->is_admin)
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Admin Menu</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
        <a class="nav-link @yield('listakun')" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            List Akun
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link @yield('createakun')" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Buat akun
        </a>
        </li>
    </ul>
    @endif
    </div>
</nav>