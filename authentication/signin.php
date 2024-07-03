<?php

// import function in database
require "./db/connect.php";

// Tạo biến để lưu lỗi
$error_messages = "";

// Tạo biến lưu dữ liệu nếu có lỗi sẽ dữ lại giá trị cũ không bị mất đi
$usr_email = "";
$usr_password = "";

// Kiểm tra xem người dùng đã bấm đăng ký chưa
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit_login'])) {
    $usr_email = $_POST['usr_email'];
    $usr_password = $_POST['usr_password'];

    // Kiểm tra người dùng có tồn tại chưa bằng email
    $userFound = db_fetch_row("SELECT * FROM `users` WHERE `usr_email`='$usr_email'");

    if (!isset($userFound) && empty($userFound)) {
        // Tồn tại
        $error_messages = "Tài khoảng không tồn tại!";
    } else {
        // Kiểm tra password
        if (!password_verify($usr_password, $userFound['usr_password'])) {
            $error_messages = "Mật khẩu không chính xác!";
        } else {
            session_start();
            ob_start();
            // Chính xác thì chuyển hướng đến trang chủ tạo session cho người dùng.

            unset($userFound['usr_password']); // ko lưu password trên trình duyệt

            $_SESSION["__user"] = $userFound;

            header("Location: ./");
            die();
        }
    }
}
?>

<!DOCTYPE html>

