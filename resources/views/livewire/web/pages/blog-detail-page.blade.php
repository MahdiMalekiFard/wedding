@use("App\Helpers\Constants")

<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $blog->title }}</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active"><a href="{{ route('blog-page') }}">Blogliste</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container page-layout right-sidebar">
            <div class="row gx-40 blog-page-with-sidebar">
                <div class="col-xxl-8 col-lg-7">
                    <div class="row gy-4 all-posts-wrapper">
                        <div class="col-12 single-post-item">
                            <article class="post-details blog-single">
                                <div class="post-img blog-img">
                                    <img class="w-100" src="{{ $blog->getFirstMediaUrl('image', Constants::RESOLUTION_1280_720) }}" alt="blogbillede">
                                </div>
                                <div class="post-contents with-thum-img blog-content">
                                    <div class="post-meta-item blog-meta">
                                        <span>{{ $blog?->updated_at->format('d M, Y') }} - </span>
                                        <span>VED {{ strtoupper($blog?->user->name ?? 'ADMIN') }}</span>
                                    </div>
                                    <h3 class="post-title blog-title">{{ $blog->title }}</h3>
                                    <div class="post-content blog-text">
                                        <p>{{ $blog->description }}</p>
                                    </div>
                                    <div class="post-content blog-text">
                                        <p>{!! $blog->body !!}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5 sidebar-widget-area">
                    <aside class="sidebar-sticky-area sidebar-area">
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
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                @foreach($blog->tags ?? [] as $tag)
                                    <a href="{{ route('blog-page', ['tag' => $tag?->name]) }}">{{ $tag?->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>
