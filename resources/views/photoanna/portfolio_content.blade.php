<div class="content-holder elem scale-bg2 transition3">
    <!--page title -->
    @if($portfolio)
    <div class="fixed-title"><span>{{ $portfolio->title }}</span></div>
    <!--page title end -->
    <!--=============== content ===============-->
    <div class="content full-height">
        <!--=============== description column  ===============-->
        <div class="fixed-info-container">
            <h3>{{ $portfolio->title }}</h3>
            <div class="separator"></div>
            <div class="clearfix"></div>
            <p>{{ $portfolio->text }}</p>
            <h4>Информация</h4>
            <ul class="project-details">
                <li>
                    <i class="fa fa-bicycle"></i>
                    <div class="pd-holder">
                        <h5>Категория :  <a href="#">{{ $portfolio->filter_alias }} </a> </h5>
                    </div>
                </li>
                <li>
                    <i class="fa fa-calendar"></i>
                    <div class="pd-holder">
                        <h5>Дата :  <a href="#">{{ $portfolio->created_at->format('j F Y')}}</a></h5>
                    </div>
                </li>
                <li>
                    <i class="fa fa-paw"></i>
                    <div class="pd-holder">
                        <h5>Модель  :  <a href="#">{{ $portfolio->model }}</a></h5>
                    </div>
                </li>
                <li>
                    <i class="fa fa-map-o"></i>
                    <div class="pd-holder">
                        <h5>Локация :  <a href="#">{{ $portfolio->location }}</a></h5>
                    </div>
                </li>
            </ul>
            <a href="#" class=" btn anim-button   trans-btn   transition  fl-l" target="_blank"><span>Заказать такую</span><i class="fa fa-eye"></i></a>
            <div class="content-nav">
                <ul>
                    @if ($previous)
                        <li><a href="{{ route('portfolios.show',['alias'=>$previous->alias]) }}" data-toggle="tooltip" data-original-title="Предыдущая статья" ><i class="fa fa-long-arrow-left"></i></a></li>
                    @endif
                    <li><span>/</span></li>
                    @if ($next)
                        <li><a href="{{ route('portfolios.show',['alias'=>$next->alias]) }}" data-toggle="tooltip" data-original-title="Следующая статья" ><i class="fa fa-long-arrow-right"></i></a></li>
                    @endif
                </ul>
                <div class="p-all">
                    <a href="{{ route('portfolios.index') }}" ><i class="fa fa-th-large"></i></a>
                </div>
            </div>
        </div>
        <div class="resize-carousel-holder vis-info">
            <div id="gallery_horizontal" class="gallery_horizontal owl_carousel demo-gallery">
                @foreach ($portfolio->gallery as $i => $photo)
                    <div class="horizontal_item">
                        <div class="zoomimage">
                            <img src="/storage/{{ $photo['name'] }}" class="intense" alt="">
                            <i class="fa fa-expand"></i>
                        </div>
                        <img src="/storage/{{ $photo['name'] }}" alt="{{ $photo['title'] }}">
                        @if($photo['title'])
                        <div class="show-info">
                                <span>Название работы</span>
                                <div class="tooltip-info">
                                    <h5>{{ $photo['title'] }}</h5>
                                </div>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <!--  navigation -->
            <div class="customNavigation">
                <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
            </div>
            <!--  navigation end-->
        </div>
        <!-- portfolio  Images  end-->
    </div>
    @endif
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>