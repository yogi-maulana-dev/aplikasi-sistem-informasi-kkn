<!doctype html>
<html lang="en" dir="ltr">


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

<body>
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
            <div class="row m-0 align-items-center bg-white vh-580">
                <div class="col-md-6 d-md-block d-none bg-primary p-0 vh-580 overflow-hidden">
                    <img src="/admin/images/auth/projectyai.png" class="img-fluid gradient-main animated-scaleX"
                        alt="images" loading="lazy">
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                                <div class="card-body">
                                    <a href="../index.html" class="navbar-brand d-flex align-items-center mb-3">

                                        <!--Logo start-->
                                        {{-- <div class="logo-main">
                                  <div class="logo-normal">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                                  <div class="logo-mini">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                              </div> --}}
                                        {{-- <!--logo End-->                              <h4 class="logo-title ms-3 mb-0" data-setting="app_name">Hope UI</h4> --}}
                                    </a>
                                    <h2 class="mb-2 text-center">Silakan Daftar</h2>
                                    <div class="alert alert-warning">
                                        <ul>
                                            Foto ukuran max 5 mb
                                        </ul>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger mt-3">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <form method="post" action="{{ route('pendaftaraan.simpan') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="npm" class="form-label">Nomor Pokok
                                                        Mahasiswa</label>
                                                    <input type="text" name="npm"
                                                        class="form-control border-success" id="npm"
                                                        placeholder=" " value="{{ old('npm') }}">
                                                    @error('npm')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                                    <input type="text" name="namalengkap"
                                                        class="form-control border-success" id="namalengkap"
                                                        placeholder=" " value="{{ old('namalengkap') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" name="email"
                                                        class="form-control border-success" id="email"
                                                        placeholder=" " value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="jk">Jenis Kelamin</label>
                                                <select name="jk"
                                                    class="form-select border-success @error('jk') is-invalid @enderror"
                                                    data-trigger name="jk" id="jk">
                                                    <option>Pilih Jenis Kelamin</option>
                                                    <option value="Laki - Laki"
                                                        {{ old('jk') == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki
                                                    </option>
                                                    <option value="Wanita"
                                                        {{ old('jk') == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                                </select>
                                                @error('jk')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="nohp">Nomor Handphone:</label>
                                                    <input type="number" name="nohp"
                                                        class="form-control border-success @error('nohp') is-invalid @enderror"
                                                        id="nohp" value="{{ old('nohp') }}">
                                                    @error('nohp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="tempat">Tempat Lahir:</label>
                                                    <input type="text" name="tempat"
                                                        class="form-control border-success @error('tempat') is-invalid @enderror"
                                                        id="tempat" value="{{ old('tempat') }}">
                                                    @error('tempat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="tgllahir">Tanggal Lahir:</label>
                                                    <input type="date" name="tgllahir"
                                                        class="form-control border-success @error('tgllahir') is-invalid @enderror"
                                                        id="tgllahir" value="{{ old('tgllahir') }}">
                                                    @error('tgllahir')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="gambar" class="form-label custom-file-input">Upload
                                                        Foto</label>
                                                    <input
                                                        class="form-control border-success @error('gambar') is-invalid @enderror"
                                                        name="gambar" type="file" id="gambar">
                                                    @error('gambar')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="alamat">Alamat:</label>
                                                    <textarea name="alamat" class="form-control border-success @error('alamat') is-invalid @enderror" id="alamat">{{ old('alamat') }}</textarea>
                                                    @error('alamat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="choices-single-default">Fakultas</label>
                                                    <select name="fakultas"
                                                        class="form-select border-success @error('fakultas') is-invalid @enderror"
                                                        data-trigger id="fakultas">
                                                        <option value="">Pilih</option>
                                                        @foreach ($fakultasx as $fakultasItem)
                                                            <option value="{{ $fakultasItem->nama }}">
                                                                {{ $fakultasItem->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('fakultas')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="choices-single-default">Jurusan</label>
                                                    <select name="jurusan"
                                                        class="form-select border-success @error('jurusan') is-invalid @enderror"
                                                        data-trigger id="jurusan">
                                                        <option value="">Pilih Jurusan</option>
                                                        {{-- Loop untuk menampilkan opsi prodi --}}
                                                        @foreach ($prodix as $prodiItem)
                                                            <option value="{{ $prodiItem->nama }}">
                                                                {{ $prodiItem->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jurusan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="gambarbayar"
                                                        class="form-label custom-file-input">Upload Bukti
                                                        Pembayaran</label>
                                                    <input
                                                        class="form-control border-success @error('gambarbayar') is-invalid @enderror"
                                                        name="gambarbayar" type="file" id="gambarbayar">
                                                    @error('gambarbayar')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="password"
                                                        class="form-control border-success" id="password"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="confirm-password" class="form-label">Confirm
                                                        Password</label>
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control border-success" id="confirm-password"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="baju">Ukuran Baju</label>
                                                <select name="sizebaju"
                                                    class="form-select border-success @error('sizebaju') is-invalid @enderror"
                                                    data-trigger name="sizebaju" id="sizebaju">
                                                    <option>Pilih Ukuran Baju</option>
                                                    <option value="s">S</option>
                                                    <option value="m">M</option>
                                                    <option value="l">L</option>
                                                    <option value="xl">XL</option>
                                                    <option value="xxl">XXL</option>
                                                    <option value="xxxl">XXXL</option>
                                                </select>
                                                @error('sizebaju')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="form-label" for="kelas">Kelas</label>
                                                <select name="kelas"
                                                    class="form-select border-success @error('kelas') is-invalid @enderror"
                                                    data-trigger name="sizekelas" id="sizekelas">
                                                    <option>Pilih kelas</option>
                                                    <option value="a">A</option>
                                                    <option value="b">B</option>
                                                </select>
                                                @error('kelas')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <div class="form-check mb-5">
                                                <input name="customCheck1" type="checkbox" class="form-check-input"
                                                    id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">I agree with the
                                                    terms of use</label>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success">Daftar</button>
                                        </div>
                                    </form>

                                    <p class="mt-3 text-center">
                                        Silakan Login Jika Sudah Memiliki Akun <a href="{{ route('login') }}"
                                            class="text-underline">Sign In</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-bg sign-bg-right">
                        {{-- <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8"/>
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8"/>
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8"/>
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8"/>
                     </g>
                  </svg> --}}
                    </div>
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
    {{-- <script src="/admin/js/setting-init.js"></script> --}}
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
    {{-- <script src="/admin/js/sidebar1fc6.js?v=4.0.0" defer></script> --}}
</body>

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/auth/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2023 10:37:52 GMT -->

</html>
