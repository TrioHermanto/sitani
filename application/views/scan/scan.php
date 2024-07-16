<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Edit Qr Pohon</title>
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
        <div id="footer-bar" class="footer-bar-5">
            <a href="<?php echo base_url('tugas'); ?>"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Tugas</span></a>
            <a href="<?php echo base_url('scan'); ?>" class="active-nav"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span class="mt-1">Scan</span></a>
            <a href="<?php echo base_url('admin'); ?>"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="<?php echo base_url('pohon'); ?>"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Pohon</span></a>
            <a href="<?php echo base_url('admin/profile'); ?>"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>

        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="<?php echo base_url('admin'); ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Scan</h2>
                <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="<?php echo base_url('assets/images/profile/') . $user['img']; ?>"></a>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/') ?>images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style">
                <div class="content mb-0">
                    <p>
                        Scan Qr-Code pohon disini!.
                    </p>
                    <div id="qr-reader" style="width:95%;"></div>
                    <div id="qr-reader-results"></div>
                </div>
            </div>

        </div>
        <!-- end of page content-->

    </div>

    <script src="<?php echo base_url('assets/js/'); ?>html5-qrcode.min.js"></script>
    <script>
        function docReady(fn) {
            // see if DOM is already available
            if (document.readyState === "complete" ||
                document.readyState === "interactive") {
                // call on next available tick
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function() {
            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;

            function onScanSuccess(decodedText, decodedResult) {
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.
                    console.log(`Scan result ${decodedText}`, decodedResult);
                    // alert("Hasil scaning : " + decodedText);

                    location.href = decodedText;
                }
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 10,
                    qrbox: 250
                });
            html5QrcodeScanner.render(onScanSuccess);
        });
    </script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>custom.js"></script>

</body>

</html>