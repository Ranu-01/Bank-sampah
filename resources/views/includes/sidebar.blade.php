<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
            <div class="sidemenu-logo">
                <a class="main-logo" href="{{ route('dashboard.index') }}">
                    {{-- <img src="{{ asset('spruha/assets/img/logo-banstal-no-background.png') }}"
                        class="header-brand-img desktop-logo" alt="logo">
                    <img src="../assets/img/brand/icon-light.png" class="header-brand-img icon-logo" alt="logo">
                    <img src="../assets/img/brand/logo.png" class="header-brand-img desktop-logo theme-logo"
                        alt="logo">
                    <img src="../assets/img/brand/icon.png" class="header-brand-img icon-logo theme-logo"
                        alt="logo"> --}}
                    <div class="desktop-logo text-uppercase">BANSTAL</div>
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                <ul class="menu-nav nav">
                    <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-header"><span class="nav-label">Master Data</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori-sampah.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="mdi mdi-animation sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Kategori Sampah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sampah.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="mdi mdi-archive sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Sampah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nasabah.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="mdi mdi-account-multiple sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Nasabah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('petugas.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="far fa-address-card sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Petugas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rt.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fa fa-angle-down sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">RT</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rw.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fa fa fa-angle-double-down sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">RW</span>
                        </a>
                    </li>
                    <li class="nav-header"><span class="nav-label">Transaksi</span></li>

                </ul>
                <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>
