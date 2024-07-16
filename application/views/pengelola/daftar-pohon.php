<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Daftar Pohon</title>
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
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="<?php echo base_url('tugas'); ?>"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Tugas</span></a>
            <a href="<?php echo base_url('pengelola/scan'); ?>"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span class="mt-1">Scan</span></a>
            <a href="<?php echo base_url('pengelola'); ?>"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="<?php echo base_url('pengelola/daftarPohon'); ?>" class="active-nav"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Pohon</span></a>
            <a href="<?php echo base_url('pengelola/profile'); ?>"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>

        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="<?php echo base_url('pengelola'); ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Daftar Pohon</h2>
                <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="<?php echo base_url('assets/images/profile/') . $user['img']; ?>"></a>
            </div>
            <div class="card header-card shape-rounded" data-card-height="150">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/'); ?>images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style">
                <div class="content">
                    Halaman ini berisikan daftar semua pohon yang ada di lahan pertanian ini.
                </div>
            </div>

            <div class="row text-center mb-0">
                <a href="pages-list.html" class="col-6 pr-2">
                    <div class="card card-style mr-0 mb-3">
                        <h1 class="center-text pt-4">
                            <i data-feather="file" data-feather-line="1" data-feather-size="50" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light">
                            </i>
                        </h1>
                        <h4 class="color-theme font-600">General</h4>
                        <p class="mt-n2 font-11 color-highlight">
                            Multi Purpose Pages
                        </p>
                        <p class="font-10 opacity-30 mb-1">Tap to View</p>
                    </div>
                </a>
                <a href="pages-appstyled-list.html" class="col-6 pl-2">
                    <div class="card card-style ml-0 mb-3">
                        <h1 class="center-text pt-4">
                            <i data-feather="smartphone" data-feather-line="1" data-feather-size="50" data-feather-color="green1-dark" data-feather-bg="green1-fade-light">
                            </i>
                        </h1>
                        <h4 class="color-theme font-600">App Styled</h4>
                        <p class="mt-n2 font-11 color-highlight">
                            Designed like Apps
                        </p>
                        <p class="font-10 opacity-30 mb-1">Tap to View</p>
                    </div>
                </a>
                <a href="pages-starters.html" class="col-6 pr-2">
                    <div class="card card-style mr-0 mb-3">
                        <h1 class="center-text pt-4">
                            <i data-feather="box" data-feather-line="1" data-feather-size="50" data-feather-color="magenta1-dark" data-feather-bg="magenta1-fade-light">
                            </i>
                        </h1>
                        <h4 class="color-theme font-600">Starters</h4>
                        <p class="mt-n2 font-11 color-highlight">
                            Walkthrough & Splash
                        </p>
                        <p class="font-10 opacity-30 mb-1">Tap to View</p>
                    </div>
                </a>
                <a href="component-action-sheets.html" class="col-6 pl-2">
                    <div class="card card-style ml-0 mb-3">
                        <h1 class="center-text pt-4">
                            <i data-feather="zap" data-feather-line="1" data-feather-size="50" data-feather-color="yellow1-dark" data-feather-bg="yellow1-fade-light">
                            </i>
                        </h1>
                        <h4 class="color-theme font-600">Actions</h4>
                        <p class="mt-n2 font-11 color-highlight">
                            Modal Menus & Actions
                        </p>
                        <p class="font-10 opacity-30 mb-1">Tap to View</p>
                    </div>
                </a>
            </div>

            <div class="card card-style">
                <div class="content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>QR CODE</th>
                                <th>Pohon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->result() as $row) : ?>
                                <tr>
                                    <td><img style="width: 80px;" src="<?php echo base_url() . 'assets/images/pohon/barcode/' . $row->barcode; ?>"></td>
                                    <td style="vertical-align: middle;"><?php echo $row->name; ?></td>
                                    <td>
                                        <button data-menu="menu-highlights" class="btn btn-sm btn-success" style="text-align: center; margin-top:40%;" onclick="detail(<?php echo $row->id ?>)"><i class="fa-solid fa-eye"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- footer and footer card-->
            <div class="footer" data-menu-load="menu-footer.html"></div>
        </div>
        <!-- end of page content-->

        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="510" data-menu-effect="menu-over">
            <div class="modal-body" id="detailPhn"></div>
        </div>

    </div>

    <script>
        function detail(id) {
            // alert(id);
            $.ajax({
                url: "<?php echo base_url('pengelola/detailpohon') ?>",
                type: 'POST',
                data: {
                    id: id
                },
                success: function(getreturn) {
                    $('#detailPhn').html(getreturn);
                }
            })
        }
    </script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>custom.js"></script>
</body>

</html>