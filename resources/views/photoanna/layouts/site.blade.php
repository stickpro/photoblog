    @yield('header')
    <!--Navigation  -->
    @yield('navigation')

    <!--Navigation End -->
    <!--Header inner end  -->
    </header>
    <!--header end -->
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <!--=============== Content holder  ===============-->
        <div class="content-holder elem scale-bg2 transition3 slid-hol" >
            <!-- Fixed title  -->
            <div class="fixed-title"><span>Home</span></div>
            <!-- Fixed title end -->
            <!--=============== Content ===============-->
            <div class="content full-height">
                <!-- full-height-wrap end  -->
            @yield('slider')
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