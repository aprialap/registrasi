  <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fa fa-medkit"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RSM BIMA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('riwayat-pendaftaran')}}">
                    <i class="fa fa-hospital"></i>
                    <span>Pasien Reservasi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pasien')}}">
                    <i class="fa fa-bed"></i>
                    <span>Pasien</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dokter')}}">
                    <i class="fa fa-user-md"></i>
                    <span>Dokter</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('jadwal-praktek')}}">
                    <i class="fa fa-medkit"></i>
                    <span>Jadwal Praktek</span></a>
            </li>

        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->