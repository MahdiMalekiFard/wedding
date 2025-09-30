@use(App\Helpers\Constants)

<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Blog</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <div class="blog-area space-top space-extra-bottom">
        <div class="container page-layout right-sidebar">
            <div class="row gx-40 blog-page-with-sidebar">
                <div class="col-xxl-8 col-lg-7">
                    <div class="row gy-4 all-posts-wrapper">
                        @foreach($blogs as $index => $blog)
                            <div class="col-12 single-post-item">
                                <article class="post-single blog-card {{ $index ? 'style2' : '' }}">
                                    <div class="post-img blog-img">
                                        <img src="{{ $blog?->getFirstMediaUrl('image', $index ? Constants::RESOLUTION_854_480 : Constants::RESOLUTION_1280_720) }}" alt="blog image">
                                    </div>
                                    <div class="post-contents with-thum-img blog-content">
                                        <div class="post-meta-item blog-meta">
                                            <a href="#">{{ $blog?->updated_at->format('d M, Y') }}</a>
                                            <a href="#">BY {{ strtoupper($blog?->user->name ?? 'ADMIN') }}</a>
                                        </div>
                                        <h3 class="post-title blog-title">
                                            <a href="{{ route('blog-detail-page', ['slug' => $blog?->slug]) }}">
                                                {{ $blog?->title }}
                                            </a>
                                        </h3>
                                        @if($index === 0)
                                            <div class="post-content blog-text">
                                                <p>
                                                    {!! \Illuminate\Support\Str::words($blog?->body, 45) !!}
                                                </p>
                                            </div>
                                        @endif
                                        <div class="post-button">
                                            <a href="{{ route('blog-detail-page', ['slug' => $blog?->slug]) }}" class="link-btn style2">Continue Reading <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">Next <i class="fas fa-angle-double-right"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5 sidebar-widget-area">
                    <aside class="sidebar-sticky-area sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html">Latest News</a>
                                </li>
                                <li>
                                    <a href="blog.html">Today Best Posts</a>
                                </li>
                                <li>
                                    <a href="blog.html">Design Trend</a>
                                </li>
                                <li>
                                    <a href="blog.html">UI/UX Tips</a>
                                </li>
                                <li>
                                    <a href="blog.html">Brand Design</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Latest Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post1.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-clock"></i> SEP 25, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Glamour Guide: Beauty Tips and Trends"</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post2.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-clock"></i> SEP 25, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Glamour Guide: Beauty Tips and Trends"</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post3.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-clock"></i> SEP 25, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Glamour Guide: Beauty Tips and Trends"</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">DREAM</a>
                                <a href="blog.html">RINGS</a>
                                <a href="blog.html">BIRTHDAY</a>
                                <a href="blog.html">NEAKLACE</a>
                                <a href="blog.html">CHAIN</a>
                                <a href="blog.html">BRACLET</a>
                            </div>
                        </div>

                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
