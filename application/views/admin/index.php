<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>SiTani - Dashboard</title>
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
            <a href="index-2.html" class="header-title">Sistem Informasi Pertanian</a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fa-solid fa-bars"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="<?php echo base_url('tugas'); ?>"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Tugas</span></a>
            <a href="<?php echo base_url('scan'); ?>"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span class="mt-1">Scan</span></a>
            <a href="<?php echo base_url('admin'); ?>" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="<?php echo base_url('pohon'); ?>"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Pohon</span></a>
            <a href="<?php echo base_url('admin/profile'); ?>"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>

        <div class="page-content">
            <div class="page-title page-title-large">
                <h2 data-username="<?php echo $user['nama']; ?>" class="greeting-text"></h2>
                <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="<?php echo base_url('assets/images/profile/') . $user['img']; ?>"></a>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/'); ?>images/pictures/20s.jpg"></div>
            </div>

            <!-- Homepage Slider-->
            <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
                <div class="card rounded-l shadow-l" data-card-height="320">
                    <div class="card-bottom">
                        <h1 class="font-24 font-700">Meet Azures</h1>
                        <p class="boxed-text-xl">
                            Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                        </p>
                    </div>
                    <div class="card-overlay bg-gradient-fade"></div>
                    <div class="card-bg owl-lazy" data-src="<?php echo base_url('assets/'); ?>images/pictures/17m.jpg"></div>
                </div>
                <div class="card rounded-l shadow-l" data-card-height="320">
                    <div class="card-bottom">
                        <h1 class="font-24 font-700">Beyond Powerful</h1>
                        <p class="boxed-text-xl">
                            Azures is a Mobile Web App Kit, fully featured, supporting PWA and Native Dark Mode!
                        </p>
                    </div>
                    <div class="card-overlay bg-gradient-fade"></div>
                    <div class="card-bg owl-lazy" data-src="<?php echo base_url('assets/'); ?>images/pictures/8m.jpg"></div>
                </div>
                <div class="card rounded-l shadow-l" data-card-height="320">
                    <div class="card-bottom">
                        <h1 class="font-24 font-700">A-Level Quality</h1>
                        <p class="boxed-text-xl">
                            We build custom, premium products, that are easy to use and provide all features for you!
                        </p>
                    </div>
                    <div class="card-overlay bg-gradient-fade"></div>
                    <div class="card-bg owl-lazy" data-src="<?php echo base_url('assets/'); ?>images/pictures/14m.jpg"></div>
                </div>
            </div>

            <div class="card mt-4 preload-img" data-src="<?php echo base_url('assets/'); ?>images/pictures/20s.jpg">
                <div class="card-body">
                    <div class="card card-style ml-0 mr-0 mt-4 bg-white">
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
                </div>
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
            </div>

            <div class="card card-style">
                <div class="content text-center">
                    <h2>Daftar Pohon</h2>
                </div>
                <div class="divider divider-small mb-3 bg-highlight"></div>

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

            <div class="card card-style mt-4 shadow-l" data-card-height="150">
                <div class="card-center pl-3 pr-3">
                    <h4 class="color-white">Did you know?</h4>
                    <p class="color-white mb-0 opacity-60">
                        We're the top selling Mobile Author on Envato. We value the quality of products and efficiency of our support!
                    </p>
                </div>
                <div class="card-overlay bg-highlight opacity-90"></div>
            </div>

            <!-- footer and footer card-->
            <div class="footer" data-menu-load="menu-footer.html"></div>
        </div>
        <!-- end of page content-->


        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="510" data-menu-effect="menu-over">
            <div class="modal-body" id="detailPhn"></div>
        </div>

        <!-- Install Prompt for Android -->
        <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="350" data-menu-effect="menu-parallax">
            <div class="boxed-text-l mt-4">
                <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
                <h4 class="mt-3">Azures on your Home Screen</h4>
                <p>
                    Install Azures on your home screen, and access it just like a regular app. It really is that simple!
                </p>
                <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to Home Screen</a><br>
                <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe later</a>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Install instructions for iOS -->
        <div id="menu-install-pwa-ios" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="320" data-menu-effect="menu-parallax">
            <div class="boxed-text-xl mt-4">
                <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
                <h4 class="mt-3">Azures on your Home Screen</h4>
                <p class="mb-0 pb-3">
                    Install Azures on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
                </p>
                <div class="clear"></div>
                <a href="#" class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Maybe later</a><br>
                <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
            </div>
        </div>
    </div>

    <script>
        function detail(id) {
            // alert(id);
            $.ajax({
                url: "<?php echo base_url('pohon/detailpohon') ?>",
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

</html>-