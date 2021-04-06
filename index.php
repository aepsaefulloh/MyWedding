<?php
require_once 'config.php';
require_once ROOT_PATH.'/lib/dao_utility.php';
require_once ROOT_PATH.'/lib/mysqlDao.php';
require_once 'status.php';



$status=isset($_REQUEST['status'])?$_REQUEST['status']:'';
$act['ACT'] = isset($_REQUEST['ACT'])?$_REQUEST['ACT']:'';

?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Undangan Pernikahan Rafika &amp; Aep">
    <meta property="og:title" content="Undangan Pernikahan Rafika &amp; Aep" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo ROOT_URL?>/favicon.ico">

    <meta property="og:url" content="<?php echo ROOT_URL?>" />
    <meta property="og:description" content="Undangan Pernikahan Rafika &amp; Aep">

    <meta property="og:image" content="<?php echo ROOT_URL?>/assets/img/cover.jpg">

    <!-- Page Title -->
    <title>Undangan Pernikahan Rafika &amp; Aep</title>

    <!-- Icon fonts -->
    <link href="<?php echo ROOT_URL?>/assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROOT_URL?>/assets/css/flaticon_nav.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo ROOT_URL?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/style.css?<?php echo rand()?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    html {
        scroll-behavior: smooth
    }

    .radio-box {
        display: block
    }

    .radio-box>div {
        border: 2px solid #e9ecef;
        cursor: pointer
    }

    .radio-box input:checked~div {
        border-color: #48ABF7
    }

    .form-group,
    .form-check {
        padding: 2px !important
    }

    .google-maps {
        position: relative;
        padding-bottom: 75%;
        overflow: hidden
    }

    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important
    }

    .badge-2 {
        display: inline-block;
        padding: .35rem .5rem;
        font-size: 80%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .375rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .badge-circle-2 {
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0 !important;
        width: 1.25rem;
        height: 1.25rem;
        vertical-align: middle;
        font-size: .75rem;
        font-weight: 600
    }

    .list-unstyled {
        list-style: none;
        margin-left: auto;
        margin-right: auto;
        display: table
    }

    ul {
        text-align: left
    }

    .special-invitation {
        color: #fff
    }

    .mobile-bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 10;
        will-change: transform;
        transform: translateZ(0);
        display: flex;
        height: 75px;
        box-shadow: rgba(108, 114, 124, 0.16) 0 -2px 4px 0;
        background-color: #fffbf4
    }

    .mobile-bottom-nav__item {
        flex-grow: 1;
        text-align: center;
        font-size: 13px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: rgb(66, 66, 80);
        flex-basis: 33.33333333%;
    }

    mobile-bottom-nav__item:before {
        font-size: 18px;
    }

    a {
        color: #ca9d53
    }

    a:hover {
        color: #ca9d53
    }

    .mobile-bottom-nav__item-content {
        display: flex;
        flex-direction: column
    }

    .font-modal {
        font-family: "Josefin Sans", sans-serif
    }

    .wave {
        overflow: hidden;
        position: relative;
        display: block;
        height: auto;
        bottom: 30px;
    }

    .alert-light {
        background-color: #F8F8F8;
        border-color: #CA9D53;
    }

    .alert-heading {
        font-family: "Josefin Sans", sans-serif;
        color: #CA9D53 !important;
    }

    .heading-font-couple {
        font-family: "Montez", Sans-serif;
    }

    .heading-font {
        font-family: "Pacifico", sans-serif;
        color: #CA9D53;
        font-size: 3.4375rem;
    }

    .heading-font-type {
        font-family: "Charmonman", sans-serif;
        color: #CA9D53;
        font-size: 2rem;
    }

    .heading-font-location {
        font-family: "Pacifico", sans-serif;
        color: #FFFFFF;
        font-size: 3.4375rem;
    }

    .couple-name {
        font-family: "Tangerine", Sans-serif;
        color: #CA9D53;
    }

    iframe {
        border: 1px solid;
        border-color: #CA9D53;
        border-radius: .25rem;
    }
    </style>

    <style>
    .shadow-effect {
        background: #fff;
        padding: 10px;
        border-radius: 4px;
        text-align: center;
        border: 1px solid #ECECEC;
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.10), 0 15px 12px rgba(0, 0, 0, 0.02);
    }

    #testimonials-list .shadow-effect p {
        font-family: inherit;
        font-size: 17px;
        line-height: 1.5;
        margin: 17px 0 17px 0;
        font-weight: 400;
    }

    .testimonial-name {
        margin: -17px auto 0;
        display: table;
        width: auto;
        background: #CA9D53;
        padding: 9px 35px;
        border-radius: 12px;
        text-align: center;
        color: #fff;
        box-shadow: 0 9px 18px rgba(0, 0, 0, 0.12), 0 5px 7px rgba(0, 0, 0, 0.05);
    }

    #testimonials-list .item {
        text-align: center;
        padding: 20px;
        margin-bottom: 30px;
        opacity: .2;
        -webkit-transform: scale3d(0.8, 0.8, 1);
        transform: scale3d(0.8, 0.8, 1);
        transition: all 0.3s ease-in-out;
    }

    #testimonials-list .owl-item.active.center .item {
        opacity: 1;
        -webkit-transform: scale3d(1.0, 1.0, 1);
        transform: scale3d(1.0, 1.0, 1);
    }

    #testimonials-list .owl-carousel .owl-item img {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        max-width: 90px;
        border-radius: 50%;
        margin: 0 auto 17px;
    }

    #testimonials-list.owl-carousel .owl-dots .owl-dot.active span,
    #testimonials-list.owl-carousel .owl-dots .owl-dot:hover span {
        background: #CA9D53;
        -webkit-transform: translate3d(0px, -50%, 0px) scale(0.7);
        transform: translate3d(0px, -50%, 0px) scale(0.7);
    }

    #testimonials-list.owl-carousel .owl-dots {
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    #testimonials-list.owl-carousel .owl-dots .owl-dot {
        display: inline-block;
    }

    #testimonials-list.owl-carousel .owl-dots .owl-dot span {
        background: #CA9D53;
        display: inline-block;
        height: 20px;
        margin: 0 2px 5px;
        -webkit-transform: translate3d(0px, -50%, 0px) scale(0.3);
        transform: translate3d(0px, -50%, 0px) scale(0.3);
        -webkit-transform-origin: 50% 50% 0;
        transform-origin: 50% 50% 0;
        transition: all 250ms ease-out 0s;
        width: 20px;
    }
    </style>


