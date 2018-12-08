<div class="col-md-4">
    <div class="sidebar">
        <div class="widget">
            <h3>{{ Lang::get('ru.about_autor') }}</h3>
            <div class="clearfix"></div>
            <img src="{{asset(env('THEME'))}}/images/team/4.jpg" class="respimg waimg" alt="">
            <p>Всем привет! Я Аня, мечтательница, фотограф и просто хороший человек) Это мой блог, а вернее маленький мирок, в котором я буду делится со всеми вами своими мыслями и впечатлениями</p>
        </div>
        <!-- widget -->
        <div class="widget">
            <h3>{{ Lang::get('ru.latest_project') }}</h3>
            <ul class="widget-posts">

                @if(!$portfolios->isEmpty())
                    @foreach($portfolios as $portfolio)
                        <li class="clearfix">
                            <a href="{{ route('portfolios.show', ['alias'=>$portfolio->alias]) }}"  class="widget-posts-img"><img src="{{asset(env('THEME'))}}/images/bg/{{ $portfolio->img->mini }}" class="respimg" alt="{{ $portfolio->img->mini }}"></a>
                            <div class="widget-posts-descr">
                                <a href="{{ route('portfolios.show', ['alias'=>$portfolio->alias]) }}" title="{{ $portfolio->title }}">{{ $portfolio->title }}</a>
                                <span class="widget-posts-date"> {{ $portfolio->created_at->format('j M Y')}}</span>
                            </div>
                        </li>

                    @endforeach
                @endif
            </ul>
        </div>
        <!-- widget -->
        <div class="widget">
            <h3>Tags</h3>
            <div class="clearfix"></div>
            <ul class="tagcloud">
                <li><a href='blog.html#' class="transition link">Portfolio</a></li>
                <li><a href='blog.html#' class="transition link">Tag</a></li>
                <li><a href='blog.html#' class="transition link">Demo</a></li>
                <li><a href='blog.html#' class="transition link">Blog</a></li>
                <li><a href='blog.html#' class="transition link">Photography</a></li>
                <li><a href='blog.html#' class="transition link">Web desighn</a></li>
            </ul>
        </div>
        <div class="widget">
            <h3>Banner</h3>
            <div class="clearfix"></div>
            <img src="images/bg/banner.jpg" alt="" class="respimg">
        </div>
        <!-- widget -->
        <div class="widget">
            <h3>Categories</h3>
            <div class="clearfix"></div>
            <ul>
                <li class="cat-item"><a href="blog.html#">Standard</a> (3)</li>
                <li class="cat-item"><a href="blog.html#">Video</a> (6)</li>
                <li class="cat-item"><a href="blog.html#">Gallery</a> (12)</li>
                <li class="cat-item"><a href="blog.html#">Quotes</a> (4)</li>
            </ul>
        </div>
    </div>
</div>