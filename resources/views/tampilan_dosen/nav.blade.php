<main class="main-content">
    <div class="position-relative  iq-banner ">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border">
            <div class="container-fluid navbar-inner">
                <a href="{{ route('dashboard') }}" class="navbar-brand">

                    <!--Logo start-->
                    <div class="logo-main">
                        <div class="logo-normal">
                            <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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
                            <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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
                    <h4 class="logo-title d-block d-xl-none" data-setting="app_name">Hope UI</h4>
                </a>
                <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                    <i class="icon d-flex">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                        </svg>
                    </i>
                </div>
                <div class="d-flex align-items-center justify-content-between product-offcanvas">
                    <div class="breadcrumb-title border-end me-3 pe-3 d-none d-xl-block">
                        <small class="mb-0 text-capitalize">User Profile</small>
                    </div>
                    <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                        id="offcanvasBottom">
                        <div class="offcanvas-body">
                            <ul class="iq-nav-menu list-unstyled">
                                {{-- <li class="nav-item active">
                                    <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse"
                                        href="#homeData" role="button" aria-expanded="false" aria-controls="homeData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="nav-text ms-2">Home</span>
                                    </a>
                                    <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                                        <li class="nav-item"><a class="nav-link " href="../index.html">Dashboard</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="../alternate-dashboard.html">Alternate Dashboard</a>
                                        </li>   
                                    </ul>
                                </li> --}}

                                <!-- Jika halaman saat ini adalah halaman 'dashboard' -->
                                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                                    <a class="nav-link menu-arrow justify-content-start" href="{{ route('dashboard') }}"
                                        role="button" aria-controls="homeData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="nav-text ms-2">Dashboard</span>
                                    </a>

                                <li class="nav-item {{ request()->is('tugas') ? 'active' : '' }}">
                                    <a class="nav-link menu-arrow justify-content-start" href="{{ route('tugas') }}"
                                        role="button" aria-controls="homeData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="nav-text ms-2">Kegiatan</span>
                                    </a>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="navbar-toggler-bar bar1 mt-1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                        <li class="nav-item dropdown me-0 me-xl-3">
                            <div class="d-flex align-items-center mr-2 iq-font-style" role="group"
                                aria-label="First group" data-setting="radio">
                                <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-sm"
                                    id="font-size-sm">
                                <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm"
                                    data-bs-toggle="tooltip" title="Font size 14px" data-bs-placement="bottom">
                                    <span class="mb-0 h6" style="color: inherit !important;">A</span>
                                </label>
                                <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-md"
                                    id="font-size-md">
                                <label for="font-size-md" class="btn btn-border border-0 btn-icon"
                                    data-bs-toggle="tooltip" title="Font size 16px" data-bs-placement="bottom">
                                    <span class="mb-0 h4" style="color: inherit !important;">A</span>
                                </label>
                                <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-lg"
                                    id="font-size-lg">
                                <label for="font-size-lg" class="btn btn-border border-0 btn-icon"
                                    data-bs-toggle="tooltip" title="Font size 18px" data-bs-placement="bottom">
                                    <span class="mb-0 h2" style="color: inherit !important;">A</span>
                                </label>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-end pe-3 d-none d-xl-block">
                            <div class="form-group input-group mb-0 search-input">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-text">
                                    <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </li>
                        <li class="nav-item dropdown iq-responsive-menu border-end d-block d-xl-none">
                            <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11"
                                style="width: 25rem;">
                                <li class="px-3 py-0">
                                    <div class="form-group input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-text">
                                            <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></circle>
                                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown" id="itemdropdown1">
                            <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                    <span class="btn-inner">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.4"
                                                d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('edit-profil') }}">Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        {{ csrf_field() }}
                                        <button type="submit" class="dropdown-item">
                                            <i class="fa fa-power-off m-r-5 m-l-5"></i> Keluar
                                        </button>
                                    </form>
                                    {{-- <a class="dropdown-item" href="../auth/sign-in.html">Logout</a> --}}
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item iq-full-screen d-none d-xl-block" id="fullscreen-item">
                            <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                                <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                    <span class="btn-inner">
                                        <svg class="normal-screen icon-24" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5528 5.99656L13.8595 10.8961" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M5.8574 18.896L10.5507 13.9964" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                        <svg class="full-normal-screen d-none icon-24" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> <!-- Nav Header Component Start -->
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Pengumuman</h1>
                                {{-- <p>Experience a simple yet powerful way to build Dashboards with HOPE UI.</p> --}}
                            </div>
                            <div>
                                <a href="#" class="btn btn-link btn-soft-light">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.4"
                                            d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    Pengumuman
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img">
                <img src="/admin/images/dashboard/top-header.png" alt="header"
                    class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                <img src="/admin/images/dashboard/top-header1.png" alt="header"
                    class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                <img src="/admin/images/dashboard/top-header2.png" alt="header"
                    class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                <img src="/admin/images/dashboard/top-header3.png" alt="header"
                    class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                <img src="/admin/images/dashboard/top-header4.png" alt="header"
                    class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                <img src="/admin/images/dashboard/top-header5.png" alt="header"
                    class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
            </div>
        </div> <!-- Nav Header Component End -->
        <!--Nav End-->
    </div>
