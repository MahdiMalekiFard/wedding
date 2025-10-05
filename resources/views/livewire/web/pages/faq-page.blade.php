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
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-area accordion" id="faqAccordion">

                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> Er middelhavsgin god?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Aliquam turpis odio varius sagittis et himenaeos, iaculis praesent sed luctus sapien eu potenti, vivamus blandit lobortis vehicula interdum. Ornare himenaeos volutpat posuere conubia augue netus ullamcorper id neque lectus commodo lobortis nullam, nibh sagittis dignissim porta viverra vulputate tellus porttitor euismod parturient senectus ridiculus.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> Hvilke faciliteter og faciliteter tilbyder jeres virksomhed?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Aliquam turpis odio varius sagittis et himenaeos, iaculis praesent sed luctus sapien eu potenti, vivamus blandit lobortis vehicula interdum. Ornare himenaeos volutpat posuere conubia augue netus ullamcorper id neque lectus commodo lobortis nullam, nibh sagittis dignissim porta viverra vulputate tellus porttitor euismod parturient senectus ridiculus.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Tilbyder du personlige festtjenester?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Aliquam turpis odio varius sagittis et himenaeos, iaculis praesent sed luctus sapien eu potenti, vivamus blandit lobortis vehicula interdum. Ornare himenaeos volutpat posuere conubia augue netus ullamcorper id neque lectus commodo lobortis nullam, nibh sagittis dignissim porta viverra vulputate tellus porttitor euismod parturient senectus ridiculus.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4"> Er middelhavsgin god?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Aliquam turpis odio varius sagittis et himenaeos, iaculis praesent sed luctus sapien eu potenti, vivamus blandit lobortis vehicula interdum. Ornare himenaeos volutpat posuere conubia augue netus ullamcorper id neque lectus commodo lobortis nullam, nibh sagittis dignissim porta viverra vulputate tellus porttitor euismod parturient senectus ridiculus.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5"> Tilbyder du personlige festtjenester?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Aliquam turpis odio varius sagittis et himenaeos, iaculis praesent sed luctus sapien eu potenti, vivamus blandit lobortis vehicula interdum. Ornare himenaeos volutpat posuere conubia augue netus ullamcorper id neque lectus commodo lobortis nullam, nibh sagittis dignissim porta viverra vulputate tellus porttitor euismod parturient senectus ridiculus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area 03
    ==============================-->
    <section class="blog-area-3 space-bottom">
        <div class="container">
            <div class="title-area text-center title-anim">
                <span class="sub-title style2">Blogindlæg
                </span>
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