<head>
    <meta name="robots" content="index, follow" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <title>Đăng nhập</title>
    <meta name="google-site-verification" content="">
    <meta name="facebook-domain-verification" content="">
    <link href="https&#x3A;##pos.nvncdn.com#1cdfdd-38070#store#20181210_W12fIqWMYPSyo6LQMNzrHWGd.jpg" rel="icon" type="image#vnd.microsoft.icon">
    <link rel="preload" href="https://web.nvnstatic.net/tp/T0198/fonts/roboto-lightitalic.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="https://web.nvnstatic.net/tp/T0198/fonts/roboto-regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="https://web.nvnstatic.net/tp/T0198/fonts/roboto-light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="https://web.nvnstatic.net/css/fontAwesome/fonts/fontawesome-webfont.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/bootstrap3.2.0.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/fontAwesome/font-awesome-4.7.0.min.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/jqueryUI/jqui.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/js/mmenu/css/jquery.mmenu.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/js/mmenu/css/extensions/jquery.mmenu.positioning.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/js/jquery/fancybox-2.1.5/source/jquery.fancybox.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/js/jquery/cloudzoom/cloudzoom.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/font.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0198/css/minify.min.css?v=41" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0198/css/resetDefalt.css?v=41" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0198/css/setmedia.css?v=41" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0198/css/style.css?v=41" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0198/css/stores/38070.css?v=41" type="text/css">
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.cookie.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery-ui-1.10.3.custom.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.number.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/mmenu/js/jquery.mmenu.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery-ui.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/mmenu/js/addons/jquery.mmenu.fixedelements.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/fancybox-2.1.5/source/jquery.fancybox.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/bootstrap/bootstrap-3.3.5.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.lazyload.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/lib.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0198/js/juno/owl.carousel.js?v=8"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0198/js/script.js?v=8"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0198/js/imagesloaded.pkgd.min.js?v=8"></script>
    <link href="https://fonts.googleapis.com/css2?family=Arial&display=swap" rel="stylesheet">
    <style type="text/css">
        .tp_background {
            background: #ffffff !important
        }

        .tp_text_color {
            color: #000000 !important
        }

        body.tp_background,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        code,
        form,
        fieldset,
        legend,
        input,
        button,
        textarea,
        select,
        span,
        a,
        p,
        sub,
        blockquote,
        th,
        td {
            font-family: Arial
        }

        body {
            font-size: 16px !important
        }

        .tp_button {
            background: #ffffff !important;
            border-color: #ffffff !important;
            box-shadow: none !important
        }

        .tp_button {
            color: #ffffff !important
        }

        .tp_button:hover {
            background: #ffffff !important
        }

        .tp_product_name,
        .tp_product_name>a {
            color: #000000 !important
        }

        .tp_product_price {
            color: #f70a0a !important
        }

        .tp_product_price_old {
            color: #000000 !important
        }

        .tp_title {
            color: #000000 !important
        }

        .tp_title,
        .tp_title>span {
            background: #b5e4f2 !important
        }

        .tp_title {
            font-size: 16px !important
        }

        .tp_product_price {
            font-size: 16px !important
        }

        .tp_product_price_old {
            font-size: 16px !important
        }

        .tp_product_name {
            font-size: 16px !important
        }

        .tp_header {
            background: #ffffff !important
        }

        .tp_menu {
            background: #b5e4f2 !important
        }

        .tp_menu .tp_menu_item.active {
            background: #b5e4f2 !important
        }

        .tp_menu .tp_menu_item.active,
        .tp_menu .tp_menu_item.active>a {
            color: #ffffff !important
        }

        .tp_menu .tp_menu_item:hover {
            background: #b5e4f2 !important
        }

        .tp_menu .tp_menu_item {
            color: #000000 !important
        }

        .tp_menu .tp_menu_item:hover,
        .tp_menu .tp_menu_item>a:hover {
            color: #ffffff !important
        }

        .tp_menu .tp_menu_item {
            font-size: 14px !important
        }

        .tp_banner_main {
            display: block !important
        }

        .tp_product_new {
            display: block !important
        }

        .tp_product_hot {
            display: block !important
        }

        .tp_product_betseller {
            display: none !important
        }

        .tp_product_category_box {
            display: block !important
        }

        .tp_product_discount {
            display: block !important
        }

        .tp_footer {
            background: #93cfeb !important
        }

        .tp_footer,
        .tp_footer a,
        .tp_footer p {
            color: #000000 !important
        }

        .tp_footer a:hover {
            color: #ffffff !important
        }

        .tp_footer,
        .tp_footer a {
            font-size: 13px !important
        }

        .tp_product_detail .tp_product_detail_related {
            display: block !important
        }

        .tp_product_detail .tp_product_detail_suggest {
            display: block !important
        }

        .tp_product_detail .tp_product_detail_suggest {
            display: block !important
        }

        .tp_product_detail .tp_product_detail_history {
            display: block !important
        }

        .tp_product_detail .tp_product_detail_tag {
            display: none !important
        }

        .tp_product_detail .tp_product_detail_comment {
            display: block !important
        }

        .tp_product_detail .tp_product_detail_depot {
            display: block !important
        }

        .tp_product_detail .tp_product_detail_video {
            display: block !important
        }

        .tp_product_detail .tp_product_detail_price {
            font-size: 15px !important
        }

        .tp_product_detail .tp_product_detail_price {
            color: #c92c2c !important
        }

        .tp_product_detail .tp_product_detail_price_old {
            font-size: 13px !important
        }

        .tp_product_detail .tp_product_detail_price_old {
            color: #000000 !important
        }

        .tp_product_detail .tp_product_detail_name {
            color: #000000 !important
        }

        .tp_product_detail .tp_product_detail_name {
            font-size: 16px !important
        }

        .tp_product_category .tp_product_category_filter_attribute {
            display: block !important
        }

        .tp_product_category .tp_product_category_filter_brand {
            display: block !important
        }

        .tp_product_category .tp_product_category_filter_category {
            display: block !important
        }

        .tp_product_category .tp_product_category_filter_price {
            display: block !important
        }
    </style>
    <style type="text/css">
        img {
            max-width: 100%;
        }

        img.lazyload {
            opacity: 0.001;
            object-fit: scale-down !important;
        }

        .fb-customerchat>span>iframe.fb_customer_chat_bounce_out_v2 {
            max-height: 0 !important;
        }

        .fb-customerchat>span>iframe.fb_customer_chat_bounce_in_v2 {
            max-height: calc(100% - 80px) !important;
        }
    </style>
    <script src="https://pos.nvnstatic.net/cache/location.vn.js?v=240131_145835" defer></script>
    <script src="https://web.nvnstatic.net/js/lazyLoad/lazysizes.min.js" async></script>
    <style>
        figure.image {
            clear: both;
            display: table;
            margin: .9em auto;
            min-width: 50px;
            text-align: center;
            width: auto !important;
        }

        figure.image img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            min-width: 100%;
        }

        figure.image>figcaption {
            background-color: #f7f7f7;
            caption-side: bottom;
            color: #333;
            display: table-caption;
            font-size: .75em;
            outline-offset: -1px;
            padding: .6em;
            word-break: break-word;
        }

        figure.image img,
        img.image_resized {
            height: auto !important;
            aspect-ratio: auto !important;
        }
    </style>
    <script src="https://web.nvnstatic.net/js/translate/vi-vn.js" defer></script><!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '388727451900159');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=388727451900159&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code --><!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-THJJWRS');
    </script>
    <!-- End Google Tag Manager --><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176554223-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-176554223-1');
    </script>
