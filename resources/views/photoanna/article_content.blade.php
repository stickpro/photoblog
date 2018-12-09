<div class="content-holder elem scale-bg2 transition3" >
    <div class="fixed-title"><span>Journal</span></div>
    <!--=============== content  ===============-->
    <div class="content">
        <!--section  page title   -->
        <section class="parallax-section">
            <div class="overlay"></div>
            <div class="bg" style="background-image:url({{asset(env('THEME'))}}/images/bg/45.jpg)" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"></div>
            <div class="container">
                <h2>Our Journal</h2>
                <div class="separator"></div>
                <h3 class="subtitle">Duis lorem urna, porta gravida</h3>
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
                        <div class="post-author">
                            <div class="author-img">
                                <img alt='' src="images/blog/1.jpeg">
                            </div>
                            <div class="author-content">
                                <h5><a href="#" title="Posts by {{ $article->user->name }}" rel="author">{{ $article->user->name }}</a></h5>
                                <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket; from the lower end the rope was traced half-way along the pole’s length, and firmly secured so, with intertwistings of twine.</p>
                            </div>
                        </div>
                        <div class="content-nav blg-nav">
                            <ul>


                                <li><a href="blog-single.html" ><i class="fa fa-long-arrow-left"></i></a></li>
                                <li><span>/</span></li>
                                <li><a href="blog-single.html" ><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                            <div class="p-all">
                                <a href="blog.html" ><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                        <div class="comments-holder">
                            <h3>Comments <span>(3)</span></h3>
                            <ul class="commentlist clearafix">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-author">
                                            <img alt='' src='images/blog/users/1.jpg' width="50" height="50">
                                        </div>
                                        <cite class="fn"><a href="blog-single.html#">Mery</a></cite>
                                        <div class="comment-meta">
                                            <h6><a href="blog-single.html#">January 02, 2014 at 07:39 am</a> / <a class='comment-reply-link' href="blog-single.html#">Reply</a></h6>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <!--comment body-->
                                            <div class="comment-body">
                                                <div class="comment-author">
                                                    <img alt='' src='images/blog/users/2.jpg' width="50" height="50">
                                                </div>
                                                <cite class="fn"><a href="blog-single.html#">Audrey</a></cite>
                                                <div class="comment-meta">
                                                    <h6><a href="blog-single.html#">January 18, 2014 at 13:29 am</a> / <a class='comment-reply-link' href="blog-single.html#">Reply</a></h6>
                                                </div>
                                                <p>Hi There,</p>
                                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment">
                                    <!--comment body-->
                                    <div class="comment-body">
                                        <div class="comment-author">
                                            <img alt='' src='images/blog/users/1.jpg' width="50" height="50">
                                        </div>
                                        <cite class="fn"><a href="blog-single.html#">Lisa</a></cite>
                                        <div class="comment-meta">
                                            <h6><a href="blog-single.html#">January 22, 2014 at 03:19 am</a> / <a class='comment-reply-link' href="blog-single.html#">Reply</a></h6>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-form-holder">
                            <h3>Leave A Comment</h3>
                            <div id="respond" class="clearafix">
                                <div class="comment-reply-form">
                                    <form action="blog-single.html#" method="post" id="commentform" class="form-horizontal" name="commentform">
                                        <div class="comment-form-author control-group">
                                            <div class="controls">
                                                <input id="author" name="author" type="text" value="" size="40" aria-required="true" />
                                            </div>
                                            <label class="control-label" for="author">Name </label>
                                        </div>
                                        <div class="comment-form-email control-group">
                                            <div class="controls">
                                                <input id="email" name="email" type="text" value="" size="40" aria-required="true" />
                                            </div>
                                            <label class="control-label" for="email">Email </label>
                                        </div>
                                        <div class="comment-form-comment control-group">
                                            <div class="controls">
                                                                <textarea id="comment" name="comment" cols="50" rows="8" aria-required="true" placeholder="Your comment here..">
                                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-submit">
                                            <div class="controls">
                                                <button class="transition button" type="submit">Post Comment</button>
                                                <input type='hidden' name='comment_post_ID' value='30' id='comment_post_ID'> <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--end respond-->
                        </div>
                            @endif
                    </div>
                    <!--================= sidebar  ================-->
                    <div class="col-md-4">
                        <div class="sidebar">
                            <!-- widget -->
                            <div class="widget">
                                <div class="searh-holder">
                                    <form action="blog-single.html#" class="searh-inner">
                                        <input name="se" id="se" type="text" class="search" placeholder="Search.." value="Search..." />
                                        <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!-- widget -->
                            <div class="widget">
                                <h3>About Author</h3>
                                <div class="clearfix"></div>
                                <img src="images/team/4.jpg" class="respimg waimg" alt="">
                                <p>Etiam in nulla arcu, ut vehicula velit. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
                            </div>
                            <!-- widget -->
                            <div class="widget">
                                <h3>Last posts</h3>
                                <ul class="widget-posts">
                                    <li class="clearfix">
                                        <a href="blog-single.html"  class="widget-posts-img"><img src="images/bg/39.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="blog-single.html#" title="">Vivamus dapibus rutrum</a>
                                            <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="blog-single.html"  class="widget-posts-img"><img src="images/bg/40.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="blog-single.html#" title=""> Integer sagittis</a>
                                            <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="blog-single.html"  class="widget-posts-img"><img src="images/bg/41.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="blog-single.html#" title="">In porta sem</a>
                                            <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="blog-single.html"  class="widget-posts-img"><img src="images/bg/42.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="blog-single.html#" title="">Praesent aliquet tortor</a>
                                            <span class="widget-posts-date"> 2 Mar 14.42 </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- widget -->
                            <div class="widget">
                                <h3>Tags</h3>
                                <div class="clearfix"></div>
                                <ul class="tagcloud">
                                    <li><a href='blog-single.html#' class="transition link">Portfolio</a></li>
                                    <li><a href='blog-single.html#' class="transition link">Tag</a></li>
                                    <li><a href='blog-single.html#' class="transition link">Demo</a></li>
                                    <li><a href='blog-single.html#' class="transition link">Blog</a></li>
                                    <li><a href='blog-single.html#' class="transition link">Photography</a></li>
                                    <li><a href='blog-single.html#' class="transition link">Web desighn</a></li>
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
                                    <li class="cat-item"><a href="blog-single.html#">Standard</a> (3)</li>
                                    <li class="cat-item"><a href="blog-single.html#">Video</a> (6)</li>
                                    <li class="cat-item"><a href="blog-single.html#">Gallery</a> (12)</li>
                                    <li class="cat-item"><a href="blog-single.html#">Quotes</a> (4)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>