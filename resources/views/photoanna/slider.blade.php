@if(count($sliders) > 0)
    <div class="content-holder elem scale-bg2 transition3 slid-hol" >
        <!-- Fixed title  -->
        <div class="fixed-title"><span>Главная</span></div>
        <!-- Fixed title end -->
        <!--=============== Content ===============-->
        <div class="content full-height">
    <div class="full-height-wrap">
    <div class="swiper-container" id="horizontal-slider" data-mwc="1" data-mwa="0">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="bg" style="background-image:url(/storage/{{ $slider->img }}"></div>
                    <div class="overlay"></div>
                    <div class="zoomimage"><img src="/storage/{{ $slider->img  }}" class="intense" alt=""><i class="fa fa-expand"></i></div>
                    <div class="slide-title-holder">
                        <div class="slide-title">
                            <span class="subtitle">{{ $slider->title  }} </span>
                            <div class="separator-image"><img src="{{asset(env('THEME'))}}/images/separator.png" alt=""></div>
                            <h3 class="transition">  <a href="{{ $slider->url }}">{{ $slider->desc  }}</a></h3>
                            <h4><a  href="{{ $slider->url }}">View</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- slider  pagination -->
    <div class="pagination"></div>
    <!-- pagination  end -->
    <!-- slider navigation  -->
    <div class="swiper-nav-holder hor hs">
        <a class="swiper-nav arrow-left transition " href="#"><i class="fa fa-angle-left"></i></a>
        <a class="swiper-nav  arrow-right transition" href="#"><i class="fa fa-angle-right"></i></a>
    </div>
    <!-- slider navigation  end -->
</div>
<!-- full-height-wrap end  -->
</div>
<!-- Content end  -->
<!-- Share container  -->
<div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>
    </div>
@endif