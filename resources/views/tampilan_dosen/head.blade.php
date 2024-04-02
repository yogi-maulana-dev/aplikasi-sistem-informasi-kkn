<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title data-leftJoin="SKKN ini adalah salah satu project yang dibuat oleh" data-setting="app_name">
        Sistem Kuliah Kerja Nyata Universitas Muhammadiyah Lampung
        </title>
        <meta name="description" content="Ini adalah website sistem kuliah kerja untuk universitas." />
        <meta name="keywords"
            content="projectyai, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard," />
        <meta name="author" content="Iqonic Design" />
        <meta name="DC.title" content="Sistem Kuliah Kerja Nyata Universitas Muhammadiyah" />

        <!-- Google Font Api KEY-->
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k" />
        <!-- Config Options -->

        <script>
            // Mendapatkan elemen title
            var titleElement = document.querySelector('title');

            // Mengekstrak nilai dari atribut data-leftJoin dan data-setting
            var leftJoinValue = titleElement.getAttribute('data-leftJoin');
            var settingValue = titleElement.getAttribute('data-setting');

            // Menampilkan nilai-nilai yang diekstrak
            console.log('data-leftJoin:', leftJoinValue);
            console.log('data-setting:', settingValue);
        </script>

        <style>
            @keyframes marquee {
                0% {
                    transform: translateX(100%);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

            .gerak {
             
                animation: marquee 10s linear infinite;
            }

              @media only screen and (max-width: 600px) {

            .gerak{
                font-size: 13px;
                animation: none;
            }
        }
        </style>

        <!-- Favicon -->
        <link rel="shortcut icon" href="#" />
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="/admin/css/core/libs.min.css" />
        <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="/admin/css/hope-ui.min1fc6.css?v=4.0.0" />
        <link rel="stylesheet" href="/admin/css/pro.min1fc6.css?v=4.0.0" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="/admin/css/custom.min1fc6.css?v=4.0.0" />
        <!-- Dark Css -->
        <link rel="stylesheet" href="/admin/css/dark.min1fc6.css?v=4.0.0" />
        <!-- Customizer Css -->
        <link rel="stylesheet" href="/admin/css/customizer.min1fc6.css?v=4.0.0" />
        <!-- RTL Css -->
        <link rel="stylesheet" href="/admin/css/rtl.min1fc6.css?v=4.0.0" />
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
            rel="stylesheet" />

        <link href="https://cdn.tailwindcss.com/3.4.0" rel=" stylesheet">
        <!--Replace with your tailwind.css once created-->


        <!--Regular Datatables CSS-->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

</head>
<body>
    <!-- Tambahkan elemen div untuk judul berjalan -->