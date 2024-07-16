<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Detail Qr-Pohon</title>
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
            <a href="#" class="header-title" style="font-size: 18px;">SiTani</a>
        </div>

        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="<?php echo base_url('admin'); ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Detai Qr-Pohon</h2>
                <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="#"></a>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/') ?>images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style">
                <section class="container-qr">
                    <div class="kotakqr">
                        <?php foreach ($data as $d) : ?>
                            <div class="imgqr">
                                <img src="<?php echo base_url('assets/images/pohon/img/') . $d->img ?>" class="img-thumbnail" style="width: 150px; height: 150px; border-radius:50%;">
                            </div>
                            <div class="tableqr">
                                <table class="table table-bordered">

                                    <tr>
                                        <th>Nama Pohon</th>
                                        <td><?php echo $d->name ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis</th>
                                        <td><?php echo $d->jenis ?></td>
                                    </tr>
                                    <tr>
                                        <th>Usia</th>
                                        <td><?php echo $d->usia ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Penanaman</th>
                                        <td><?php echo $d->tgl_penanaman ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Penyemprotan</th>
                                        <td><?php echo $d->tgl_penyemprotan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pemupukan</th>
                                        <td><?php echo $d->tgl_pemupukan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pememanenan</th>
                                        <td><?php echo $d->tgl_pemanenan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Qr Code</th>
                                        <td style="height: 100px;"><img src="<?php echo base_url('assets/images/pohon/barcode/') . $d->barcode; ?>" class="img-thumbnail" style="width: 100px; height: 100px;"></td>
                                    </tr>
                                </table>
                                <div class="btnqr">
                                    <a href="<?php echo base_url('pohon/editdetailqr/') . $d->kode ?>" style="text-decoration: none; color:white;">Edit Data</a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </section>
            </div>

        </div>
        <!-- end of page content-->

    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>custom.js"></script>

</body>

</html>