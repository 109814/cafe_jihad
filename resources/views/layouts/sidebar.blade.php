
<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-mug-hot"></i>

                </div>
                <div class="sidebar-brand-text mx-3">JFN<sup> al.dame</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-solid fa-list-ul"></i>
                    <span>Home</span></a>
                </li>
                <hr class="sidebar-divider my-0">
            <!-- Input MEnu -->
            @auth
                @if (auth()->user()->hasRole('manajer'))

                <li class="nav-item">
                    <a class="nav-link" href="/kelola_menu">
                    <i class="fas fa-fw fa-solid fa-list-ul"></i>
                    <span>Tambah Menu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kelolamenu">
                    <i class="fas fa-fw fa-solid fa-list-ul"></i>
                    <span>kelola Menu</span></a>
            </li>
            <!-- Butuh Buat Kebawah Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pengguna:</h6>
                        <a class="collapse-item" href="#">Laporan</a>
                        <a class="collapse-item" href="#">Laporan Transaksi</a>
                        <a class="collapse-item" href="#">Log Aktivitas</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Manajer</h6>
                        <a class="collapse-item" href="#">Kelola Menu</a>
                        <a class="collapse-item" href="#">Log</a>

                    </div>
                </div>
            </li>
            @elseif (auth()->user()->hasRole('admin'))
            <li class="nav-item">
                <a class="nav-link" href="/register">
                <i class="fas fa-fw fa-solid fa-list-ul"></i>
                <span>Tambah user</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kelolauser">
                <i class="fas fa-fw fa-solid fa-list-ul"></i>
                <span>kelola user</span></a>
        </li>
            @elseif (auth()->user()->hasRole('kasir'))
            <li class="nav-item">
                <a class="nav-link" href="/kelola_menu">
                <i class="fas fa-fw fa-solid fa-list-ul"></i>
                <span>Tambah user</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kelolamenu">
                <i class="fas fa-fw fa-solid fa-list-ul"></i>
                <span>kelola user</span></a>
        </li>
            @endif
        @endauth



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- End of Sidebar -->
