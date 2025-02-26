<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from demo.istanakomputer.com/HTML%20MOBILE/AZURES%20MOBILE/component-action-sheets.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 06:03:16 GMT -->

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

<body class="theme-light" data-highlight="blue2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <!-- header and footer bar go here-->
        <div class="header header-fixed header-auto-show header-logo-app">
            <a href="#" data-back-button class="header-title header-subtitle">Back to Components</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
            <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="<?php echo base_url('tugas'); ?>"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Tugas</span></a>
            <a href="<?php echo base_url('pengelola/scan'); ?>"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span class="mt-1">Scan</span></a>
            <a href="<?php echo base_url('pengelola'); ?>" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="<?php echo base_url('pengelola/daftarPohon'); ?>"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Pohon</span></a>
            <a href="<?php echo base_url('pengelola/profile'); ?>"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>

        <div class="page-content">
            <div class="page-title page-title-small">
                <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Action Sheets</h2>
                <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
            </div>
            <div class="card header-card shape-rounded" data-card-height="150">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>


            <div class="card card-style">
                <div class="card-body">
                    <p class="mb-1">
                        Actions Sheets are elements that appear from the bottom of the page. These can be triggerd by any element, buttons, text, images, and can be used as menus as well.
                    </p>
                </div>
            </div>


            <div class="card card-style">
                <div class="content mt-0 mb-0">
                    <div class="list-group list-custom-small list-icon-0">
                        <a href="#" data-menu="menu-tips-1">
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <span>Tour/Guide</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-share-list">
                            <i class="fa fa-share-alt color-blue2-dark"></i>
                            <span>Share List</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-share-thumbs">
                            <i class="fa fa-th color-green1-dark"></i>
                            <span>Share Thumbs</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-call">
                            <i class="fa fa-phone color-phone"></i>
                            <span>Call Button</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-video">
                            <i class="fab fa-youtube color-youtube"></i>
                            <span>Video Embeds</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-maps">
                            <i class="fa fa-map-marker color-blue2-dark"></i>
                            <span>Google Maps</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-success-1">
                            <i class="fa fa-check color-green1-dark"></i>
                            <span>Success Box</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-success-2">
                            <i class="fa fa-check-circle color-green1-dark"></i>
                            <span>Success Box</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-warning-1">
                            <i class="fa fa-times color-red2-dark"></i>
                            <span>Warning Box</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-warning-2">
                            <i class="fa fa-times-circle color-red2-dark"></i>
                            <span>Warning Box</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-confirm">
                            <i class="fa fa-info color-blue2-dark"></i>
                            <span>Confirmation</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-forgot">
                            <i class="fa fa-question-circle color-magenta2-dark"></i>
                            <span>Password Reset</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-signin">
                            <i class="fa fa-sign-in-alt color-green1-dark"></i>
                            <span>Login</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-signup">
                            <i class="fa fa-sign-out-alt color-green1-dark"></i>
                            <span>Register</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-language">
                            <i class="fa fa-globe color-blue2-dark"></i>
                            <span>Language</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-menu="menu-age" class="border-0">
                            <i class="fa fa-user color-red1-dark"></i>
                            <span>Age Check</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card card-style">
                <div class="content mb-3">
                    <h4>Trigger by Tap or Programatically</h4>
                    <p class="mb-3">
                        You've asked us to add the feature to simply call a function and trigger a sidebar. We've added this
                        feature to all menus in our product. Action Sheets, Modals, Sidebars can all be triggered and dismissed programatically.
                    </p>
                    <code>$('#yourSheetID').showMenu();</code><br>
                    <code>$('#yourSheetID').hideMenu();</code>
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

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-features" data-menu-effect="menu-over">
        </div>

        <!---------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------->
        <!-- Place all Action Elements and Menus Outside of the page-content class. Starting from here-->
        <!---------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------->


        <!------------->
        <!------------->
        <!--Menu Tour-->
        <!------------->
        <!------------->
        <!-- Tips Menu 1-->
        <div id="menu-tips-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="350" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="smartphone" data-feather-line="1" data-feather-size="60" data-feather-color="gray1-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">PWA Ready</h1>
                <p class="text-center mt-n3 mb-3 font-11 color-white">Just add it to your home screen and Enjoy!</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    Azures is a Mobile Webite, but it is also a PWA! You can add it to your home screen and navigate it
                    like you would navigate an application.
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-2" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">1/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 2-->
        <div id="menu-tips-2" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="350" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="moon" data-feather-line="1" data-feather-size="60" data-feather-color="gray1-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Auto Dark Mode</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">Just add detect-theme to your body class</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    With modern operating systems, we can detect if your device is in dark mode and set the theme automatically. Just use the detect-theme class.
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-3" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">2/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 3-->
        <div id="menu-tips-3" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="350" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="archive" data-feather-line="1" data-feather-size="60" data-feather-color="gray1-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Hybrid App Compatible</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">Turn Azures in a Native Mobile Application</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    Using Cordova or PhoneGap you can compile Azures into a Native Mobile Application! It's blazing fast and super easy to compile!
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-4" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">3/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 4-->
        <div id="menu-tips-4" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="350" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="zap" data-feather-line="1" data-feather-size="60" data-feather-color="gray1-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Really, Really Fast</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">Optimized to Perfection for your Needs</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    All scripts and style only are loaded only once! After that, there's no more need to worry about redownloading. It's optimized to perfection!
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-5" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">4/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 5-->
        <div id="menu-tips-5" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="350" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="smile" data-feather-line="1" data-feather-size="60" data-feather-color="gray1-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Colors to Match your Style!</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">We've added tons of colors just for you!</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    Azures is powered by a gorgeous color scheme that you can edit with ease and add your own custom feel to it! It's super simple! </p>
            </div>
            <a href="#" class="close-menu btn btn-m btn-margins rounded-sm btn-full shadow-l bg-highlight text-uppercase font-900">AWesome!</a>
        </div>

        <!------------------->
        <!------------------->
        <!--Menu Share List-->
        <!------------------->
        <!------------------->
        <div id="menu-share-list" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="310" data-menu-effect="menu-over">
            <div class="list-group list-custom-small pl-1 pr-3">
                <a href="#" class="shareToFacebook">
                    <i class="font-18 fab fa-facebook color-facebook"></i>
                    <span class="font-13">Facebook</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="shareToTwitter">
                    <i class="font-18 fab fa-twitter-square color-twitter"></i>
                    <span class="font-13">Twitter</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="shareToLinkedIn">
                    <i class="font-18 fab fa-linkedin color-linkedin"></i>
                    <span class="font-13">LinkedIn</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="shareToGooglePlus">
                    <i class="font-18 fab fa-google-plus-square color-google"></i>
                    <span class="font-13">Google +</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="shareToWhatsApp">
                    <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                    <span class="font-13">WhatsApp</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="shareToMail border-0">
                    <i class="font-18 fa fa-envelope-square color-mail"></i>
                    <span class="font-13">Email</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>

        <!--------------------->
        <!--------------------->
        <!--Menu Share Thumbs-->
        <!--------------------->
        <!--------------------->
        <div id="menu-share-thumbs" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="420" data-menu-effect="menu-over">
            <h1 class="text-center font-700 mt-3 pt-2">Share the Love</h1>
            <p class="boxed-text-xl under-heading">
                Share our page with the world, increase <br>
                your page exposure with the world.
            </p>
            <div class="divider divider-margins"></div>

            <div class="row text-center mr-4 ml-4 mb-0">
                <div class="col-4 mb-n2">
                    <a href="#" class="icon icon-l bg-facebook rounded-s shadow-l"><i class="fab fa-facebook-f font-22"></i><br></a>
                    <p class="font-11 opacity-70">Facebook</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="icon icon-l bg-twitter rounded-s shadow-l"><i class="fab fa-twitter font-22"></i><br></a>
                    <p class="font-11 opacity-70">Twitter</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="icon icon-l bg-linkedin rounded-s shadow-l"><i class="fab fa-linkedin-in font-22"></i><br></a>
                    <p class="font-11 opacity-70">LinkedIn</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="icon icon-l bg-mail rounded-s shadow-l"><i class="fa fa-envelope font-22"></i><br></a>
                    <p class="font-11 opacity-70">Email</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="icon icon-l bg-whatsapp rounded-s shadow-l"><i class="fab fa-whatsapp font-22"></i><br></a>
                    <p class="font-11 opacity-70">WhatsApp</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="close-menu icon icon-l bg-red2-dark rounded-s shadow-l"><i class="fa fa-arrow-down font-22"></i><br></a>
                    <p class="font-11 opacity-70">Close</p>
                </div>
            </div>

            <div class="divider divider-margins mt-n1 mb-3"></div>
            <p class="text-center font-10 mb-0">Copyright <span class="copyright-year"></span> - Enabled. All rights reserved.</p>
        </div>

        <!------------->
        <!------------->
        <!--Menu Call-->
        <!------------->
        <!------------->
        <div id="menu-call" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="220" data-menu-effect="menu-over">
            <h1 class="text-center font-700 mt-3 pt-1">Call us Today</h1>
            <p class="boxed-text-xl">
                We're always here to help. Give us a Call Today. Just tap the button and get in
                touch with us.
            </p>
            <a href="tel:+1 234 567 890" class="btn btn-center-m btn-s shadow-l rounded-s text-uppercase font-900 bg-green1-dark">Call Now</a>
            <p class="color-theme text-center font-10 opacity-30 mt-2 mb-0 pb-0">Emergency Number Available 24/7. Call Now!</p>
        </div>

        <!-------------->
        <!-------------->
        <!--Menu Video-->
        <!-------------->
        <!-------------->
        <div id="menu-video" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="390" data-menu-effect="menu-over">
            <div class='responsive-iframe max-iframe'><iframe src='https://www.youtube.com/embed/c9MnSeYYtYY' frameborder='0' allowfullscreen></iframe></div>
            <h3 class="text-center font-700 mt-3">Video Embeds</h3>
            <p class="boxed-text-l">
                Embed any video from any media service. Just copy the iframe and we'll handle the rest.
            </p>
            <a href="#" class="close-menu btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-green1-dark">Awesome</a>
        </div>

        <!------------->
        <!------------->
        <!--Menu Maps-->
        <!------------->
        <!------------->
        <div id="menu-maps" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="390" data-menu-effect="menu-over">
            <div class='responsive-iframe max-iframe'><iframe src='https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed' frameborder='0' allowfullscreen></iframe></div>
            <h3 class="text-center font-700 mt-3">Maps Embeds</h3>
            <p class="boxed-text-l">
                Embed maps with great ease. Just copy the iframe and we'll handle the rest.
            </p>
            <a href="#" class="close-menu btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-green1-dark">Awesome</a>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Success-->
        <!---------------->
        <!---------------->
        <div id="menu-success-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="305" data-menu-effect="menu-over">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-check-circle color-green1-dark"></i></h1>
            <h1 class="text-center mt-3 text-uppercase font-700">All's Good</h1>
            <p class="boxed-text-l">
                You can continue with your previous actions.<br> Easy to attach these to success calls.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-green1-light">Great</a>
        </div>

        <div id="menu-success-2" class="menu menu-box-bottom menu-box-detached bg-green1-dark rounded-m" data-menu-height="305" data-menu-effect="menu-over">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-check-circle color-white shadow-xl rounded-circle"></i></h1>
            <h1 class="text-center mt-3 text-uppercase font-700 color-white">All's Good</h1>
            <p class="boxed-text-l color-white opacity-70">
                You can continue with your previous actions.<br> Easy to attach these to success calls.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-white">Great</a>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Warning-->
        <!---------------->
        <!---------------->
        <div id="menu-warning-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="305" data-menu-effect="menu-over">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-times color-red2-dark"></i></h1>
            <h1 class="text-center mt-3 text-uppercase font-700">Wooops!</h1>
            <p class="boxed-text-l">
                You can continue with your previous actions.<br> Easy to attach these to success calls.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-red1-light">Go Back</a>
        </div>

        <div id="menu-warning-2" class="menu menu-box-bottom menu-box-detached bg-red2-dark rounded-m" data-menu-height="305" data-menu-effect="menu-over">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-times-circle color-white shadow-xl rounded-circle"></i></h1>
            <h1 class="text-center mt-3 text-uppercase color-white font-700">Wooops!</h1>
            <p class="boxed-text-l color-white opacity-70">
                You can continue with your previous actions.<br> Easy to attach these to success calls.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-white">Go Back</a>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Confirm-->
        <!---------------->
        <!---------------->
        <div id="menu-confirm" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="200" data-menu-effect="menu-over">
            <h2 class="text-center font-700 mt-3 pt-1">Are you sure?</h2>
            <p class="boxed-text-l">
                You can even use these boxes for confirmations.<br>Any element can trigger them.
            </p>
            <div class="row mr-3 ml-3">
                <div class="col-6">
                    <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-green1-dark">Accept</a>
                </div>
                <div class="col-6">
                    <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-red1-dark">REJECT</a>
                </div>
            </div>
        </div>

        <!--------------->
        <!--------------->
        <!--Menu Forgot-->
        <!--------------->
        <!--------------->
        <div id="menu-forgot" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="230" data-menu-effect="menu-over">
            <div class="mr-3 ml-3 mt-3 pt-1">
                <h2 class="font-700 mb-0">Forgot Password?</h2>
                <p class="font-11 mb-3">
                    Let's get you back into your account. Enter your email to reset.
                </p>
                <div class="input-style has-icon input-style-1 input-required mb-4">
                    <i class="input-icon fa fa-at"></i>
                    <span>Email</span>
                    <em>(required)</em>
                    <input type="email" placeholder="Email">
                </div>
                <a href="#" class="btn btn-full btn-m shadow-l rounded-s bg-highlight text-uppercase font-900 top-20">SEND RECOVERY EMAIL</a>
            </div>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Sign In-->
        <!---------------->
        <!---------------->
        <div id="menu-signin" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="320" data-menu-effect="menu-over">
            <div class="content mb-0">
                <h1 class="font-700 mb-0">Login</h1>
                <p class="font-11  mt-n1 mb-0">
                    Hello, stranger! Please enter your credentials below.
                </p>

                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-user font-11"></i>
                    <span>Username</span>
                    <em>(required)</em>
                    <input type="name" placeholder="Username">
                </div>
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-lock font-11"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input type="password" placeholder="Password">
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="#" data-menu="menu-forgot" class="font-10">Forgot Password?</a>
                    </div>
                    <div class="col-6">
                        <a data-menu="menu-signup" href="#" class="float-right font-10">Create Account</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <a href="#" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-green1-dark mt-4">LOGIN</a>
            </div>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Sign Up-->
        <!---------------->
        <!---------------->
        <div id="menu-signup" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
            <div class="content mb-0">
                <h1 class="font-700 mb-0">Register</h1>
                <p class="font-11  mt-n1 mb-0">
                    Don't have an account? Register below.
                </p>

                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-user font-11"></i>
                    <span>Username</span>
                    <em>(required)</em>
                    <input type="name" placeholder="Username">
                </div>
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-at"></i>
                    <span>Email</span>
                    <em>(required)</em>
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-lock font-11"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input type="password" placeholder="Choose a Password">
                </div>
                <p class="text-center pb-0 mb-n1 pt-1">
                    <a href="#" data-menu="menu-signin" class="text-center font-11 color-gray2-dark">Already Registered? Sign In Here.</a>
                </p>
                <a href="#" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue2-dark mt-4">Register</a>
            </div>
        </div>

        <!----------------->
        <!----------------->
        <!--Menu Language-->
        <!----------------->
        <!----------------->
        <div id="menu-language" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="340" data-menu-effect="menu-over">
            <div class="mr-3 ml-3 mt-3">
                <h1 class="font-700 mb-0">Select your language</h1>
                <p class="font-11 mt-n2 mb-3">
                    You can direct to multiple languages of your page.
                </p>
                <div class="list-group list-custom-small">
                    <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/United-States.png"><span>English</span><i class="fa fa-angle-right"></i></a>
                    <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/India.png"><span>Indian</span><i class="fa fa-angle-right"></i></a>
                    <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/Germany.png"><span>German</span><i class="fa fa-angle-right"></i></a>
                    <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/Italy.png"><span>Italian</span><i class="fa fa-angle-right"></i></a>
                    <a href="#" class="border-0"><img class="mr-3 mt-n1" width="20" src="images/flags/Spain.png"><span>Spanish</span><i class="fa fa-angle-right"></i></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>


        <div id="menu-age" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="250" data-menu-effect="menu-over">
            <div class="mr-3 ml-3 mt-3 pt-1">
                <h3 class="Verify font-700 mb-0">Verify your age</h3>
                <p class="font-11 mb-3">
                    This menu can be automatically activated on page load. The date format must be 31/12/1986. The system will do the rest.
                </p>

                <div class="row mb-0">
                    <div class="col-4">
                        <div class="input-style input-style-1 input-required">
                            <span>Day - 31</span>
                            <input id="date-birth-day" type="number" placeholder="Day - 31">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-style input-style-1 input-required">
                            <span>Month - 12</span>
                            <input id="date-birth-month" type="number" placeholder="Month - 12">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-style input-style-1 input-required">
                            <span>Year - 1986</span>
                            <input id="date-birth-year" type="number" placeholder="Year - 1986">
                        </div>
                    </div>
                </div>
                <a href="#" class="check-age btn btn-full btn-m shadow-l rounded-s bg-blue2-dark mt-3 text-uppercase font-900">Verify Age</a>
            </div>
        </div>

        <div id="menu-age-okay" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="315" data-menu-effect="menu-over">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-check-circle color-green1-dark"></i></h1>
            <h1 class="text-center text-uppercase font-900">Age Verified</h1>
            <p class="boxed-text-l mt-4">
                Thank you for confirming your age.<br> You can now continue browsing our page.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-green1-light">Great</a>
        </div>

        <div id="menu-age-fail" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="315" data-menu-effect="menu-over">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-times-circle color-red2-dark"></i></h1>
            <h1 class="text-center text-uppercase font-900">Age verification Failed</h1>
            <p class="boxed-text-l mt-4">
                Sorry, you are not old enough to view this content.<br> Tturn back now and visit safer pages.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-red1-light">Go Back</a>
        </div>



    </div>


    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>custom.js"></script>
</body>

</html>