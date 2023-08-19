<!-- HEADER -->

<div class="main-header side-header sticky">
    <div class="main-container container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="javascript:void(0);" id="mainSidebarToggle"><span></span></a>
            <div class="hor-logo">
                <a class="main-logo" href="index.html">
                    <img src="../assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                    <img src="../assets/img/brand/logo-light.png" class="header-brand-img desktop-logo-dark"
                        alt="logo">
                </a>
            </div>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="index.html"><img src="../assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
                <a href="index.html"><img src="../assets/img/brand/logo-light.png" class="mobile-logo-dark"
                        alt="logo"></a>
            </div>
        </div>
        <div class="main-header-right">
            <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
            </button><!-- Navresponsive closed -->
            <div class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ms-auto">
                        <!-- Profile -->
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="javascript:void(0);">
                                <span class="main-img-user"><img alt="avatar"
                                        src="{{ asset('spruha/assets/img/users/1.jpg') }}"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">Sonia Taylor</h6>
                                    <p class="main-notification-text">Web Designer</p>
                                </div>
                                <a class="dropdown-item" href="signin.html">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- Profile -->
                        <!-- Sidebar -->
                        <div class="dropdown  header-settings">
                            <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right"
                                data-bs-target=".sidebar-right">
                                <i class="fe fe-align-right header-icons"></i>
                            </a>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
            </div>
            {{-- <div class="d-flex header-setting-icon demo-icon fa-spin">
                <a class="nav-link icon" href="javascript:void(0);">
                    <i class="fe fe-settings settings-icon "></i>
                </a>
            </div> --}}
        </div>
    </div>
</div>
<!-- END HEADER -->
