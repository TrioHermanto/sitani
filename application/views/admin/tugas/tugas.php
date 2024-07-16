<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Tugas</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>style.css">
    <link href="../../../fonts.googleapis.com/cssa8da.css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>fontawesome/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/app/'); ?>icon-192x192.png">
</head>

<body class="theme-light" data-highlight="green1">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <!-- header and footer bar go here-->
        <div class="header header-fixed header-auto-show header-logo-app">
            <a href="<?php echo base_url('pengelola'); ?>" class="header-title" style="font-size: 18px;">SiTani</a>
            <a href="<?php echo base_url('pengelola'); ?>" data-back-button class="header-icon header-icon-1"><i class="fas font-18 fa-arrow-left mt-3"></i></a>
            <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas font-18 fa-bell mt-3 ml-5"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="<?php echo base_url('tugas'); ?>" class="active-nav"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Tugas</span></a>
            <a href="<?php echo base_url('scan'); ?>"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span class="mt-1">Scan</span></a>
            <a href="<?php echo base_url('pengelola'); ?>"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="<?php echo base_url('pohon'); ?>"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Pohon</span></a>
            <a href="<?php echo base_url('admin/profile'); ?>"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>

        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="<?php echo base_url('pengelola') ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Tugas</h2>
                <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="<?php echo base_url('assets/images/profile/') . $user['img']; ?>"></a>
            </div>
            <div class="card header-card shape-rounded" data-card-height="150">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style">
                <div class="content">
                    Halaman tugas ini digunakan untuk memantau jadwal dan list pekerjaan petani
                    sesuai dengan tanggal dan watu yang sudah ditentukan.
                </div>
            </div>

            <div class="card card-style">
                <div data-card-height="120" data-closed-message="Jam Kerja Selesai!" data-closed-message-under="selamat beristirahat!" data-opened-message="Waktunya Kerja!" data-opened-message-under="bekerjalah dengan penuh semangat!" class="business-hours caption shadow-xl">
                    <div class="card-top mt-4 ml-3 pl-1">
                        <h1 class="color-white mt-1 font-20 font-700"><!-- Automatic Text set by data opened/closed message--></h1>
                        <p class="color-white opacity-90 mt-n2 mb-0"><!-- Automatic Text set by data opened/closed message under--></p>
                    </div>
                    <div class="caption-overlay show-business-opened bg-green1-dark"></div>
                    <div class="caption-overlay show-business-closed bg-red2-dark"></div>
                </div>
                <div class="content">

                    <!-- To set open and Close Hours Open custom.js and search for "SET OPENING HOURS BELOW" -->
                    <!-- Only setting the code below will not make the system work automatically-->

                    <div class="working-hours day-monday">
                        <p>Monday</p>
                        <p>09:00 AM</p>
                        <p>05:00 PM</p>
                    </div>
                    <div class="working-hours day-tuesday">
                        <p>Tuesday</p>
                        <p>09:00 AM</p>
                        <p>05:00 PM</p>
                    </div>
                    <div class="working-hours day-wednesday">
                        <p>Wednesday</p>
                        <p>09:00 AM</p>
                        <p>05:00 PM</p>
                    </div>
                    <div class="working-hours day-thursday">
                        <p>Thursday</p>
                        <p>09:00 AM</p>
                        <p>05:00 PM</p>
                    </div>
                    <div class="working-hours day-friday">
                        <p>Friday</p>
                        <p>09:00 AM</p>
                        <p>05:00 PM</p>
                    </div>
                    <div class="working-hours day-saturday">
                        <p>Saturday</p>
                        <p>09:00 AM</p>
                        <p>01:00 PM</p>
                    </div>
                    <div class="working-hours day-sunday">
                        <p>Sunday</p>
                        <p class="opacity-00">-</p>
                        <p>Closed</p>
                    </div>
                </div>
            </div>
            <div class="card card-style">
                <div class="content mb-0">
                    <h3 class="text-center bottom-0">Social Networks</h3>
                    <p class="text-center mb-4 mt-n2 font-11 color-highlight">Social Networks by Popularity in 2017</p>
                    <div class="chart-container mb-4" style="width:100%; height:350px;">
                        <canvas class="chart" id="pie-chart">
                    </div>
                </div>
            </div>

            <div class="card card-style">
                <div class="content">
                    <h3>Tugas Harian</h3>
                    <p>
                        Tugas harian ini dilakukan di hari itu juga!.
                    </p>
                    <div class="d-flex">
                        <div class="pt-1">
                            <h5 data-activate="toggle-id-2" class="font-500 font-13">Pemupukan</h5>
                        </div>
                        <div class="ml-auto mr-4 pr-2">
                            <div class="custom-control ios-switch ios-switch-icon">
                                <input type="checkbox" class="ios-input" id="toggle-id-2">
                                <label class="custom-control-label" for="toggle-id-2"></label>
                                <i class="fa fa-check font-11 color-white"></i>
                                <i class="fa fa-times font-11 color-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="divider mt-3 mb-3"></div>

                    <div class="d-flex">
                        <div class="pt-1">
                            <h5 data-activate="toggle-id-2" class="font-500 font-13">Penyiraman</h5>
                        </div>
                        <div class="ml-auto mr-4 pr-2">
                            <div class="custom-control ios-switch ios-switch-icon">
                                <input type="checkbox" class="ios-input" id="toggle-id-2">
                                <label class="custom-control-label" for="toggle-id-2"></label>
                                <i class="fa fa-check font-11 color-white"></i>
                                <i class="fa fa-times font-11 color-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="divider mt-3 mb-3"></div>

                    <div class="d-flex">
                        <div class="pt-1">
                            <h5 data-activate="toggle-id-2" class="font-500 font-13">Penyemprotan</h5>
                        </div>
                        <div class="ml-auto mr-4 pr-2">
                            <div class="custom-control ios-switch ios-switch-icon">
                                <input type="checkbox" class="ios-input" id="toggle-id-2">
                                <label class="custom-control-label" for="toggle-id-2"></label>
                                <i class="fa fa-check font-11 color-white"></i>
                                <i class="fa fa-times font-11 color-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="divider mt-3 mb-3"></div>

                </div>
            </div>

            <div class="divider divider-margins"></div>

            <!-- footer and footer card-->
            <div class="footer" data-menu-load="menu-footer.html"></div>
        </div>
        <!-- end of page content-->

        <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over">
        </div>

        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over">
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-features" data-menu-effect="menu-over">
        </div>

    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>custom.js"></script>

</body>

</html>