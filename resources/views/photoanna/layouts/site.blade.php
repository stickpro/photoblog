<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : '' }}"/>
    <meta name="description" content="{{ setting('site.description') }}"/>
    @if(Route::currentRouteName() == 'home')
    <title>{{ setting('site.title') }}</title>
    @else
        <title>{!!  $titles or 'Default title' !!}</title>


    @endif
    {{ dd($titles) }}
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <a href="/"><img src="{{asset(env('THEME'))}}/images/logo.png" alt=""></a>
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

                <!-- full-height-wrap end  -->
            @yield('slider')
            @yield('content')
            @yield('bar')
        <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
        <!-- content holder end -->
    </div>
    <!-- wrapper end -->
    <div class="left-decor"></div>
    <div class="right-decor"></div>
    <!--=============== Footer ===============-->
        @yield('footer')
    <!-- footer end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{asset(env('THEME'))}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset(env('THEME'))}}/js/plugins.js"></script>
<script type="text/javascript" src="{{asset(env('THEME'))}}/js/scripts.js"></script>
</body>
</html>