</head>

<body class="cms-index-index tp_background tp_text_color">
    <input type="hidden" id="checkStoreId" value="38070">
    <div id="boxMenu">
        <div>
            <ul>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="./index.php">HOME</a></li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/san-pham-pc271837.html">SẢN PHẨM</a>
                    <ul>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/day-chuyen-pc264333.html">DÂY CHUYỀN / NECKLACE</a></li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/lac-tay-pc264334.html">LẮC TAY / BRACELET</a></li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/khuyen-tai-pc264336.html">KHUYÊN TAI / EARRINGS</a></li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/combo-qua-tang-pc483931.html">COMBO QUÀ TẶNG</a></li>
                    </ul>
                </li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="https://shopee.vn/bluepeach.jewellery">MY SHOPEE</a></li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="contact">CONTACT</a></li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/about-us-n70319.html">VỀ CHÚNG TỚ</a>
                    <ul>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/about-us-n70319.html">Về chúng tớ</a></li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/giao-hang-bao-hanh-doi-tra-n70414.html">Chính sách, quy định</a></li>
                    </ul>
                </li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="/khuyen-tai-vang-pc566993.html">KHUYÊN TAI VÀNG</a></li>
            </ul>
        </div>
    </div>
    <div id="script-head-body"></div>
    <div id="myModal-popup" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
        <div class="modal-dialog">
            <!-- Modal content-->
        </div>
    </div>

    <!--================check style độc quyền================-->
    <section id="sidebar-wrapper" class="hidden-lg hidden-md">
        <ul class="sidebar-nav">
            <li class="title">Danh Mục </li>
            <li class="mobile-click">
                <a href="/trang-suc-bac-pc271837.html" class="tui-xach-mobile-click" title="TRANG SỨC BẠC">
                    <span class="icon ico-top" data-position="imgImport_tuixach_thumb.png">
                        <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2" data-src="" />
                        <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2" data-src="" />
                    </span>
                    TRANG SỨC BẠC </a>
            </li>

            <li class="more-info fa fa-phone">
                <a href="tel:18001162">
                    <span>Gọi mua hàng: <strong>0975 69 69 25</strong></span>
                    <span>08:30 - 21:30 mỗi ngày trừ ngày Lễ, Tết</span>
                </a>
            </li>
            <li class="more-info bottom fa fa-building">
                <a href="/he-thong-dai-ly">
                    20 Tây Sơn, Đống Đa, Hà Nội - 47A Xuân Thủy, Cầu Giấy, Hà Nội </a>
            </li>
        </ul>

    </section>

    <div id="wrapper">
        <header class="tp_header">
            <!--================check style độc quyền================-->


            <div class="header-top-bar">
                <div class="container">
                    <div class="header-top-bar-left pull-left">
                        <ul>
                            <li><a href="tel:0975 69 69 25"><i class="fa fa-phone"></i> 0975 69 69 25</a></li>
                            <li><a href="mailto:bluepeachvietnam@gmail.com"><i class="fa fa-envelope"></i>
                                    bluepeachvietnam@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <ul>
                            <li><a href="/user/signup"><i class="fa fa-user"></i> Đăng ký</a></li>
                            <li><a href="./signin.php"><i class="fa fa-lock"></i> Đăng nhập</a></li>

                        </ul>
                    </div>

                </div>
            </div>
            <!--================check style độc quyền================-->
            <div class="top hidden-sm hidden-xs tp_header">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-6 col-sm-12 left no-padding">
                            <div class="col-md-4 col-sm-12 logoTop">
                                <div class="logo">
                                    <a href="./index.php" title="Logo">
                                        <img alt="Logo" src="385537312_356635530387098_659010498915687707_n.png" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 no-padding searchTop">
                                <div class="search-collection col-xs-12 no-padding">
                                    <form class="search" action="/search">
                                        <input type="text" name="q" id="text-product" class="txtSearch col-xs-10 no-padding" placeholder="Bạn cần tìm gì?" />
                                        <button id="submit-search">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                        <div id="searchFolding"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 no-padding rightTop_head">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 switchboardTop">
                                    <div class="row">
                                        <div class="switchboard_wrapper">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>HOTLINE: <strong> 0399989893</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <!--================check style độc quyền================-->
                                <div class="col-md-4 col-sm-12 no-padding storeTop">
                                    <div class="row">
                                        <div class="headStore_wrapper">
                                            <!--                                            <a href="--><!--">-->
                                            <!--                                                <i class="fa fa-building" aria-hidden="true"></i>-->
                                            <!--                                                --><!--                                            </a>-->
                                            <?php if (isset($userLogged) && !empty($userLogged)) : ?>
                                                <ul class="header-user d-none d-md-block ">
                                                    <li>
                                                        <span>Xin chào, <?= $userLogged['usr_fullName'] ?></span>
                                                        <a href="./logout.php">| Đăng xuất</a>
                                                    </li>
                                                </ul>
                                            <?php else : ?>
                                                <ul class="header-user d-none d-md-block ">
                                                    <li>
                                                        <a href="./signin.php">Đăng nhập |</a>
                                                    </li>
                                                    <li>
                                                        <a href="./signup.php">Đăng ký</a>
                                                    </li>
                                                </ul>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 no-padding cartTop">
                                    <div class="row">
                                        <div class="carttop_wrapper">
                                            <div id="cart_block" class="cart-relative">
                                                <a href="/cart">
                                                    <div class="cart-total-price">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span class="hidden">0đ</span>
                                                        <span>0<sup>đ</sup></span>
                                                    </div>
                                                </a>

                                                <div class="cart_content hidden-xs hidden-sm" id="view-cart">
                                                    <div style="padding: 40px 20px; font-size:15px;">
                                                        <p style="margin:0" class="text-center">Giỏ hàng của bạn đang
                                                            trống</p>
                                                        <p class="text-center"><a href="/product">Tiếp tục mua hàng</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="langgue-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 no-padding box-user">
                                    <div class="carttop_wrapper">
                                        <img src="https://web.nvnstatic.net/tp/T0198/img/icons8-lock-17.png?v=3" class="lock_icon" alt="">
                                        <div class="box-user-content">
                                            <a href="./signup.php">Đăng ký</a>
                                            /
                                            <a href="./signin.php">Đăng nhập</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fix-top-menu" class="top2 hidden-sm hidden-xs ">
                <div class="container-fluid menutopid tp_menu" style="">
                    <div class="container" style="position:relative">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="menu-top clearfix hidden-xs">
                                    <li class="menu-li hasChild tp_menu_item">
                                        <a href="./index.php">
                                            <!--<span class="menu-sale-icon"><img src="https://hstatic.net/991/1000153991/1000203026/sale-label.png"></span>-->
                                            <div class="coll-icon"><span class="title-main-menu tp_menu_item">HOME</span></div>
                                        </a>
                                    </li>
                                    <li class="menu-li hasChild tp_menu_item">
                                        <a href="contact.html">
                                            <!--<span class="menu-sale-icon"><img src="https://hstatic.net/991/1000153991/1000203026/sale-label.png"></span>-->
                                            <div class="coll-icon"><span class="title-main-menu tp_menu_item">CONTACT</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-li hasChild tp_menu_item">
                                        <a href="about-us-n-70319.html">
                                            <!--<span class="menu-sale-icon"><img src="https://hstatic.net/991/1000153991/1000203026/sale-label.png"></span>-->
                                            <div class="coll-icon"><span class="title-main-menu tp_menu_item">ABOUT</span></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="top hidden-lg hidden-md" id="mobile-menu">
                            <div class="ovl-search-mobile"></div>
                            <div class="fixed-nav">
                                <p class="open-menu-title"></p>
                                <a href="#boxMenu" class="navbar-toggle pull-left">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <a class="logo-mobile" href="./index.php" title="Logo">
                                    <img src="https://pos.nvncdn.com/1cdfdd-38070/store/20181210_NfSYjqRWuwFkURp6Lc8QAfdU.png" alt="Logo" />
                                </a>
                                <!--================check style độc quyền================-->
                                <a href="/cart" class="cart-link" id="header-cart">
                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span class="number">0</span></span>
                                </a>
                                <form class="frm-search" action='/search'>
                                    <input type="text" name='q' value="" id="inputSearch" placeholder="Tìm kiếm...">
                                </form>
                                <div class="langgue-box">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.validationEngine.js?v=2"></script>
        <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.validationEngine-vi.js?v=2"></script>
        <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0198/js/user.js?v=2"></script>
        <link rel="stylesheet" href="https://web.nvnstatic.net/css/validationEngine.jquery.css?v=2" type="text/css">
        <main class="main-site main-childs">
            <div class="user-wrapper">
                <div class="user-nav anonymous-awe">
                    <a href="./signin.php" class="active" rel="nofollow">Đăng nhập</a>
                    <a href="./signup.php" rel="nofollow">Đăng ký</a>
                </div>
                <form accept-charset="UTF-8" id="formAcount" class="validate" method="post" action="">
                    <div class="form-group">
                        <input type="email" class="form-control validate[required, custom[email]]" id="email" name="usr_email" value="<?= $usr_email ?>" placeholder="Nhập email hoặc tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="validate[required]" name="usr_password" value="<?= $usr_password ?>" placeholder="Mật khẩu">
                    </div>

                    <?php if (!empty($error_messages)) : ?>
                        <div class="form-group">
                            <i class="text-danger text-bold"><?= $error_messages ?></i>
                        </div>
                    <?php endif; ?>

                    <button type="submit" id="btnsignin" name="submit_login" class="btn btn-organ w__100">Đăng nhập</button>
                    <div class="user-foot text-center">
                        <a href="/user/getpassword" class="clearfix" rel="nofollow">Quên mật khẩu?</a>
                        <p class="clearfix" style="padding: 10px 0">Hoặc đăng nhập với</p>

                        <li class="loginFb" rel="nofollow"><span><i class="fa fa-facebook"></i></span><a href="/user/fbsignin?redirect=/">Đăng nhập facebook</a></li>

                        <li class="loginGg" rel="nofollow"><span><i class="fa fa-google"></i></span><a href="/user/ggsignin">Đăng nhập Google</a></li>
                    </div>
                </form>
            </div>
        </main>
        <style>
            .loginFb {
                width: 275px;
                background: #3b5998;
                display: inline-block;
            }

            .loginFb span,
            .loginGg span {
                float: left;
                width: 50px;
                height: 100%;
                font-size: 31px;
                color: #fff;
                border-right: 1px solid #15416f;
            }

            .loginGg span {
                border-right: 1px solid #646668;
            }

            .loginFb a,
            .loginGg a {
                color: #fff;
                padding: 0 5px;
            }

            .loginGg {
                width: 250px;
                background: #000;
                color: #fff;
                display: inline-block;
                margin-left: 20px;
            }

            .user-wrapper {
                max-width: 600px;
                margin: 20px auto;
                border: 1px solid #ccc;
            }

            .user-nav {
                border-bottom: 2px solid #cccccc63;
                overflow: hidden;
                box-shadow: 0 1px 3px rgba(146, 146, 146, 0.14);
            }

            .user-nav a {
                width: 50%;
                float: left;
                display: inline-block;
                text-transform: uppercase;
                font-size: 18px;
                text-align: center;
                padding: 5px 10px;
                border-bottom: 2px solid transparent;
            }

            .user-nav a.active,
            .user-nav a:hover {
                border-bottom: 2px solid #10a2f7;
            }

            .user-wrapper #formAcount {
                padding: 20px;
            }

            #formAcount input {
                width: 100%;
                clear: both;
                padding: 8px 12px;
                border: none;
                border-bottom: 1px solid #ccc;
                box-shadow: none;
            }

            #formAcount button {
                text-transform: uppercase;
                font-size: 15px;
                background: #000;
                color: #fff;
                border-color: #000;

            }

            #formAcount button,
            #formAcount button:hover,
            #formAcount button:focus {
                outline: 0;
            }

            .user-foot {
                font-size: 17px;
            }

            .user-foot a {
                margin: 10px 0;
                display: block;
            }

            .user-foot a.clearfix {
                color: #007bff;
            }

            .user-foot a.clearfix:hover {
                color: #fd6e1d;
            }

            .user-foot .btn {
                font-size: 16px;
                background: #3c5a9a;
                border-color: #3c5a9a;
            }
        </style>

        <style type="text/css">
            .footer-map {
                background: transparent url(https://pos.nvncdn.com/1cdfdd-38070/bn/20210112_Nm0celUFNh0mlNa7WvmdRYrO.jpg) repeat scroll 0 0 !important;
                text-align: center;
            }
        </style>

        <footer>

            <div class="testimonials-wrapper container-fluid vietstar" style="border-top: 1px solid #f8f8f8;"></div>
            <div id="sua-chua-giay" data-href="./index.php" class="footer-map container-fluid wow fadeIn footer-default tp_product_detail_depot">
                <div class="row">
                    <div class="col-md-12 button-store">
                        <a href="/he-thong-dai-ly" class="store-footer" target="_blank">
                            Đường Lương Ngọc Quyến, phường Hoàng Văn Thụ, thành phố Thái Nguyên </a>
                    </div>
                </div>
            </div>

    </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </section>

    <div id="menu-footer" class="tp_footer container-fluid 5icons hidden-sm hidden-xs " style="background:#e5e5e5">
        <div class="">
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <ul class="menu_footer">
                            <li>
                                <a href="/trang-suc-bac-pc271837.html" title="TRANG SỨC BẠC">

                                    <p class="label_footer">TRANG SỨC </p>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid signUp tp_footer" style="background:#fff">
        <div class="container">
            <div class="row" style="padding-top:20px;padding-bottom:20px">

                <div class="wrap_foo_switchboard col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 no-padding mb-2 d_flex">
                            <div class="icon_phone hidden-xs">
                                <!--check style độc quyền-->
                                <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2" data-src="https://web.nvnstatic.net/tp/T0198/img/icon_phone.png?v=3" alt="Icon Phone">
                            </div>
                            <div class="phone_footer">
                                <strong>Gọi mua hàng ( 8:00 - 21:00 )</strong>
                                <br>
                                <span class="number_phone">
                                    0399989893 </span>
                                <span class="moreinfo">Tất cả các ngày trong tuần</span>
                            </div>
                        </div>


                        <div class="col-sm-6 col-xs-6 no-padding mb-2 phone_true">
                            <div class="icon_phone hidden-xs iconMobile2">
                                <img src="https://web.nvnstatic.net/tp/T0198/img/icon_phone.png?v=3" alt="Icon Phone">
                            </div>
                            <div class="phone_footer">
                                <strong></strong>
                                <br>

                                <span class="number_phone">
                                </span>
                                <span class="moreinfo"></span>
                            </div>
                        </div>




                    </div>
                    <div class="addressfooter">
                        <p><strong>Cửa hàng</strong></p>

                        <p>STORE : Đường Lương Ngọc Quyến, phường Hoàng Văn Thụ, thành phố Thái Nguyên</p>

                    </div>
                </div>
                <div class="wrap_foo_social col-md-6 col-sm-12">
                    <div class="wrapper_embed col-sm-6 col-xs-12 no-padding">
                        <div class="ttmail">
                            <span>
                                <strong></strong>
                            </span>
                        </div>
                        <div id="mc_embed_signup" style="margin-bottom: 10px;">
                            <form id="mc-embedded-subscribe-form" class="validate">
                                <div id="mc_embed_signup_scroll">
                                    <input type="email" value="" name="EMAIL" class="email text-subscribe" id="mce-EMAIL" placeholder="" required="">
                                    <div class="clear">
                                        <input type="button" value="Đăng ký" name="subscribe" id="mc-embedded-subscribe" class="button" style="background:#3c3c3c;border:1px solid #3c3c3c">
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="container-fluid wow fadeIn copyright-block" style="background:#f4f4f4">
                    <div class="row">
                        <div class="copyright">
                            <div class="container">
                                <div class="row">
                                    <div class=" copy">
                                        <!--check style độc quyền-->
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="addressfooter">
                                                <p><strong>Cửa hàng</strong></p>

                                                <p>STORE 1: 47A Xuân Thủy, Cầu Giấy, Hà Nội</p>

                                                <p>STORE 2: 20 Tây Sơn, Đống Đa, Hà Nội</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--    SP đã xem    -->

                        </footer>

                        <div class="back-to-top"><a href="javascript:void(0);">Top</a></div>
                        <!--check style độc quyền-->
                        <div class="phone-footer">
                            <a href="tel:0975 69 69 25" class="phone-mobile-ico">
                                <div class="phone-mobile-circle"></div>
                                <div class="phone-mobile-circle-fill"></div>
                                <div class="phone-mobile-img-circle"><i class="fa fa-phone"></i></div>
                            </a>
                        </div>
                        <div id="quickView" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5); z-index: 999999;">
                            <div class="modal-dialog"><!-- Modal content--></div>
                        </div>



                        <style type="text/css">
                            .paginator .paging-previous,
                            .paginator .paging-next {
                                padding: 5px 8px;
                                display: inline-block;
                                font: normal normal normal 14px/1 FontAwesome;
                                font-size: inherit;
                                text-rendering: auto;
                                -webkit-font-smoothing: antialiased;
                                -moz-osx-font-smoothing: grayscale;
                                background: #666;
                                color: #fff;
                            }
                        </style>

                        <!--check style độc quyền-->
                        <div id="notIndex-fixed-actions">
                            <div class="icon-hover" id="icon-footer-fixed">
                                <div class="fixed-item btn-face-fixed">
                                    <div class="title-fixed">Chat với chúng tớ ngay nè!</div>
                                    <a href="https://messenger.com/nhanh.vn/"><img src="https://web.nvnstatic.net/tp/T0198/img/widget_icon_messenger.svg?v=3"></a>
                                </div>
                                <div class="fixed-item btn-zalo-fixed">
                                    <div class="title-fixed">Chat với chung tôi qua Zalo</div>
                                    <a href="https://zalo.me/nhanh.vn/"><img src="https://web.nvnstatic.net/tp/T0198/img/widget_icon_zalo.svg?v=3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="quickview-cart" class="modal fade" role="dialog">
                            <div id="quickview-cart-desktop" class="modal-dialog" role="document"></div>
                        </div>





                        <input type="hidden" class="fanpageId" value=""><!-- Google Tag Manager (noscript) -->
                        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THJJWRS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                        <!-- End Google Tag Manager (noscript) --><!-- Messenger Plugin chat Code -->
                        <div id="fb-root"></div>

                        <!-- Your Plugin chat code -->
                        <div id="fb-customer-chat" class="fb-customerchat">
                        </div>

                        <script>
                            var chatbox = document.getElementById('fb-customer-chat');
                            chatbox.setAttribute("page_id", "153251151673961");
                            chatbox.setAttribute("attribution", "biz_inbox");
                        </script>

                        <!-- Your SDK code -->
                        <script>
                            window.fbAsyncInit = function() {
                                FB.init({
                                    xfbml: true,
                                    version: 'v15.0'
                                });
                            };

                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script><input type="hidden" id="bussinessId" value="38070"><input type="hidden" value="8JtnVu8TGGyQdqaHFSKbd35Ug0aBqvhDmreZ3XvZLBnPR19VexmiNhJRA5jPdCOzeSp5W1cG9dqfJWqw2uFfC0ouykmfaJVmae1LZlxEuAOqJzKOfFKToU7KahQlsuqfOZudVfsR66K9ZtWJI9ZJxWn3C9pxntt3oXhG8AlfZvAww8Xd" id="uctk" name="uctk" /><input type="hidden" id="clienIp" value="116.98.222.26">
                        <link rel="stylesheet" href="https://web.nvnstatic.net/css/skin.css?v=9" type="text/css">
                        <style type="text/css">
                            #settingSkins {
                                left: -40px;
                            }
                        </style>
                        <div id="modalShow" class="modal fade" role="dialog" style="z-index: 9999">
                            <div class="modal-dialog " style="z-index: 9999">
                                <div class="modal-content"></div>
                            </div>
                        </div>
</body>

</html>