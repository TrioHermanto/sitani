<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Edit Data Pohon</title>
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
                <h2><a href="#" data-back-button></a>Edit Data Pohon</h2>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/') ?>images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style">
                <div class="content mb-0">
                    <?php echo form_open_multipart('admin/updatepohon'); ?>
                    <p>
                        Edit dan Update data pohon untuk mengetahui pertumbuhan pohon
                    </p>
                    <div style="margin-left: 50px;"><?php echo $this->session->flashdata('message'); ?></div>
                    <?php foreach ($data as $d) : ?>

                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3" style="display:flex; justify-content:center; margin-bottom:10px;">
                                    <img src="<?php echo base_url('assets/images/pohon/img/') . $d->img ?>" class="img-thumbnail" style="width: 100px; height: 100px;">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file input-style input-style-2">
                                        <input class="form-control" type="file" id="img" name="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-key"></i>
                            <input class="form-control form-control-user" type="hidden" id="id" name="id" placeholder="" value="<?php echo $d->id ?>" readonly>
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-key"></i>
                            <em style="color: black; font-weight:bold">(readonly)</em>
                            <input class="form-control form-control-user" type="text" id="name" name="name" placeholder="" value="<?php echo $d->kode ?>" readonly>
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-edit"></i>
                            <span class="color-highlight">Nama Pohon</span>
                            <em style="color: black; font-weight:bold">(required)</em>
                            <input class="form-control form-control-user" type="text" id="name" name="name" placeholder="" value="<?php echo $d->name ?>">
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-edit"></i>
                            <span class="color-highlight">Jenis Pohon</span>
                            <em style="color: black; font-weight:bold">(required)</em>
                            <input class="form-control form-control-user" type="text" id="jenis" name="jenis" placeholder="" value="<?php echo $d->jenis ?>">
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa-solid fa-hourglass-end"></i>
                            <span class="color-highlight">Usia Pohon</span>
                            <em style="color: black; font-weight:bold">(required)</em>
                            <input class="form-control form-control-user" type="text" id="usia" name="usia" placeholder="" value="<?php echo $d->usia ?>">
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-calendar-day"></i>
                            <span class="color-highlight">Tanggal Penanaman</span>
                            <em style="color: black; font-weight:bold">(required)</em>
                            <input class="form-control form-control-user" type="text" id="pemanenan" name="pemanenan" placeholder="" value="<?php echo $d->tgl_penanaman ?>">
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-calendar-day"></i>
                            <span class="color-highlight">Tanggal Penyemprotan</span>
                            <em style="color: black; font-weight:bold">(required)</em>
                            <input class="form-control form-control-user" type="text" id="penyemprotan" name="penyemprotan" placeholder="" value="<?php echo $d->tgl_penyemprotan ?>">
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-calendar-day"></i>
                            <span class="color-highlight">Tanggal Pemupukan</span>
                            <em style="color: black; font-weight:bold">(required)</em>
                            <input class="form-control form-control-user" type="text" id="pemupukan" name="pemupukan" placeholder="" value="<?php echo $d->tgl_pemupukan ?>">
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-calendar-day"></i>
                            <span class="color-highlight">Tanggal Pemanenan</span>
                            <em style="color: black; font-weight:bold">(required)</em>
                            <input class="form-control form-control-user" type="text" id="pemanenan" name="pemanenan" placeholder="" value="<?php echo $d->tgl_pemanenan ?>">
                        </div>
                    <?php endforeach ?>
                    <button type="submit" class="btn alert-success mb-3" style="margin-left: 35%;">Edit Data</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- end of page content-->

    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>custom.js"></script>

</body>

</html>