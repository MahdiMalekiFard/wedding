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
                        <li><a href="{{ route('home') }}">Hjem</a></li>
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
                        @if($blogs->isNotEmpty())
                            @foreach($blogs as $index => $blog)
                                <div class="col-12 single-post-item">
                                    <article class="post-single blog-card {{ $index ? 'style2' : '' }}">
                                        <div class="post-img blog-img">
                                            <img src="{{ $blog?->getFirstMediaUrl('image', $index ? Constants::RESOLUTION_854_480 : Constants::RESOLUTION_1280_720) }}" alt="blog image">
                                        </div>
                                        <div class="post-contents with-thum-img blog-content">
                                            <div class="post-meta-item blog-meta">
                                                <a href="#">{{ $blog?->updated_at->format('d M, Y') }}</a>
                                                <a href="#">VED {{ strtoupper($blog?->user->name ?? 'ADMIN') }}</a>
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
                                                <a href="{{ route('blog-detail-page', ['slug' => $blog?->slug]) }}" class="link-btn style2">Fortsæt læsning <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 single-post-item">
                                Ingen relaterede blogs fundet!
                            </div>
                        @endif
                    </div>
                    <div>
                        <ul>
                            {{ $blogs->onEachSide(1)->links() }}
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5 sidebar-widget-area">
                    <aside class="sidebar-sticky-area sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Søg her">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Kategorier</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('blog-page', ['category_id' => $category?->id]) }}">{{ $category?->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Seneste indlæg</h3>
                            <div class="recent-post-wrap">
                                @foreach($recentBlogs as $recentBlog)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <img src="{{ $recentBlog?->getFirstMediaUrl('image', Constants::RESOLUTION_100_SQUARE) }}" alt="tommelfingerbillede">
                                        </div>
                                        <div class="media-body">
                                            <div class="recent-post-meta">
                                                <span><i class="far fa-clock"></i> {{ $recentBlog?->updated_at->format('d M, Y') }}</span>
                                            </div>
                                            <h4 class="post-title">
                                                <a class="text-inherit" href="{{ route('blog-detail-page', ['slug' => $recentBlog?->slug]) }}">
                                                    {{ \Illuminate\Support\Str::words($recentBlog?->title, 6) }}
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Populære tags</h3>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                    <a href="{{ route('blog-page', ['tag' => $tag?->name]) }}">{{ $tag?->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
