<?php
include "koneksi.php";
mysqli_query($koneksi,"DELETE FROM data_forecasting;")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">

    

    <!-- Title Page-->
    <title>Double Moving Average Kelompok 1</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">        
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <h2>Halaman Website Forecasting Kelompok 1</h2>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                        <li class="active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Home / Upload Data </a>
                        </li>
                        <li>
                            <a href="upload.php">
                                <i class="fas fa-chart-bar"></i>Data yang akan di prediksi</a>
                        </li>
                        <li>
                            <a href="#" >
                                <i class="fas fa-table"></i>Hasil Forecasting & Grafik</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2>ForeYN.com</h2>
                </a>
            </div>      
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Home / Upload Data</a>
                        </li>
                        <li>
                            <a href="upload.php">
                                <i class="fas fa-chart-bar"></i>Data yang akan di prediksi</a>
                        </li>
                        <li>
                            <a href="#" >
                                <i class="fas fa-table"></i>Hasil Forecasting & Grafik</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h2 class="title-3 ">Home</h2>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                        <br/>
                                            <h2 class="text-sm-center mt-2 mb-1">Forecasting Double Moving Average - Saham Bursa Efek Indonesia</h2>
                                        </div>
                                        <hr>
                                        <div class="location text-sm-center">
                                            <p>Double Moving Average (DMA) adalah salah satu metode analisis teknis yang digunakan dalam perdagangan saham, forex, dan instrumen keuangan lainnya. Metode ini melibatkan penggunaan dua rata-rata bergerak (moving average) untuk membantu trader mengidentifikasi tren pasar dan membuat keputusan perdagangan.</p>
                                        </div>
                                        <hr>
                                        <div class="location text-sm-center">
                                            <p>Silahkan upload data penutupan saham yang akan di prediksi berformat excel/csv</p>
                                            <form action="upload_aksi.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="card-body card-block">
                                                    <div class="row form-group">
                                                        <input name="dataforecasting" type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="form-control" required/>
                                                    </div>
                                                    <div class="text-center">
                                                        <input name="upload" type="submit" value="Upload Data" class="au-btn au-btn-icon au-btn--blue2 au-btn--small"/>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>                
                                    </div>

                                </div>    

                                
                            </div>
                        </div>
                        <!-- Tambahkan bagian baru setelah MAIN CONTENT -->
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- Konten sebelumnya ... -->

            <!-- Bagian untuk tampilan developer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <h2 class="text-sm-center mt-2 mb-1">Project Development</h2>
                            </div>
                            <hr>
                            <div class="location text-sm-center">
                                <p>Yohan Permana - 210441100052</p>
                                <p>Nizam M Azmi - 2104411001041</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Fungsi untuk menampilkan animasi
    function showDeveloperAnimation() {
        const developerSection = document.querySelector('.developer-section');

        // Konfigurasi animasi menggunakan anime.js
        anime({
            targets: developerSection,
            translateY: [50, 0],
            opacity: [0, 1],
            easing: 'easeInOutQuad',
            duration: 800,
            delay: 200,
        });
    }

    // Panggil fungsi animasi saat dokumen selesai dimuat
    document.addEventListener('DOMContentLoaded', showDeveloperAnimation);
</script>

<!-- END MAIN CONTENT-->

                    </div>
                    
                </div>
            </div>

            
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

