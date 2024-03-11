
@extends('tampilan_mhs.index')
@section('dashboard')


    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border">
                <div class="container-fluid navbar-inner">
                    <a href="../index.html" class="navbar-brand">
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
                        <h4 class="logo-title d-block d-xl-none" data-setting="app_name">
                            SKKN
                        </h4>
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
                            <small class="mb-0 text-capitalize">Table Data</small>
                        </div>
                        <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                            id="offcanvasBottom">
                            <div class="offcanvas-body">
                                <ul class="iq-nav-menu list-unstyled">
                                    <li class="nav-item active">
                                        <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse"
                                            href="#homeData" role="button" aria-expanded="false"
                                            aria-controls="homeData">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span class="nav-text ms-2">Home</span>
                                        </a>
                                        <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                                            <li class="nav-item">
                                                <a class="nav-link" href="../index.html">Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../alternate-dashboard.html">Alternate
                                                    Dashboard</a>
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
                                    <input type="radio" class="btn-check" name="theme_font_size"
                                        value="theme-fs-sm" id="font-size-sm" />
                                    <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm"
                                        data-bs-toggle="tooltip" title="Font size 14px" data-bs-placement="bottom">
                                        <span class="mb-0 h6"
                                            style="
                                                    color: inherit !important;
                                                ">A</span>
                                    </label>
                                    <input type="radio" class="btn-check" name="theme_font_size"
                                        value="theme-fs-md" id="font-size-md" />
                                    <label for="font-size-md" class="btn btn-border border-0 btn-icon"
                                        data-bs-toggle="tooltip" title="Font size 16px" data-bs-placement="bottom">
                                        <span class="mb-0 h4"
                                            style="
                                                    color: inherit !important;
                                                ">A</span>
                                    </label>
                                    <input type="radio" class="btn-check" name="theme_font_size"
                                        value="theme-fs-lg" id="font-size-lg" />
                                    <label for="font-size-lg" class="btn btn-border border-0 btn-icon"
                                        data-bs-toggle="tooltip" title="Font size 18px" data-bs-placement="bottom">
                                        <span class="mb-0 h2"
                                            style="
                                                    color: inherit !important;
                                                ">A</span>
                                    </label>
                                </div>
                            </li>
                            {{-- <li class="nav-item dropdown border-end pe-3 d-none d-xl-block">
                                <div class="form-group input-group mb-0 search-input">
                                    <input type="text" class="form-control" placeholder="Search..." />
                                    <span class="input-group-text">
                                        <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></circle>
                                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item dropdown iq-responsive-menu border-end d-block d-xl-none">
                                <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="navbarDropdown-search-11" style="width: 25rem">
                                    <li class="px-3 py-0">
                                        <div class="form-group input-group mb-0">
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <span class="input-group-text">
                                                <svg class="icon-20" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link ps-3" id="notification-drop"
                                    data-bs-toggle="dropdown">
                                    <div class="btn btn-primary btn-icon btn-sm rounded-pill btn-action">
                                        <span class="btn-inner">
                                            <svg viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <span class="notification-alert"></span>
                                    </div>
                                </a> --}}
                            {{-- <div class="p-0 sub-drop dropdown-menu dropdown-menu-end"
                                    aria-labelledby="notification-drop">
                                    <div class="m-0 shadow-none card">
                                        <div class="py-3 card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title">
                                                <h5 class="mb-0 text-white">
                                                    All Carts
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="p-0 card-body max-17 scroll-thin">
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/01.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Biker’s Jacket
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/02.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Casual Shoes
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/03.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Knitted Shrug
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/04.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Blue Handbag
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/01.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Biker’s Jacket
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/02.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Casual Shoes
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/03.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Knitted Shrug
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                        src="/admin/images/shapes/04.png" alt=""
                                                        loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0">
                                                            Blue Handbag
                                                        </h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">
                                                                $56.00
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-icon text-danger btn-sm">
                                                        <span class="btn-inner">
                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0 text-center">
                                            <div class="d-grid">
                                                <a href="https://templates.iqonic.design/hope-ui/pro/html/e-commerce/order-process.html"
                                                    class="btn btn-primary">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- </li> --}}
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
                                        <a class="dropdown-item" href="../app/user-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../app/user-privacy-setting.html">Privacy
                                            Setting</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                        {{ csrf_field() }}
                                        <button class="dropdown-item" type="submit">Keluar</button>
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
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.5528 5.99656L13.8595 10.8961" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M5.8574 18.896L10.5507 13.9964" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            <svg class="full-normal-screen d-none icon-24" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
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
            </nav>
            <!-- Nav Header Component Start -->
            <div class="iq-navbar-header" style="height: 215px">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flex-wrap d-flex justify-content-between align-items-center">
                                
                                    <h5 class="gerak">
                                        SISTEM KULIAH KERJA NYATA (SKKN) Universitras Muhammadiyah Lampung
                                    </h5>
                              
                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="/admin/images/dashboard/top-header.png" alt="header"
                        class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy" />
                    <img src="/admin/images/dashboard/top-header1.png" alt="header"
                        class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy" />
                    <img src="/admin/images/dashboard/top-header2.png" alt="header"
                        class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX" loading="lazy" />
                    <img src="/admin/images/dashboard/top-header3.png" alt="header"
                        class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX" loading="lazy" />
                    <img src="/admin/images/dashboard/top-header4.png" alt="header"
                        class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX" loading="lazy" />
                    <img src="/admin/images/dashboard/top-header5.png" alt="header"
                        class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX" loading="lazy" />
                </div>
            </div>
            <!-- Nav Header Component End -->
            <!--Nav End-->
        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">
                                    Bootstrap Datatable
                                </h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-3">
                                Images in Bootstrap are made responsive with
                                <code>.img-fluid</code>.
                                <code>max-width: 100%;</code> and
                                <code>height: auto;</code> are applied to
                                the image so that it scales with the parent
                                element.
                            </p>
                            <div class="table-responsive">
                                <table id="example" class="stripe hover"
                                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>
                                                Senior Javascript Developer
                                            </td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>
                                                Senior Marketing Designer
                                            </td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>
                                                Chief Financial Officer
                                                (CFO)
                                            </td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>
                                                Chief Marketing Officer
                                                (CMO)
                                            </td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sydney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>
                                                Chief Executive Officer
                                                (CEO)
                                            </td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>
                                                Chief Operating Officer
                                                (COO)
                                            </td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sydney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>
                                                Junior Javascript Developer
                                            </td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item">
                        <a href="../extra/privacy-policy.html">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="../extra/terms-of-service.html">Terms of Use</a>
                    </li>
                </ul>
                <div class="right-panel">
                    ©
                    <script>
                        2022;
                    </script>
                    <span data-setting="app_name">SKKN</span> and IT Muhammadiyah Lampung, Made with
                    <span class="text-gray">
                        <svg class="icon-16" width="15" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    by
                    <a href="https://iqonic.design/" target="_blank">IQONIC Design</a>.
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </main>
    @endsection