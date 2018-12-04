<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Outdoor  - Responsive  Photography Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset(env('THEME'))}}/css/reset.css">
    <link type="text/css" rel="stylesheet" href="{{asset(env('THEME'))}}/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="{{asset(env('THEME'))}}/css/style.css">
    <link type="text/css" rel="stylesheet" href="{{asset(env('THEME'))}}/css/yourstyle.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset(env('THEME'))}}/images/favicon.ico">
</head>
<body>
<!--Loader  -->
<div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
<!--LOader end  -->
<!--================= main start ================-->
<div id="main">
    <!--=============== header ===============-->
    <header>
        <!-- Header inner  -->
        <div class="header-inner">
            <!-- Logo  -->
            <div class="logo-holder">
                <a href="index.html"><img src="images/logo.png" alt=""></a>
            </div>
            <!--Logo end  -->
            <!--Navigation  -->
            @yield('navigation')
            <!--Navigation End -->
        <!--Header inner end  -->
    </header>
    <!--header end -->
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <!--=============== Content holder  ===============-->
        <div class="content-holder elem scale-bg2 transition3" >
            <!-- Fixed title  -->
            <div class="fixed-title"><span>Home</span></div>
            <!-- Fixed title end -->
            <!--=============== Content ===============-->
            <div class="content full-height">
                <!--full-height wrap -->
                <div class="full-height-wrap">
                    <div class="media-container">
                        <div class="video-mask"></div>
                        <!--=============== add you video id  in data-vid="" if you want add sound change data-mv="1" on data-mv="0" ===============-->
                        <div  class="background-video" data-vid="f5zK3oWCjes" data-mv="1"> </div>
                    </div>
                    <div class="bg mob-bg" style="background-image:url(images/bg/22.jpg)"></div>
                    <div class="overlay"></div>
                    <!-- Hero title -->
                    <div class="slide-title-holder">
                        <div class="slide-title">
                            <span class="subtitle">Sed non arcu non sem commodo ultricies.</span>
                            <div class="separator-image"><img src="images/separator.png" alt=""></div>
                            <div class="hero-text-holder">
                                <div class="hero-text owl-carousel" data-attime2="3220">
                                    <!--3  -->
                                    <div class="item">Travel  photography</div>
                                    <!-- 1 -->
                                    <div class="item">Portraits  photography</div>
                                    <!-- 2 -->
                                    <div class="item">Nature photography </div>
                                </div>
                            </div>
                            <h4><a  href="portfolio.html">Enter</a></h4>
                        </div>
                    </div>
                    <!-- Hero title end  -->
                </div>
                <!-- full-height-wrap end  -->
            </div>
            <!-- Content end  -->
            <!-- Share container  -->
            <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
        </div>
        <!-- content holder end -->
    </div>
    <!-- wrapper end -->
    <div class="left-decor"></div>
    <div class="right-decor"></div>
    <!--=============== Footer ===============-->
    <footer>
        <div class="policy-box">
            <span>&#169; Outdoor 2015 . All rights reserved. </span>
            <ul>
                <li><a href="index4.html#">yourmail@domain.com</a></li>
                <li><a href="index4.html#">+7(111)123456789</a></li>
            </ul>
        </div>
        <!-- footer social -->
        <div class="footer-social">
            <ul>
                <li><a href="index4.html#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                <li><a href="index4.html#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="index4.html#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                <li><a href="index4.html#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                <li><a href="index4.html#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
            </ul>
        </div>
        <!-- footer social end -->
        <div class="to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <!-- footer end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{asset(env('THEME'))}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset(env('THEME'))}}/js/plugins.js"></script>
<script type="text/javascript" src="{{asset(env('THEME'))}}/js/scripts.js"></script>
</body>
</html>