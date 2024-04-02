<!doctype html>
<html lang="en" dir="ltr">

<!--
* Show the form for creating a new resource.
* Whatapps 6289631031237
* email : yogimaulana100@gmail.com
* bit.ly/yogingoding
* https://serbaotodidak.com/yogi
* -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-leftJoin="SKKN ini adalah salah satu project yang dibuat oleh " data-setting="app_name">
        Sistem Kuliah Kerja Nyata Universitas Muhammadiyah Lampung
    </title>
    <meta name="description" content="Ini adalah website sistem kuliah kerja untuk universitas." />
    <meta name="keywords"
        content="projectyai, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard," />
    <meta name="author" content="Iqonic Design" />
    <meta name="DC.title" content="Sistem Kuliah Kerja Nyata Universitas Muhammadiyah" />

    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <!-- Config Options -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico">
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/admin/css/core/libs.min.css">
    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="/admin/css/hope-ui.min1fc6.css?v=4.0.0">
    <link rel="stylesheet" href="/admin/css/pro.min1fc6.css?v=4.0.0">
    <!-- Custom Css -->
    <link rel="stylesheet" href="/admin/css/custom.min1fc6.css?v=4.0.0">
    <!-- Dark Css -->
    <link rel="stylesheet" href="/admin/css/dark.min1fc6.css?v=4.0.0">
    <!-- Customizer Css -->
    <link rel="stylesheet" href="/admin/css/customizer.min1fc6.css?v=4.0.0">
    <!-- RTL Css -->
    <link rel="stylesheet" href="/admin/css/rtl.min1fc6.css?v=4.0.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/loader.webp" alt="loader"
                    class="light-loader img-fluid w-25" width="200" height="200">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white h-100">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div
                                class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card iq-auth-form">
                                <div class="card-body">
                                    <a href="../index.html" class="navbar-brand d-flex align-items-center mb-3">

                                        <!--Logo start-->
                                        <div class="logo-main">
                                            <div class="logo-normal">
                                                <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="-0.757324" y="19.2427" width="28" height="4"
                                                        rx="2" transform="rotate(-45 -0.757324 19.2427)"
                                                        fill="currentColor" />
                                                    <rect x="7.72803" y="27.728" width="28" height="4"
                                                        rx="2" transform="rotate(-45 7.72803 27.728)"
                                                        fill="currentColor" />
                                                    <rect x="10.5366" y="16.3945" width="16" height="4"
                                                        rx="2" transform="rotate(45 10.5366 16.3945)"
                                                        fill="currentColor" />
                                                    <rect x="10.5562" y="-0.556152" width="28" height="4"
                                                        rx="2" transform="rotate(45 10.5562 -0.556152)"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                            <div class="logo-mini">
                                                <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="-0.757324" y="19.2427" width="28" height="4"
                                                        rx="2" transform="rotate(-45 -0.757324 19.2427)"
                                                        fill="currentColor" />
                                                    <rect x="7.72803" y="27.728" width="28" height="4"
                                                        rx="2" transform="rotate(-45 7.72803 27.728)"
                                                        fill="currentColor" />
                                                    <rect x="10.5366" y="16.3945" width="16" height="4"
                                                        rx="2" transform="rotate(45 10.5366 16.3945)"
                                                        fill="currentColor" />
                                                    <rect x="10.5562" y="-0.556152" width="28" height="4"
                                                        rx="2" transform="rotate(45 10.5562 -0.556152)"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!--logo End-->
                                        {{-- <h4 class="logo-title ms-3 mb-0" data-setting="app_name">Hope UI</h4> --}}
                                    </a>
                                    <h2 class="mb-2 text-center">Silakan Masuk {{ $judul }}</h2>

                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session()->has('loginError'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>{{ session('loginError') }}!</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form method="post" action="{{ route('loginaction') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="npm" class="form-label">Nomor Pokok
                                                        Pegawai</label>
                                                    <input type="text" value="{{ old('login_identifier') }}"
                                                        class="form-control @error('login_identifier') is-invalid @enderror"
                                                        id="npm" name="login_identifier" aria-describedby="npm"
                                                        placeholder=" ">
                                                    @error('login_identifier')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" name="password" aria-describedby="password"
                                                        placeholder=" ">
                                                    @error('password')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-12 d-flex justify-content-between">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="customCheck1">
                <label class="form-check-label" for="customCheck1">Remember Me</label>
            </div>
            <a href="recoverpw.html">Lupa Password?</a>
        </div> --}}
                                        </div>
                                        <div class="mt-2 text-center">
                                            <button type="submit" class="btn btn-primary">Masuk</button>
                                            <a href="{{ route('pendaftaraan') }}" class="btn btn-secondary">Daftar</a>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-bg">
                        <svg width="280" height="230" viewBox="0 0 431 398" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.05">
                                <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                                <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                                <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857"
                                    transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                                <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
                    <img src="/admin/images/auth/01.png" class="img-fluid gradient-main animated-scaleX"
                        alt="images" loading="lazy">
                </div>
            </div>
        </section>
    </div>
    <!-- Live Customizer start -->
    <!-- Setting offcanvas start here -->

    <!-- Settings sidebar end here -->
    <!-- Live Customizer end -->

    <!-- Library Bundle Script -->
    <script src="/admin/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->
    <!-- Slider-tab Script -->
    <script src="/admin/js/plugins/slider-tabs.js"></script>
    <!-- Lodash Utility -->
    <script src="/admin/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="/admin/js/iqonic-script/utility.min.js"></script>
    <!-- Settings Script -->
    <script src="/admin/js/iqonic-script/setting.min.js"></script>
    <!-- Settings Init Script -->
    <script src="/admin/js/setting-init.js"></script>
    <!-- External Library Bundle Script -->
    <script src="/admin/js/core/external.min.js"></script>
    <!-- Widgetchart Script -->
    <script src="/admin/js/charts/widgetcharts1fc6.js?v=4.0.0" defer></script>
    <!-- Dashboard Script -->
    <script src="/admin/js/charts/dashboard1fc6.js?v=4.0.0" defer></script>
    <script src="/admin/js/charts/alternate-dashboard1fc6.js?v=4.0.0" defer></script>
    <!-- Hopeui Script -->
    <script src="/admin/js/hope-ui1fc6.js?v=4.0.0" defer></script>
    <script src="/admin/js/hope-uipro1fc6.js?v=4.0.0" defer></script>
    <script src="/admin/js/sidebar1fc6.js?v=4.0.0" defer></script>
</body>

</html>
