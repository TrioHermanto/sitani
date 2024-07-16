<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Tambah User</title>
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
            <a href="<?php echo base_url('admin/profile'); ?>" class="header-title" style="font-size: 18px;">SiTani</a>
            <a href="<?php echo base_url('admin/profile'); ?>" data-back-button class="header-icon header-icon-1"><i class="fas font-18 fa-arrow-left mt-3"></i></a>
            <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas font-18 fa-bell mt-3 ml-5"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="<?php echo base_url('tugas'); ?>"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Tugas</span></a>
            <a href="<?php echo base_url('admin/scan'); ?>"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span class="mt-1">Scan</span></a>
            <a href="<?php echo base_url('admin'); ?>"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="<?php echo base_url('admin/daftarPohon'); ?>"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Pohon</span></a>
            <a href="<?php echo base_url('admin/profile'); ?>" class="active-nav"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>

        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="<?php echo base_url('admin/profile'); ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Tambah User</h2>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/') ?>images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style">
                <div class="content mb-0">
                    <form class="user" method="post" action="<?php echo base_url('admin/tambahUser'); ?>">
                        <p>
                            Menambahkan user baru untuk melibatkan pengelolaan lahan yang lebih baik lagi.
                        </p>
                        <div style="margin-left: 50px;"><?php echo $this->session->flashdata('message'); ?></div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-envelope"></i>
                            <span class="color-highlight">Email</span>
                            <em>(required)</em>
                            <input class="form-control form-control-user" type="text" id="email" name="email" placeholder="">
                        </div>

                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-user"></i>
                            <span class="color-highlight">Nama</span>
                            <em>(required)</em>
                            <input class="form-control form-control-user" type="text" id="name" name="name" placeholder="">
                        </div>

                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-briefcase"></i>
                            <span class="color-highlight">Jabatan admin atau pengelola</span>
                            <em>(required)</em>
                            <input class="form-control form-control-user" type="text" id="role" name="role" placeholder="">
                        </div>

                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-lock"></i>
                            <span class="color-highlight">Password</span>
                            <em>(required)</em>
                            <input class="form-control form-control-user" type="password" id="password1" name="password1" placeholder="">
                        </div>

                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-lock"></i>
                            <span class="color-highlight">Repeat Password</span>
                            <em>(required)</em>
                            <input class="form-control form-control-user" type="password" id="password2" name="password2" placeholder="">
                        </div>

                        <button type="submit" class="btn alert-success mb-3" style="margin-left: 30%;">Tambah User</button>
                    </form>
                </div>
            </div>

            <!-- footer and footer card-->
            <div class="footer" data-menu-load="menu-footer.html"></div>
        </div>
        <!-- end of page content-->


        <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over">
        </div>

        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over">
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-settings" data-menu-effect="menu-over">
        </div>

    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>custom.js"></script>

</body>

</html>