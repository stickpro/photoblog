<!--=============== Conten holder  ===============-->
<div class="content-holder elem scale-bg2 transition3" >

    <!--=============== Content  ===============-->
    <div class="content full-height">
        <div class="fixed-title"><span>Portfolio</span></div>
        <!-- Portfolio counter  -->
        <div class="count-folio">
            <div class="num-album"></div>
            <div class="all-album"></div>
        </div>
        <!-- Portfolio counter end -->
        <div class="filter-holder column-filter">
            <div class="filter-button">Фильтр <i class="fa fa-long-arrow-down"></i></div>
            <div class="gallery-filters hid-filter">
                <a href="portfolio.html#" class="gallery-filter transition2 gallery-filter_active" data-filter="*">Все Альбомы</a>
                @foreach($filters as $filter)
                    <a href="#" class="gallery-filter transition2" data-filter=".{{ $filter->alias }}">{{ $filter->title }}</a>
                @endforeach
            </div>
        </div>
        <!--=============== portfolio holder ===============-->
        @if ($portfolios)
        <div class="resize-carousel-holder">
            <div class="p_horizontal_wrap">
                <div id="portfolio_horizontal_container">
                    <!-- portfolio item -->
                    @foreach($portfolios as $portfolio)
                    <div class="portfolio_item people {{ $portfolio->filter_alias }} ">
                        <img  src="{{ asset(env('THEME')) }}/images/bg/{{ $portfolio->img->max }}"   alt="">
                        <div class="port-desc-holder">
                            <div class="port-desc">
                                <div class="overlay"></div>
                                <div class="grid-item">
                                    <h3><a href="{{ route('portfolios.show', ['alias' => $portfolio->alias]) }}">{{ $portfolio->title }}</a></h3>
                                    <span>{{ $portfolio->filter_alias }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="port-subtitle-holder">
                            <div class="port-subtitle ">
                                <h3><a href="{{ route('portfolios.show', ['alias' => $portfolio->alias]) }}">{{ $portfolio->title }}</a></h3>
                                <span><a href="#" class="gallery-filter transition2" data-filter=".{{ $portfolio->filter_alias }}">{{ $portfolio->filter_alias }}</a> / <a href="portfolio.html#">Photography</a></span>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <!-- portfolio item end -->
                    <!-- portfolio item -->

                </div>
                <!--portfolio_horizontal_container  end-->
            </div>
            <!--p_horizontal_wrap  end-->
        </div>
        @endif
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>