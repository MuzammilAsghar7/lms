@extends(TLAYOUT)

@section('page-title',$blogPost->title)
@section('inline-title',$blogPost->title)
@section('crumb')
    <li><a href="@route('blog')">@lang('default.blog')</a></li>
    <li>@lang('default.blog-post')</li>
@endsection
@section('content')

    <!-- Start Blog Singel Area -->
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="single-inner">
                        @if(!empty($blogPost->cover_photo))
                        <div class="post-thumbnils">
                            <img src="{{ resizeImage($blogPost->cover_photo,1920,1020) }}" alt="#">
                        </div>
                        @endif
                        <div class="post-details">
                            <div class="detail-inner">
                                <!-- post meta -->
                                <ul class="custom-flex post-meta">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-calendar"></i>
                                            {{ \Illuminate\Support\Carbon::parse($blogPost->publish_date)->format('M d,Y') }}
                                        </a>
                                    </li>

                                </ul>
                                <h2 class="post-title">
                                    <a href="javascript:void(0)">{{ $blogPost->title }}</a>
                                </h2>
                                <p>{!! $blogPost->content !!}</p>
                            </div>
                            <!-- Comments -->
                            <div class="post-comments">
                                @if(!empty(setting('general_disqus')))

                                    <div id="disqus_thread"></div>
                                    <script>
                                        /**
                                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                        /*
                                        var disqus_config = function () {
                                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                        };
                                        */
                                        (function() { // DON'T EDIT BELOW THIS LINE
                                            var d = document, s = d.createElement('script');
                                            s.src = 'https://{{ trim(setting('general_disqus')) }}.disqus.com/embed.js';
                                            s.setAttribute('data-timestamp', +new Date());
                                            (d.head || d.body).appendChild(s);
                                        })();
                                    </script>
                                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 col-md-12 col-12">
                    <div class="sidebar">
                        <!-- Single Widget -->
                        <div class="widget search-widget">
                            <h5 class="widget-title">@lang('default.search')</h5>
                            <form method="get" action="{{ route('blog') }}">
                                <input type="text" name="q" placeholder="@lang('default.search')...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>
                        <!--/ End Single Widget -->

                        <!-- Single Widget -->
                        <div class="widget categories-widget">
                            <h5 class="widget-title">@lang('default.categories')</h5>
                            <ul class="custom">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('blog') }}?category={{ $category->id }}">{{ $category->name }} <span>{{ $category->blogPosts()->count() }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="widget popular-feeds">
                            <h5 class="widget-title">{{ __t('recent-posts') }}</h5>
                            <div class="popular-feed-loop">
                                @foreach(\App\BlogPost::whereDate('publish_date','<=',\Illuminate\Support\Carbon::now()->toDateTimeString())->where('enabled',1)->orderBy('publish_date','desc')->limit(5)->get() as $post)

                                    <div class="single-popular-feed"  @if(empty($post->cover_photo)) style="padding-left: 0px" @endif >
                                        @if(!empty($post->cover_photo))
                                            <div class="feed-img">
                                                <a href="{{ route('blog.post',['blogPost'=>$post->id,'slug'=>safeUrl($post->title)]) }}"><img src="{{ resizeImage($post->cover_photo,300,300) }}"
                                                                                                                                              alt="#"></a>
                                            </div>
                                        @endif
                                        <div class="feed-desc">
                                            <h6 class="post-title"><a  href="{{ route('blog.post',['blogPost'=>$post->id,'slug'=>safeUrl($post->title)]) }}">{{ $post->title }}</a>
                                            </h6>
                                            <span class="time"><i class="lni lni-calendar"></i>{{  \Carbon\Carbon::parse($post->publish_date)->format('d M, Y') }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--/ End Single Widget -->


                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- End Blog Singel Area -->




    @if(false)
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        @if(!empty($blogPost->cover_photo))
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset($blogPost->cover_photo) }}" alt="">
                        </div>
                        @endif
                        <div class="blog_details">
                            <h2>{{ $blogPost->title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                @if($blogPost->admin->user()->exists())
                                <li><a href="#"><i class="fa fa-user"></i>{{ $blogPost->admin->user->name }}</a></li>
                                @endif
                             </ul>
                            <p>{!! $blogPost->content !!}</p>
                        </div>
                    </div>

                    @if(!empty(setting('general_disqus_shortcode')))
                        <div class="comments-area">


                            <div id="disqus_thread"></div>
                            <script>
                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://{{ trim(setting('general_disqus_shortcode')) }}.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                        </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form method="get" action="{{ route('blog') }}">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input  name="q"  type="text" class="form-control" placeholder='@lang('default.search')'
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = '@lang('default.search')'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">@lang('default.search')</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">@lang('default.category')</h4>
                            <ul class="list cat-list">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>{{ $category->name }}</p>
                                            <p>&nbsp;({{ $category->blogPosts()->count() }})</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">{{ __t('recent-posts') }}</h3>
                            @foreach(\App\BlogPost::whereDate('publish_date','<=',\Illuminate\Support\Carbon::now()->toDateTimeString())->where('enabled',1)->orderBy('publish_date','desc')->limit(5)->get() as $post)
                                <div class="media post_item">
                                    @if(!empty($post->cover_photo))
                                        <img class="recent-blog-img" src="{{ asset($post->cover_photo) }}" alt="">
                                    @endif
                                    <div class="media-body">
                                        <a href="{{ route('blog.post',['blogPost'=>$post->id,'slug'=>safeUrl($post->title)]) }}">
                                            <h3>{{ $post->title }}</h3>
                                        </a>
                                        <p>{{  \Carbon\Carbon::parse($post->publish_date)->format('F d, Y') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
    @endif


@endsection
