
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
                            <a href="{{ route('portfolios.show', ['alias'=>$portfolio->alias]) }}"  class="widget-posts-img"><img src="/storage/{{ $portfolio->img }}" class="respimg" alt="{{ $portfolio->img }}"></a>
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
            <h3>Категории</h3>
            <div class="clearfix"></div>
            <ul class="tagcloud">
                @if(!$categories->isEmpty())
                    @foreach ($categories as $categories)
                        <li><a href='{{ route('blogCat', ['cat_alias'=>$categories->alias]) }}' class="transition link">{{ $categories->title }}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>
