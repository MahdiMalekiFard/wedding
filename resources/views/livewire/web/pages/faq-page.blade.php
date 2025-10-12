<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="/assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Frequently Asked Questions</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    FAQ Area
    ==============================-->
    @if($faqs->isNotEmpty())
        <div class="space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion-area accordion" id="faqAccordion">
                            @foreach($faqs as $index => $faq)
                                <div class="accordion-card {{ $index ? '' : 'active' }}">
                                    <div class="accordion-header" id="collapse-item-{{ $index + 1 }}">
                                        <button class="accordion-button {{ $index ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $index + 1 }}" aria-expanded="{{ !$index }}" aria-controls="collapse-{{ $index + 1 }}"> {{ $faq?->title }}</button>
                                    </div>
                                    <div id="collapse-{{ $index + 1 }}" class="accordion-collapse collapse {{ $index ? '' : 'show' }}" aria-labelledby="collapse-item-{{ $index + 1 }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">
                                                {{ $faq?->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!--==============================
    Blog Area 03
    ==============================-->
    <section class="blog-area-3 space-bottom">
        <div class="container">
            <div class="title-area text-center title-anim">
                <h2 class="sec-title">Seneste nyt fra vores tidsskrift</h2>
            </div>

            <div class="row gy-4">
                @foreach($latestBlogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <article class="post-single blog-card title-anim">
                            <div class="post-img blog-img">
                                <img src="{{ $blog?->getFirstMediaUrl('image', \App\Helpers\Constants::RESOLUTION_854_480) }}" alt="blog image">
                            </div>
                            <div class="post-contents with-thum-img blog-content">
                                <div class="post-meta-item blog-meta">
                                    <span>{{ $blog->updated_at->format('d M, Y') }}</span>
                                    <span>VED {{ strtoupper($blog->user->name ?? 'ADMIN') }}</span>
                                </div>
                                <h4 class="post-title blog-title"><a href="{{ route('blog-detail-page', ['slug' => $blog?->slug]) }}">{{ $blog->title }}</a></h4>
                                <div class="post-button">
                                    <a href="{{ route('blog-detail-page', ['slug' => $blog?->slug]) }}" class="link-btn style2">Fortsæt læsning <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
