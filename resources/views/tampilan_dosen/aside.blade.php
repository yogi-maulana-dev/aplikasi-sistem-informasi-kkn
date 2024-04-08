<aside class="sidebar sidebar-base" id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{ route('dosen.home') }}" class="navbar-brand">
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class="icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class="icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                <h4 class="logo-title" data-setting="app_name">SKKN</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                            <span class="default-icon">Home</span>
                            <span class="mini-icon" data-bs-toggle="tooltip" title="Home"
                                data-bs-placement="right">-</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('dosen.home') ? 'active' : '' }}">
                        <a class="nav-link" aria-current="page" href="{{ route('dosen.home') }}">
                            <i class="icon" data-bs-toggle="tooltip" title="dosen.Dashboard" data-bs-placement="right">
                                <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Icon SVG -->
                                </svg>
                            </i>
                            <span class="item-name">dosen.Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="nav-item {{ request()->routeIs('tugas') ? 'active' : '' }}">
                        <a class="nav-link" aria-current="page" href="{{ route('tugas') }}">
                            <i class="icon" data-bs-toggle="tooltip" title="doosen.Dashboard" data-bs-placement="right">
                                <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Icon SVG -->
                                </svg>
                            </i>
                            <span class="item-name">Kegiatan</span>
                        </a>
                    </li>
                    


                    <li>
                        <hr class="hr-horizontal" />
                    </li>

                   


                    <!-- Sidebar Menu End -->
            </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>