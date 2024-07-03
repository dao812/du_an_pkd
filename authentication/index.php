<?php

if (!isset($_SESSION)) {
    ob_start();
    session_start();
};

$userLogged = $_SESSION['__user'] ?? null;

?>

<!DOCTYPE html>

<head>
    <meta name="robots" content="index, follow" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <title>PKD - web trang sức</title>
    <meta name="keywords" content="ph&#x1EE5;&#x20;ki&#x1EC7;n&#x20;th&#x1EDD;i&#x20;trang,&#x20;trang&#x20;s&#x1EE9;c&#x20;b&#x1EA1;c,&#x20;khuy&#xEA;n&#x20;tai&#x20;b&#x1EA1;c,&#x20;d&#xE2;y&#x20;chuy&#x1EC1;n&#x20;b&#x1EA1;c,&#x20;nh&#x1EAB;n&#x20;tay,&#x20;khuy&#xEA;n&#x20;tai,&#x20;v&#xF2;ng&#x20;tay,&#x20;nh&#x1EAB;n&#x20;&#x0111;&#xF4;i,&#x20;v&#xF2;ng&#x20;ch&#xE2;n">
    <meta name="description" content="Trang&#x20;s&#x1EE9;c&#x20;b&#x1EA1;c,&#x20;blue&#x20;peach,&#x20;Trang&#x20;s&#x1EE9;c,&#x20;D&#xE2;y&#x20;chuy&#x1EC1;n,&#x20;L&#x1EAF;c&#x20;tay,&#x20;Nh&#x1EAB;n,&#x20;Khuy&#xEA;n&#x20;tai,&#x20;L&#x1EAF;c&#x20;ch&#xE2;n,&#x20;Nh&#x1EAB;n&#x20;&#x0111;&#xF4;i">
    <meta property="og&#x3A;title" content="BLUE&#x20;PEACH&#x20;-&#x20;TRANG&#x20;S&#x1EE8;C&#x20;B&#x1EA0;C">
    <meta property="og&#x3A;url" content="http&#x3A;##bluepeach.vn">
    <meta property="og&#x3A;type" content="Index">
    <meta property="og&#x3A;image" content="https&#x3A;##pos.nvncdn.com#1cdfdd-38070#store#20181210_NfSYjqRWuwFkURp6Lc8QAfdU.png">
    <meta name="google-site-verification" content="">
    <meta name="facebook-domain-verification" content="">
    <link href="https&#x3A;##bluepeach.vn" rel="canonical">
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
    <script src="https://web.nvnstatic.net/js/translate/vi-vn.js" defer></script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq)
                return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)
                f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '388727451900159');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=388727451900159&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Google Tag Manager -->
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
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-THJJWRS');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
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
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="san-pham-pc271837.html">SẢN PHẨM</a>
                    <ul>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="day-chuyen-pc264333.html">DÂY CHUYỀN /
                                NECKLACE</a></li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="lac-tay-pc264334.html">LẮC TAY / BRACELET</a>
                        </li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="khuyen-tai-pc264336.html">KHUYÊN TAI /
                                EARRINGS</a></li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="combo-qua-tang-pc483931.html">COMBO QUÀ TẶNG</a>
                        </li>
                    </ul>
                </li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="https://shopee.vn/bluepeach.jewellery">MY SHOPEE</a></li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="contact">CONTACT</a></li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="about-us-n70319.html">VỀ CHÚNG TỚ</a>
                    <ul>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="about-us-n70319.html">Về chúng tớ</a></li>
                        <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="giao-hang-bao-hanh-doi-tra-n70414.html">Chính
                                sách, quy định</a></li>
                    </ul>
                </li>
                <li><a class="gaTracking" data-e-action="click" data-e-category="link" data-e-label="MENU_MOBILE_LINK" href="khuyen-tai-vang-pc566993.html">KHUYÊN TAI VÀNG</a></li>
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
        <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0198/js/index.js?v=2"></script>
        <h1 class="hidden">BLUE PEACH - TRANG SỨC BẠC</h1>
        <div id="slide-thumb" class="slide-thumb">
            <section class="photoslider-section no-padding">
                <div id="home-slider" class="tp_banner_main owl-carousel">
                    <div class="item full">
                        <a title="Combo pkd" href="javascript:void(0);" target="_self">
                            <img alt="Combo pkd" src="anhdau.jpg">
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <div id="home-filter-top5" class="tp_product_hot">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="title-top tp_title">
                            <a href="./index.php">DÂY CHUYỀN </a>
                        </h3>
                    </div>
                </div>
                <div class="row-lg-10 no-padding clearfix">
                    <div class="product-index center-product ">
                        <div data-id="38298409" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-38298409">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="dc-milky-way-vn-v2-p38298409.html" title="PKD Milky Way VN V2">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-38298409" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2" data-src="snapedit_1708414924971.png" data-hover="" alt="PKD Milky Way VN V2">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="dc-milky-way-vn-v2-p38298409.html" class="tp_product_name" title="PKD Milky Way VN V2">
                                            <h2>PKD Milky Way VN V2</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    279,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="38298409" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="38086606" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-38086606">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd2.html" title="PKD Milky Way VN">
                                        <div class="product-image">
                                            <img class="snapedit_1708500712277.png" data-sizes="auto" src="snapedit_1708500712277 - Copy.png" data-src="snapedit_1708500712277.png" data-hover="" alt="PKD Milky Way VN">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd2.html" class="tp_product_name" title="PKD Milky Way VN">
                                            <h2>PKD Milky Way VN</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    279,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="38086606" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="38194739" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-38194739">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="dc-blue-sea-circle-v1-p38194739.html" title="PKD Blue Sea Circle V1">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-38194739" data-sizes="auto" src="snapedit_1708502847861.png" data-src="snapedit_1708502847861.png" data-hover="" alt="PKD Blue Sea Circle V1">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd3.html" class="tp_product_name" title="PKD Blue Sea Circle V1">
                                            <h2>PKD Blue Sea Circle V1</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    359,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="38194739" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="34000263" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-34000263">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd4.html" title="PKD Blue Glitter Moon v1 VN - Moonstone Trơn">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-34000263" data-sizes="auto" src="snapedit_1708503351156.png" data-src="snapedit_1708503351156.png" data-hover="" alt="PKD Blue Glitter Moon v1 VN - Moonstone Trơn">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="dc-blue-glitter-moon-v1-vn-moonstone-tron-p34000263.html" class="tp_product_name" title="PKD Blue Glitter Moon v1 VN - Moonstone Trơn">
                                            <h2>PKD Blue Glitter Moon v1 VN - Moonstone Trơn</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    355,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="34000263" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="38382768" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-38382768">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd4.html" title="PKD Milky Way VN - Đá Trắng">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-38382768" data-sizes="auto" src="e54e1a219c14314a6805.jpg" data-src="e54e1a219c14314a6805.jpg" data-hover="" alt="PKD Milky Way VN - Đá Trắng">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd4.html" class="tp_product_name" title="PKD Milky Way VN - Đá Trắng">
                                            <h2>PKD Milky Way VN - Đá Trắng</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    360,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="38382768" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="38373183" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-38373183">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd5.html" title="PKD - Đá Trắng">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-38373183" data-sizes="auto" src="12b1d73aae0e03505a1f.jpg" data-src="12b1d73aae0e03505a1f.jpg" data-hover="" alt="LT Milky Way VN - Moon Stone">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd5.html" class="tp_product_name" title="PKD - Đá Trắng">
                                            <h2>PKD - Đá Trắng</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    220,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="38373183" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="39099195" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-39099195">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd6.html" title="PKD HEART- Đá Trắng">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-39099195" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2" data-src="2c88c534b500185e4111.jpg" data-hover="" alt="PKD HEART- Đá Trắng">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd6.html" class="tp_product_name" title="PKD HEART- Đá Trắng">
                                            <h2>PKD HEART- Đá Trắng</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    249,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="39099195" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="39099191" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-39099191">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd7.html" title="PKD CROWN- Đá Trắng">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-39099191" data-sizes="auto" src="898aed9986ad2bf372bc.jpg" data-src="898aed9986ad2bf372bc.jpg" data-hover="" alt="PKD CROWN- Đá Trắng">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd7.html" class="tp_product_name" title="PKD CROWN- Đá Trắng">
                                            <h2>PKD CROWN- Đá Trắng</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    249,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="39099191" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="39099190" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-39099190">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd8.html" title="PKD DAO- Đá Trắng">
                                        <div class="product-image">
                                            <img class="image-default lazyload swatches-39099190" data-sizes="auto" src="a95d570225368868d127.jpg" data-src="a95d570225368868d127.jpg" data-hover="" alt="PKD DAO- Đá Trắng">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd8.html" class="tp_product_name" title="PKD DAO- Đá Trắng">
                                            <h2>PKD DAO- Đá Trắng</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    269,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="39099190" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="39099171" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-ivt p-39099171">
                            <div class="product-information">
                                <div class="product-detail">
                                    <a href="pkd9.html" title="PKD Diamond - Đá Trắng">
                                        <div class="product-image">
                                            <img class="2b0063bd0689abd7f298.jpg" data-sizes="auto" src="2b0063bd0689abd7f298.jpg" data-hover="" alt="PKD Diamond - Đá Trắng">
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <a href="pkd9.html" class="tp_product_name" title="PKD Diamond - Đá Trắng">
                                            <h2>PKD Diamond - Đá Trắng</h2>
                                        </a>
                                        <div class="price-info clearfix">
                                            <div class="price-new-old">
                                                <span class="single-price tp_product_price">
                                                    249,000<sup>đ</sup>
                                                </span>
                                            </div>
                                            <div class="action-add-cart">
                                                <a href="javascript:" rel="39099171" class="quickView">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--load sp khuyến mãi-->
                <!--load sp theo danh mục-->
                <div class="tp_product_category_box" style="display: none">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="title-top tp_title">LẮC TAY </h3>
                            </div>
                        </div>
                        <div class="row-lg-10 no-padding clearfix">
                            <div class="row-lg-10 product-index center-product ">
                                <div data-id="38515004" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-38515004">
                                    <div class="product-information">
                                        <div class="product-detail">
                                            <a href="LT1.html" title="LT Glitter Moon VN">
                                                <div class="product-image">
                                                    <img class="d1ee784e277a8a24d36b.jpg" data-sizes="auto" src="d1ee784e277a8a24d36b.jpg" data-src="d1ee784e277a8a24d36b.jpg" data-hover="" alt="LT Glitter Moon VN">
                                                </div>
                                            </a>
                                            <div class="product-info">
                                                <a href="LT1.html" class="tp_product_name" title="LT Glitter Moon VN">
                                                    <h2>LT Glitter Moon VN</h2>
                                                </a>
                                                <div class="price-info clearfix">
                                                    <div class="price-new-old">
                                                        <span class="single-price tp_product_price">
                                                            269,000<sup>đ</sup>
                                                        </span>
                                                    </div>
                                                    <div class="action-add-cart">
                                                        <a href="javascript:" rel="38515004" class="quickView">Thêm vào giỏ hàng </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="38298409" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-38298409">
                                    <div class="product-information">
                                        <div class="product-detail">
                                            <a href="LT2.html" title="LT Glitter Flower VN">
                                                <div class="product-image">
                                                    <img class="9df43e546160cc3e9571.jpg" data-sizes="auto" src="9df43e546160cc3e9571.jpg" data-src="9df43e546160cc3e9571.jpg" data-hover="" alt="LT Glitter Flower VN">
                                                </div>
                                            </a>
                                            <div class="product-info">
                                                <a href="LT2.html" class="tp_product_name" title="LT Glitter Flower VN">
                                                    <h2>LT Glitter Flower VN</h2>
                                                </a>
                                                <div class="price-info clearfix">
                                                    <div class="price-new-old">
                                                        <span class="single-price tp_product_price">
                                                            279,000<sup>đ</sup>
                                                        </span>
                                                    </div>
                                                    <div class="action-add-cart">
                                                        <a href="javascript:" rel="38298409" class="quickView">Thêm vào giỏ hàng </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="38086606" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-38086606">
                                    <div class="product-information">
                                        <div class="product-detail">
                                            <a href="LT3.html" title="LT Glitter Cherry VN">
                                                <div class="product-image">
                                                    <img class="image-default lazyload swatches-38086606" data-sizes="auto" src="149f480b1c3fb161e82e.jpg" data-src="149f480b1c3fb161e82e.jpg" data-hover="" alt="LT Glitter Cherry VN">
                                                </div>
                                            </a>
                                            <div class="product-info">
                                                <a href="LT3.html" class="tp_product_name" title="LT Glitter Cherry VN">
                                                    <h2>LT Glitter Cherry VN</h2>
                                                </a>
                                                <div class="price-info clearfix">
                                                    <div class="price-new-old">
                                                        <span class="single-price tp_product_price">
                                                            279,000<sup>đ</sup>
                                                        </span>
                                                    </div>
                                                    <div class="action-add-cart">
                                                        <a href="javascript:" rel="38086606" class="quickView">Thêm vào giỏ hàng </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="38194739" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-38194739">
                                    <div class="product-information">
                                        <div class="product-detail">
                                            <a href="LT4.html" title="DC LT Glitter Gem VN">
                                                <div class="product-image">
                                                    <img class="61e3a21fe92b44751d3a.jpg" data-sizes="auto" src="61e3a21fe92b44751d3a.jpg" data-src="61e3a21fe92b44751d3a.jpg" data-hover="" alt="LT Glitter Gem VN">
                                                </div>
                                            </a>
                                            <div class="product-info">
                                                <a href="LT4.html" class="tp_product_name" title="LT Glitter Gem VN">
                                                    <h2>LT Glitter Gem VN</h2>
                                                </a>
                                                <div class="price-info clearfix">
                                                    <div class="price-new-old">
                                                        <span class="single-price tp_product_price">
                                                            279,000<sup>đ</sup>
                                                        </span>
                                                    </div>
                                                    <div class="action-add-cart">
                                                        <a href="javascript:" rel="38194739" class="quickView">Thêm vào giỏ hàng </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="34000263" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-34000263">
                                    <div class="product-information">
                                        <div class="product-detail">
                                            <a href="LT5.html" title="LT Glitter Hoa VN">
                                                <div class="product-image">
                                                    <img class="f2027e8a2abe87e0deaf.jpg" data-sizes="auto" src="f2027e8a2abe87e0deaf.jpg" data-src="f2027e8a2abe87e0deaf.jpg" data-hover="" alt="LT Glitter Hoa VN">
                                                </div>
                                            </a>
                                            <div class="product-info">
                                                <a href="LT5.html" class="tp_product_name" title="LLT Glitter Hoa VN">
                                                    <h2>LT Glitter Hoa VN</h2>
                                                </a>
                                                <div class="price-info clearfix">
                                                    <div class="price-new-old">
                                                        <span class="single-price tp_product_price">
                                                            279,000<sup>đ</sup>
                                                        </span>
                                                    </div>
                                                    <div class="action-add-cart">
                                                        <a href="javascript:" rel="34000263" class="quickView">Thêm vào giỏ hàng </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="37695310" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-37695310">
                                    <div class="product-information">
                                        <div class="product-detail">
                                            <a href="LT6.html" title="LT Glitter Normal VN">
                                                <div class="product-image">
                                                    <img class="621584ca86fa2ba472eb.jpg" data-sizes="auto" src="621584ca86fa2ba472eb.jpg" data-src="621584ca86fa2ba472eb.jpg" data-hover="" alt="LT Glitter Normal VN">
                                                </div>
                                            </a>
                                            <div class="product-info">
                                                <a href="LT6.html" class="tp_product_name" title="LT Glitter Normal VN">
                                                    <h2>LT Glitter Normal VN</h2>
                                                </a>
                                                <div class="price-info clearfix">
                                                    <div class="price-new-old">
                                                        <span class="single-price tp_product_price">
                                                            279,000<sup>đ</sup>
                                                        </span>
                                                    </div>
                                                    <div class="action-add-cart">
                                                        <a href="javascript:" rel="37695310" class="quickView">Thêm vào giỏ hàng </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="38382768" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-38382768">
                                    <div class="product-information">
                                        <div class="product-detail">
                                            <a href="LT7.html" title="LT Glitter Special VN">
                                                <div class="product-image">
                                                    <img class="59cf4e13ee23437d1a32.jpg" data-sizes="auto" src="59cf4e13ee23437d1a32.jpg" data-src="59cf4e13ee23437d1a32.jpg" data-hover="" alt="LT Glitter Special VN">
                                                </div>
                                            </a>
                                            <div class="product-info">
                                                <a href="LT7.html" class="tp_product_name" title="LLT Glitter Special VN">
                                                    <h2>LT Glitter Special VN</h2>
                                                </a>
                                                <div class="price-info clearfix">
                                                    <div class="price-new-old">
                                                        <span class="single-price tp_product_price">
                                                            279,000<sup>đ</sup>
                                                        </span>
                                                    </div>
                                                    <div class="action-add-cart">
                                                        <a href="javascript:" rel="38382768" class="quickView">Thêm vào giỏ hàng </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="37157428" class="col-lg-20 col-sm-4 col-xs-6 product-wrapper p-37157428">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid wow fadeIn newsHome">
                <div class="container">
                    <div class="row shoptype">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-bottoms" style="padding-left:10px;">
                                <h3 class="category-title title-shoptype">
                                    <a href="javascript:void(0)">DỊCH VỤ </a>
                                </h3>
                                <p class="title-shoptype-small">Hiểu thời trang và thật thời trang mỗi ngày!</p>
                                <ol>
                                    <li>

                                        &#8226; <b> Trải nghiệm Mua sắm:</b> Cung cấp một môi trường mua sắm thoải mái và sang trọng, có thể là cửa hàng truyền thống hoặc trang web trực tuyến với giao diện thân thiện và dễ sử dụng.
                                    </li>
                                    <li>

                                        &#8226; <b> Dịch vụ Khách hàng:</b> Hỗ trợ khách hàng trong việc chọn lựa sản phẩm, cung cấp thông tin về chất liệu, kiểu dáng, và giá cả, cũng như giải quyết các thắc mắc và yêu cầu đổi trả hàng.
                                    </li>
                                    <li>

                                        &#8226; <b> Chăm sóc sau Bán hàng:</b> Đảm bảo sự hài lòng của khách hàng sau khi mua sắm bằng cách cung cấp dịch vụ hậu mãi, bảo dưỡng và sửa chữa trang sức nếu cần.
                                    </li>
                                    <li>
                                        &#8226; <b> Hệ thống Thanh toán:</b> Cung cấp nhiều phương thức thanh toán an toàn và tiện lợi như thanh toán trực tuyến, thẻ tín dụng, chuyển khoản ngân hàng.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- Instagram -->
                        <!-- End Instagram -->
                        <style type="text/css">
                            .footer-map {
                                background: transparent url(snapedit_1708412635748.png) repeat scroll 0 0 !important;
                                text-align: center;
                            }
                        </style>
                        <footer>
                            <div class="testimonials-wrapper container-fluid vietstar" style="border-top: 1px solid #f8f8f8;"></div>
                            <div id="sua-chua-giay" data-href="./index.php" class="footer-map container-fluid wow fadeIn footer-default tp_product_detail_depot">
                                <div class="row">
                                    <div class="col-md-12 button-store">
                                        <a class="store-footer" target="_blank">Đường Lương Ngọc Quyến, phường Hoàng Văn Thụ, thành phố Thái Nguyên </a>
                                    </div>
                                </div>
                            </div>
                            <section class="policy-section">
                                <div class="container">
                                    <div class="corevalue">
                                        <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">

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
                                            <a href="trang-suc-bac-pc271837.html" title="TRANG SỨC ">
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
                                            <span class="number_phone">0399989893 </span>
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
                                            <span class="number_phone"></span>
                                            <span class="moreinfo"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="addressfooter">
                                    <p>
                                        <strong>Cửa hàng</strong>
                                    </p>
                                    <p>STORE : Đường Lương Ngọc Quyến, phường Hoàng Văn Thụ, thành phố Thái Nguyên</p>

                                </div>
                            </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn copyright-block" style="background:#f4f4f4">
            <div class="row">
                <div class="copyright">
                    <div class="container">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--    SP đã xem    -->
    </footer>
    <div class="back-to-top">
        <a href="javascript:void(0);">Top</a>
    </div>
    <!--check style độc quyền-->
    <div class="phone-footer">
        <a href="tel:0975 69 69 25" class="phone-mobile-ico">
            <div class="phone-mobile-circle"></div>
            <div class="phone-mobile-circle-fill"></div>
            <div class="phone-mobile-img-circle">
                <i class="fa fa-phone"></i>
            </div>
        </a>
    </div>
    <div id="quickView" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5); z-index: 999999;">
        <div class="modal-dialog">
            <!-- Modal content-->
        </div>
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

    </div>
    </div>
    </div>
    <div id="quickview-cart" class="modal fade" role="dialog">
        <div id="quickview-cart-desktop" class="modal-dialog" role="document"></div>
    </div>
    <input type="hidden" class="fanpageId" value="">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THJJWRS" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>
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
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <input type="hidden" id="bussinessId" value="38070">
    <input type="hidden" value="8JtnVu8TGGyQdqaHFSKbd35Ug0aBqvhDmreZ3XvZLBnPR19VexmiNhJRA5jPdCOzeSp5W1cG9dqfJWqw2uFfC0ouykmfaJVmae1LZlxEuAOqJzKOfFKToU7KahQlsuqfOZudVfsR66K9ZtWJI9ZJxWn3C9pxntt3oXhG8AlfZvAww8Xd" id="uctk" name="uctk" />
    <input type="hidden" id="clienIp" value="14.170.154.50">
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