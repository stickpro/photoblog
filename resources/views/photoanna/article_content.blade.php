<div class="content-holder elem scale-bg2 transition3" >
    <div class="fixed-title"><span>Блог</span></div>
    <!--=============== content  ===============-->
    <div class="content">
        <!--section  page title   -->
        <section class="parallax-section">
            <div class="overlay"></div>
            <div class="bg" style="background-image:url({{asset(env('THEME'))}}/images/bg/45.jpg)" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"></div>
            <div class="container">
                <h2>{{ $article->title }}</h2>
                <div class="separator"></div>
                <h3 class="subtitle">{!! $article->description !!}</h3>
            </div>
            <a class="custom-scroll-link sect-scroll" href="#sec1"><i class="fa fa-angle-double-down"></i></a>
        </section>
        <!--section  page title end  -->
        <div class="sections-bg"></div>

        <section id="sec1">
            <div class="container column-container">
                <div class="row">
                    <div class="col-md-7">
                        @if ($article)
                        <article>
                            <ul class="blog-title">
                                <li><a href="{{ route('blog.show',['alias'=>$article->alias]) }}" class="tag">{{ $article->created_at->format('j F Y')}}</a></li>
                                <li> - </li>
                                <li><a href="{{ route('blogCat', ['cat_alias'=>$article->category->alias]) }}" class="tag">{{ $article->category->title }}</a></li>
                            </ul>
                            <div class="blog-media">
                                <div class="custom-slider-holder">
                                    <div class="custom-slider owl-carousel">
                                        <div class="item">
                                            <img src="{{asset(env('THEME'))}}/images/bg/{{ $article->img->max }}"  class="respimg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset(env('THEME'))}}/images/bg/{{ $article->img->mini }}"  class="respimg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset(env('THEME'))}}/images/bg/{{ $article->img->path }}"  class="respimg" alt="">
                                        </div>
                                    </div>
                                    <div class="customNavigation">
                                        <a class="prev-slide"><i class="fa fa-angle-left"></i></a>
                                        <a class="next-slide"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3>{{ $article->title }}</h3>
                                    {!! $article->text !!}
                            </div>
                        </article>
                        @endif
                        <div class="post-author">
                            <div class="author-img">
                                <img alt='' src="{{asset(env('THEME'))}}/images/blog/1.jpeg">
                            </div>
                            <div class="author-content">
                                <h5><a href="#" title="Posts by {{ $article->user->name }}" rel="author">{{ $article->user->name }}</a></h5>
                                <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket; from the lower end the rope was traced half-way along the pole’s length, and firmly secured so, with intertwistings of twine.</p>
                            </div>
                        </div>
                        <div class="content-nav blg-nav">
                            <ul>
                                @if ($previous)
                                <li><a href="{{ route('blog.show',['alias'=>$previous->alias]) }}" data-toggle="tooltip" data-original-title="Предыдущая статья" ><i class="fa fa-long-arrow-left"></i></a></li>
                                @endif
                                <li><span>/</span></li>
                                @if ($next)
                                <li><a href="{{ route('blog.show',['alias'=>$next->alias]) }}" data-toggle="tooltip" data-original-title="Следующая статья" ><i class="fa fa-long-arrow-right"></i></a></li>
                                @endif
                            </ul>
                            <div class="p-all">
                                <a href="{{ route('blog.index') }}" ><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                        <div class="comments-holder">
                            <h3>Комментарии</h3>

                            <div id="mc-container"></div>

                            <script type="text/javascript">
                                cackle_widget = window.cackle_widget || [];
                                cackle_widget.push({widget: 'Comment', id: 63611});
                                (function() {
                                    var mc = document.createElement('script');
                                    mc.type = 'text/javascript';
                                    mc.async = true;
                                    mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
                                })();
                            </script>
                        </div>


                    </div>
                    <!--================= sidebar  ================-->