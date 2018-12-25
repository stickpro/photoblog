<div class="content-holder elem scale-bg2 transition3" >
    <div class="fixed-title"><span>Journal</span></div>
    <!--=============== content  ===============-->
    <div class="content">
        <!--section  page title   -->
        <section class="parallax-section">
            <div class="overlay"></div>
            <div class="bg" style="background-image:url({{asset(env('THEME'))}}/images/bg/22.jpg)" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"></div>
            <div class="container">
                <h2>Our Journal</h2>
                <div class="separator"></div>
                <h3 class="subtitle">Duis lorem urna, porta gravida</h3>
            </div>
            <a class="custom-scroll-link sect-scroll" href="#sec1"><i class="fa fa-angle-double-down"></i></a>
        </section>
        <!--section  page title end  -->
        <div class="sections-bg"></div>
        <!--section    -->
        <section id="sec1">
            <div class="container column-container">
                <!--================= articles   ================-->
                <div class="row">
                    <div class="col-md-7">
                        <!-- 1 -->
                        @if ($articles)
                            @foreach($articles as $article)

                                <article>
                                    <ul class="blog-title">
                                        <li><a href="{{ route('blog.show',['alias'=>$article->alias]) }}" class="tag">{{ $article->created_at->format('j F Y')}}</a></li>
                                        <li> - </li>
                                        <li><a href="{{ route('blogCat', ['cat_alias'=>$article->category->alias]) }}" class="tag">{{ $article->category->title }}</a></li>
                                    </ul>
                                    <div class="blog-media">
                                        <div class="box-item">
                                            <a href="{{ route('blog.show',['alias'=>$article->alias]) }}" >
                                                <span class="overlay"></span>
                                                <img src="/storage/{{ $article->img  }}"  alt="" class="respimg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3>{{ $article->title }}</h3>
                                        {!! $article->description !!}
                                        <a href="{{ route('blog.show',['alias'=>$article->alias]) }}" class="ajax btn"><span>{{ Lang::get('ru.read_more') }}</span> <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </article>
                            @endforeach
                        <div class="clearfix"></div>
                        <!-- pagination   -->
                                @if($articles->lastPage() > 1)
                        <div class="pagination-blog">

                                    @if($articles->currentPage() !== 1)
                                    <a href="{{ $articles->url($articles->currentPage() -1 ) }}" class="prevposts-link transition"><i class="fa fa-chevron-left"></i></a>
                                    @endif
                                    @for($i = 1; $i <= $articles->lastPage(); $i++ )
                                        @if($articles->currentPage() == $i)
                                            <a  class="blog-page current-page transition">{{ $i }}</a>
                                        @else
                                             <a href="{{ $articles->url($i) }}" class="blog-page transition">{{ $i }}</a>
                                        @endif
                                    @endfor

                                    @if($articles->currentPage() !== $articles->lastPage())
                                            <a href="{{ $articles->url($articles->currentPage() +1 ) }}" class="prevposts-link transition"><i class="fa fa-chevron-right"></i></a>
                                    @endif

                        </div>
                                @endif
                    </div>


                    @else
                        {!!  Lang::get('ru.articles_null') !!}
                    @endif
                    <!--================= sidebar  ================-->