</head>

<body id="home">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span class="icon"><i class="fi flaticon-birds-in-love"></i></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start of hero -->
        <section class="hero hero-slider-wrapper hero-style-1">
            <div class="hero-slider">
                <div class="slide">
                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                        data-src="<?php echo ROOT_URL?>/assets/img/cover.jpg" class="slider-bg">
                </div>
            </div>
            <div class="hero-circle wow fadeIn" data-wow-duration="0.2s" id="hero-circle">
                <div class="circle-inner">
                    <div class="text">
                        <h4>
                            Undangan Pernikahan
                        </h4>
                        <h2 class="wow fadeIn heading-font-couple" data-wow-delay="0.2s">Rafika &amp; Aep</h2>
                        <p class="wow fadeIn" data-wow-delay="0.2s">06 Juni 2021</p>
                        <p class="wow fadeIn" data-wow-delay="0.2s">10:00
                            - Selesai</p>
                    </div>
                </div>
            </div>
            <div class="wave">
                <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"
                    style="fill: #F9F9F9; width: 100%; height: 45px; transform: rotate(180deg);">
                    <path
                        d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
                        opacity=".25" />
                    <path
                        d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
                        opacity=".5" />
                    <path
                        d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
                </svg>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- start couple-section-s2 -->
        <section class="couple-section section-padding flower" id="couple">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2 class="heading-font-type">Mempelai</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="couple">
                            <div class="groom">
                                <div class="img-holder">
                                    <a href="<?php echo ROOT_URL?>/assets/img/no-image.png">
                                        <img src="<?php echo ROOT_URL?>/assets/img/no-image.png">
                                    </a>
                                </div>
                                <div class="mt-5">
                                    <h2 class="couple-name">
                                        <strong>
                                            Rafika Devilia
                                        </strong>
                                    </h2>
                                    <p>Putri dari Bapak Sukarno &
                                        Ibu Komsatun</p>
                                </div>
                            </div>
                            <div class="details">
                            </div>
                            <div class="bride">
                                <div class="img-holder">
                                    <a href="<?php echo ROOT_URL?>/assets/img/no-image.png">
                                        <img src="<?php echo ROOT_URL?>/assets/img/no-image.png">
                                    </a>
                                </div>
                                <div class="mt-5">
                                    <h2 class="couple-name">
                                        <strong>
                                            Aep Saefulloh
                                        </strong>
                                    </h2>
                                    <p>Putra dari Bapak Harun &
                                        Ibu Entin Suprihatin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end couple-section-s2 -->

        <!-- start count-down-section -->
        <section class="count-down-section section-padding flower">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2 class="heading-font-type">Menghitung hari</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="count-down-clock">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end count-down-section -->

        <!-- start getting-there-section -->
        <section class="getting-there-section section-padding flower" id="location">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2 class="heading-font-type">Lokasi</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-12 col-md-12">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card-body">
                                        <h4 class="heading-font-type pb-2"></h4>
                                        <img src="<?php echo ROOT_URL?>/assets/img/date.png" alt="Resepsi Date"
                                            height="40" width="40">
                                        <p class="font-location mt-2">
                                        <h5>
                                            <strong>
                                                06 Juni 2021
                                            </strong>
                                        </h5>
                                        10.00 - Selesai
                                        </p>
                                        <img src="<?php echo ROOT_URL?>/assets/img/location.png" alt="Resepsi Date"
                                            height="40" width="40">
                                        <p class="font-location mt-2">
                                        <h5>
                                            <strong>
                                                Lokasi
                                            </strong>
                                        </h5>
                                        Jl. H. Alih Blok Perintis No.13, RT.6/RW.7, Bintaro,
                                        Kec. Pesanggrahan, Kota
                                        Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12330
                                        </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <br>
                                    <div class="alert alert-light" role="alert">
                                        <h5 class="alert-heading text-center"> Informasi Protokol Kesehatan </h5>
                                        <ul class="list-unstyled list-bullet">
                                            <li class="py-2">
                                                <span class="badge-2 badge-circle-2 badge-soft-success mr-2"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                                Menggunakan masker selama acara
                                            </li>
                                            <li class="py-2">
                                                <span class="badge-2 badge-circle-2 badge-soft-success mr-2"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                                Selalu bersihkan tangan
                                            </li>
                                            <li class="py-2">
                                                <span class="badge-2 badge-circle-2 badge-soft-success mr-2"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                                Menjaga jarak
                                            </li>
                                            <li class="py-2">
                                                <span class="badge-2 badge-circle-2 badge-soft-success mr-2"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                                Dianjurkan untuk tidak membawa bayi selama acara
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="google-maps" id="google-maps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1362.243161619007!2d106.76745628765086!3d-6.275968539991688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f04ba225d58b%3A0x752204d711876f80!2sJl.%20H.%20Alih%20Blok%20Perintis%20No.13%2C%20RT.6%2FRW.7%2C%20Bintaro%2C%20Kec.%20Pesanggrahan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012330!5e0!3m2!1sen!2sid!4v1617708149813!5m2!1sen!2sid"
                                            width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <a href="https://goo.gl/maps/od7UE35cCmUVCH4n7" target="_blank"
                                            class="theme-btn mr-2 mb-2">Arahkan ke Lokasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end getting-there-section -->

        <section class="rsvp-section section-padding" id="donation">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2 class="heading-font-type">Kirim Amplop Undangan</h2>
                        </div>
                        <div class="text-center">
                            <a href="#" class="theme-btn" data-toggle="modal" data-target="#amplopModal">Kirim Amplop
                                Undangan
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>

        <section class="rsvp-section section-padding" id="rsvp">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <h2 class="heading-font-type">Buku Tamu</h2>
                        </div>
                     
                        <div class="text-center">
                            <button type="button" class="theme-btn" data-toggle="modal" data-target="#wishModal">
                                Buka Buku Tamu
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="wishComment">
                                    <?php
                                    $varCom['LIMIT'] = 30;
                                    $list1 = getRecord('tbl_guest', $varCom);
                                    foreach($list1['RESULT'] as $list1){
                                    ?>
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="mt-0"> <?php echo $list1['FULLNAME']?></h5>
                                            <p> <?php echo $list1['WISH']?></p>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
            </div>
        </section>

        <!-- <section
            style="display: block; background: #ca9d53; color: white; visibility: visible!important; font-size: 12px; height: 40px; line-height: 20px; padding: 10px 0;"
            class="text-center">
            Wedding Invitation by
            Inveet.id

            <div style="display: none;">
                <a href="https://inveet.id">
                    undangan pernikahan online
                </a>
            </div>
        </section> -->

    </div>
    <!-- end of page-wrapper -->
    <nav class="mobile-bottom-nav">
        <a class="mobile-bottom-nav__item" href="#couple">
            <div class="mobile-bottom-nav__item-content">
                <i class="flaticon-ring mr-3"></i>
            </div>
        </a>
        <a class="mobile-bottom-nav__item" href="#location">
            <div class="mobile-bottom-nav__item-content">
                <i class="flaticon-placeholder mr-3"></i>
            </div>
        </a>
        <a class="mobile-bottom-nav__item" href="#rsvp">
            <div class="mobile-bottom-nav__item-content">
                <i class="flaticon-chat mr-3"></i>
            </div>
        </a>
    </nav>

    <div class="modal fade" id="amplopModal" tabindex="-1" role="dialog" aria-labelledby="amplopModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content col-12">
                <div class="modal-header">
                    <h4 class="modal-title font-modal">Kirim Amplop</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form action="https://inveet.id/donation/submitPayment" method="POST">
                            <input type="hidden" name="_token" value="as3Y8WXJ7uWRk5dO5ZYkC3zUImrFN2A2hKkaPdli">
                            <div class="card-body">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="sender_name">Nama Pengirim</label>
                                        <input type="text" class="form-control" name="sender_name"
                                            placeholder="Nama Pengirim..." id="sender_name">
                                        <div class="form-check">
                                            <input type="checkbox" class="" id="setAnonymous" name="is_anonymous">
                                            <label class="" for="setAnonymous">Sembunyikan nama</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="sender_email">Email Pengirim <strong
                                                class="text-danger">*</strong></label>
                                        <input type="email" class="form-control" name="sender_email"
                                            placeholder="Email Pengirim..." required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="description">Pesan Singkat</label>
                                        <textarea class="form-control" name="description"
                                            placeholder="Tulis Pesan Singkat..."></textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="amount">Nominal amplop <strong
                                                class="text-danger">*</strong></label>
                                        <input type="number" class="form-control" name="amount" id="amount"
                                            placeholder="Nominal amplop..." required>
                                        <small><strong class="text-danger">*</strong> Nominal amplop akan ditambahkan
                                            <strong>Rp.
                                                5.000</strong> untuk biaya transfer</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col">
                                    <input type="hidden" name="wedding_id" value="OTk">
                                    <h5 class="font-modal">Metode Pengiriman</h5>
                                    <label>
                                        E-Wallet
                                    </label>
                                    <div class="form-group mb-1">
                                        <label class="radio-box">
                                            <input type="radio" class="custom-control-input" name="payment_method"
                                                value="OVO">

                                            <div class="row no-gutters align-items-center p-2">
                                                <div class="col-auto text-center" style="width: 45px;">
                                                    <img src="https://inveet.id/inveet/img/payment/payment-ovo.png"
                                                        srcset="https://inveet.id/inveet/img/payment/payment-ovo.png 2x"
                                                        alt="" class="img-fluid"
                                                        style="max-width: 45px; max-height: 45px;">
                                                </div>
                                                <div class="col ml-3">
                                                    <strong>OVO</strong>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="form-group mb-1">
                                        <label class="radio-box">
                                            <input type="radio" class="custom-control-input" name="payment_method"
                                                value="DANA">

                                            <div class="row no-gutters align-items-center p-2">
                                                <div class="col-auto text-center" style="width: 45px;">
                                                    <img src="https://inveet.id/inveet/img/payment/payment-dana.png"
                                                        srcset="https://inveet.id/inveet/img/payment/payment-dana.png 2x"
                                                        alt="" class="img-fluid"
                                                        style="max-width: 45px; max-height: 45px;">
                                                </div>
                                                <div class="col ml-3">
                                                    <strong>DANA</strong>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <label>
                                        Virtual Account
                                    </label>
                                    <div class="form-group mb-1">
                                        <label class="radio-box">
                                            <input type="radio" class="custom-control-input" name="payment_method"
                                                value="BRI">

                                            <div class="row no-gutters align-items-center p-2">
                                                <div class="col-auto text-center" style="width: 45px;">
                                                    <img src="https://inveet.id/inveet/img/payment/payment-bri.png"
                                                        srcset="https://inveet.id/inveet/img/payment/payment-bri.png 2x"
                                                        alt="" class="img-fluid"
                                                        style="max-width: 45px; max-height: 45px;">
                                                </div>
                                                <div class="col ml-3">
                                                    <strong>Bank BRI</strong>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="form-group mb-1">
                                        <label class="radio-box">
                                            <input type="radio" class="custom-control-input" name="payment_method"
                                                value="MANDIRI">

                                            <div class="row no-gutters align-items-center p-2">
                                                <div class="col-auto text-center" style="width: 45px;">
                                                    <img src="https://inveet.id/inveet/img/payment/payment-mandiri.png"
                                                        srcset="https://inveet.id/inveet/img/payment/payment-mandiri.png 2x"
                                                        alt="" class="img-fluid"
                                                        style="max-width: 45px; max-height: 45px;">
                                                </div>
                                                <div class="col ml-3">
                                                    <strong>Bank Mandiri</strong>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="form-group mb-1">
                                        <label class="radio-box">
                                            <input type="radio" class="custom-control-input" name="payment_method"
                                                value="BNI">

                                            <div class="row no-gutters align-items-center p-2">
                                                <div class="col-auto text-center" style="width: 45px;">
                                                    <img src="https://inveet.id/inveet/img/payment/payment-bni.png"
                                                        srcset="https://inveet.id/inveet/img/payment/payment-bni.png 2x"
                                                        alt="" class="img-fluid"
                                                        style="max-width: 45px; max-height: 45px;">
                                                </div>
                                                <div class="col ml-3">
                                                    <strong>Bank BNI</strong>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="form-group mb-1">
                                        <label class="radio-box">
                                            <input type="radio" class="custom-control-input" name="payment_method"
                                                value="PERMATA">

                                            <div class="row no-gutters align-items-center p-2">
                                                <div class="col-auto text-center" style="width: 45px;">
                                                    <img src="https://inveet.id/inveet/img/payment/payment-permata.png"
                                                        srcset="https://inveet.id/inveet/img/payment/payment-permata.png 2x"
                                                        alt="" class="img-fluid"
                                                        style="max-width: 45px; max-height: 45px;">
                                                </div>
                                                <div class="col ml-3">
                                                    <strong>Bank Permata</strong>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#" class="btn btn-block btn-success">Kirim Sekarang</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </form>

                        <div class="card-footer text-muted text-center">
                            <small>
                                Transaksi Dilindungi Enkripsi SSL
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wishModal" tabindex="-1" role="dialog" aria-labelledby="wishModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div>
                        <h2 class="font-poppins text-center">
                            Buku Tamu
                        </h2>
                    </div>
                    <div class="mt-modal">

                        <form action="<?php echo ROOT_URL?>/process.php" method="POST" id="guestBook">
                            <input type='hidden' name='ACT' value='ADD'>
                            <div class="form-group">
                                <label>Nama*</label>
                                <input type="text" class="form-control" placeholder="Nama..." name="FULLNAME"
                                    id="FULLNAME" required>
                            </div>


                            <div class="form-group">
                                <label>Konfirmasi Kehadiran*</label>
                                <select name="STATUS" class="form-control" id="STATUS" required>
                                    <option value="hadir">Hadir</option>
                                    <option value="tidak hadir">Tidak Hadir</option>
                                    <option value="belum pasti">Belum Pasti</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ucapan dan Doa*</label>
                                <textarea class="form-control" name="WISH" id="WISH" placeholder="Ucapan dan Doa..."
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Lainnya</label>
                                <input type="text" class="form-control"
                                    placeholder="Contoh : Teman SMK / Sosial Media ....." name="OTHER" id="OTHER">
                            </div>
                            <div class="mt-5  text-center">
                                <button type="submit" class="theme-btn">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- All JavaScript files
================================================== -->
    <script src="<?php echo ROOT_URL?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo ROOT_URL?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo ROOT_URL?>/assets/js/jquery-plugin-collection.js"></script>
    <script src="<?php echo ROOT_URL?>/assets/js/particles.min.js"></script>

    <script src="<?php echo ROOT_URL?>/assets/js/bootstrap-notify.min.js"></script>




    <script>
    var content = {};
    </script>

    <script>
    function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i = 0; i < imgDefer.length; i++) {
            if (imgDefer[i].getAttribute('data-src')) {
                imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
            }
        }
    }

    $(document).ready(function() {
        init();


        $('#setAnonymous').change(function() {
            if (this.checked) {
                $('#sender_name').attr('disabled', 'disabled')
            } else {
                $('#sender_name').removeAttr('disabled')
            }
        });

        $('#testimonials-list').owlCarousel({
            center: true,
            items: 3,
            autoplay: true,
            dots: true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
            autoHeight: true,
            responsive: {
                0: {
                    dotsEach: 3,
                    items: 1
                },
                768: {
                    dotsEach: 3,
                    items: 2
                },
                1170: {
                    dotsEach: 3,
                    items: 3
                }
            }
        });

        ! function(s) {
            "use strict";

            var o, r, l = new WOW({
                boxClass: "wow",
                animateClass: "animated",
                offset: 0,
                mobile: !0,
                live: !0
            });
            if (s(".fancybox").length && s(".fancybox").fancybox({
                    openEffect: "elastic",
                    closeEffect: "elastic",
                    wrapCSS: "project-fancybox-title-style"
                }), s(".popup-gallery").length && s(".popup-gallery").magnificPopup({
                    delegate: "a",
                    type: "image",
                    gallery: {
                        enabled: !0
                    },
                    zoom: {
                        enabled: !0,
                        duration: 300,
                        easing: "ease-in-out",
                        opener: function(e) {
                            return e.is("img") ? e : e.find("img")
                        }
                    }
                }), s(".popup-image").length && s(".popup-image").magnificPopup({
                    type: "image",
                    zoom: {
                        enabled: !0,
                        duration: 300,
                        easing: "ease-in-out",
                        opener: function(e) {
                            return e.is("img") ? e : e.find("img")
                        }
                    }
                }), function() {
                    if (s(".sortable-gallery .gallery-filters").length) {
                        var i = s(".gallery-container");
                        i.isotope({
                            filter: "*",
                            animationOptions: {
                                duration: 750,
                                easing: "linear",
                                queue: !1
                            }
                        }), s(".gallery-filters li a").on("click", function() {
                            s(".gallery-filters li .current").removeClass("current"), s(this).addClass(
                                "current");
                            var e = s(this).attr("data-filter");
                            return i.isotope({
                                filter: e,
                                animationOptions: {
                                    duration: 750,
                                    easing: "linear",
                                    queue: !1
                                }
                            }), !1
                        })
                    }
                }(), s(".site-header .navigation").length && (o = s(".site-header .navigation"), r =
                    "sticky-header", o.addClass("original").clone().insertAfter(o).addClass(r).removeClass(
                        "original")), s("#clock").length && s("#clock").countdown("2021/06/06 10:00:00",
                    function(e) {
                        s(this).html(e.strftime(
                            '<div class="box"><div>%D</div> <span>Hari</span> </div><div class="box"><div>%H</div> <span>Jam</span> </div><div class="box"><div>%M</div> <span>Menit</span> </div><div class="box"><div>%S</div> <span>Detik</span> </div>'
                        ))
                    }), s(".gallery-slider".length) && s(".gallery-slider").owlCarousel({
                    mouseDrag: true,
                    autoPlay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    lazyLoad: true,
                    nav: true,
                    navText: ["PREV", "/ &nbsp; NEXT"],
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        550: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        }
                    }
                }), s(".music-box").length) {}
            s(window).on("load", function() {
                s(".preloader").length && s(".preloader").delay(100).fadeOut(500, function() {
                    l.init()
                }), s(".hero-slider .slide").length && s(".hero-slider .slide").each(function() {
                    var e = s(this),
                        i = e.find(".slider-bg").attr("src");
                    e.css({
                        backgroundImage: "url(" + i + ")",
                        backgroundSize: "cover",
                        backgroundPosition: "center center"
                    })
                })
            }), s(window).on("scroll", function() {
                s(".site-header").length && function(e, i) {
                        if (300 <= s(window).scrollTop()) {
                            var n = s(".original"),
                                t = (n.offset().left, n.css("width"));
                            e.addClass(i), e.css({
                                width: t
                            }).show(), s(".original").css({
                                visibility: "hidden"
                            })
                        } else s(".original").css({
                            visibility: "visible"
                        }), e.removeClass(i)
                    }(s(".sticky-header"), "sticky-on", s(".site-header .navigation").offset().top),
                    function(e) {
                        var i = s(window).scrollTop(),
                            n = (s(window).height(), s(document).height(), i + 2),
                            t = s("section"),
                            a = e,
                            o = a.outerHeight();
                        t.each(function() {
                            var e = s(this).offset().top - o,
                                i = e + s(this).outerHeight();
                            e <= n && n <= i ? (a.find("> ul > li > a").parent().removeClass(
                                    "current-menu-item"), a.find("a[href='#" + s(this).attr(
                                    "id") + "']").parent().addClass("current-menu-item")) :
                                2 === n && a.find("> ul > li > a").parent().removeClass(
                                    "current-menu-item")
                        })
                    }(s(".navigation-holder"))
            }), s(window).on("resize", function() {
                clearTimeout(s.data(this, "resizeTimer")), s.data(this, "resizeTimer", setTimeout(
                    function() {}, 200))
            })
        }(window.jQuery);

        particlesJS.load('hero-circle', "<?php echo ROOT_URL?>/assets/setting/particle.json", function() {
            console.log('particle start')
        })
    });

    // $(document).bind("contextmenu", function(e) {
    //     return false;
    // });
    </script>
</body>

</html>