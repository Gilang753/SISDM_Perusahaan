<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ url('/') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEmployee" aria-expanded="false" aria-controls="collapseEmployee">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Data Pegawai
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEmployee" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('pegawai.index') }}">Identitas Pegawai</a>
                        <a class="nav-link" href="{{ route('absensi.index') }}">Absensi</a>
                        <a class="nav-link" href="{{ route('pengajuanijin.index') }}">Pengajuan Ijin</a>
                        <a class="nav-link" href="{{ route('pengembangandiri.index') }}">Pengembangan Diri</a>
                        <a class="nav-link" href="{{ route('pendidikan.index') }}">Pendidikan</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCompensation" aria-expanded="false" aria-controls="collapseCompensation">
                    <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                    Kompensasi
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCompensation" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('tunjangan.index') }}">Tunjangan</a>
                        <a class="nav-link" href="{{ route('gaji.index') }}">Gaji</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Pengguna</div>
                <a class="nav-link" href="{{ route('pengguna.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Manajemen Pengguna
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>
