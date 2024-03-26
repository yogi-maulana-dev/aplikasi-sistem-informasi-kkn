
<!doctype html>
<html lang="en" dir="ltr">
  
<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/errors/maintenance.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2023 10:38:08 GMT -->
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
      <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" >
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="/admin/css/core/libs.min.css" >
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="/admin/css/hope-ui.min1fc6.css?v=4.0.0" >
      <link rel="stylesheet" href="/admin/css/pro.min1fc6.css?v=4.0.0" >
      <!-- Custom Css -->
      <link rel="stylesheet" href="/admin/css/custom.min1fc6.css?v=4.0.0" >
      <!-- Dark Css -->
      <link rel="stylesheet" href="/admin/css/dark.min1fc6.css?v=4.0.0" >
      <!-- Customizer Css -->
      <link rel="stylesheet" href="/admin/css/customizer.min1fc6.css?v=4.0.0" >
      <!-- RTL Css -->
      <link rel="stylesheet" href="/admin/css/rtl.min1fc6.css?v=4.0.0" >
      <!-- Google Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
              <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/loader.webp" alt="loader" class="light-loader img-fluid w-25" width="200" height="200">
          </div>
      </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
<div class="container-fluid p-0">
  <div class="iq-maintenance text-center">
    <img src="/admin/images/error/01.png" class="img-fluid mb-4" alt="maintenance" loading="lazy" />
    <div class="maintenance-bottom text-white pb-0">

      <div class="bg-primary" style="background: transparent; height: 320px;">
        <div class="gradient-bottom">
          <div class="bottom-text general-zindex">
            @if(session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif
            {{-- <h1 class="mb-2 text-white">Hang on! We are under maintenance</h1>
            <p>It will not take a long time till we get the error fiked. We wii live again in</p> --}}
            <ul class="countdown d-flex justify-content-center align-items-center list-inline"
              data-date="Maret 18 2024 00:20:22">
              <li>
                <span data-days>0</span>Days
              </li>
              <li>
                <span data-hours>0</span>Hours
              </li>
              <li>
                <span data-minutes>0</span>Minutes
              </li>
              <li>
                <span data-seconds>0</span>Seconds
              </li>
            </ul>

        
            <div class="w-50 mx-auto mt-2">
                <form action="{{ route('logout') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn bg-success text-white">
                    <i class="fa fa-power-off m-r-5 m-l-5"></i>  Keluar
                    </button>
                </form>
              {{-- <div class="input-group search-input search-input">
                <input type="text" class="form-control" placeholder="Enter your mail">
                <a href="#" class="btn bg-white text-primary">Notify Me</a>
              </div> --}}
            </div>
          </div>
          <div class="c xl-circle">
            <div class="c lg-circle">
              <div class="c md-circle">
                <div class="c sm-circle">
                  <div class="c xs-circle"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sign-bg">
    <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.05">
        <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857"
          transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
        <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)"
          fill="#3B8AFF" />
        <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857"
          transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
        <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)"
          fill="#3B8AFF" />
      </g>
    </svg>
  </div>
</div>
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
    <script src="/admin/js/sidebar1fc6.js?v=4.0.0" defer></script><script src="/admin/js/plugins/countdown.js"></script>
  </body>

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/errors/maintenance.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2023 10:38:09 GMT -->
</html>
