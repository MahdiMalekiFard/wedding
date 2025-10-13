@use(App\Helpers\Constants)

<div>
    <!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-1" id="hero" wire:ignore>
        <div class="global-carousel" id="heroSlider1" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="false">
            @foreach($sliders as $slider)
                <div class="hero-slider" data-bg-src="assets/img/hero/hero_bg_1_1.png">
                    <div class="hero-shape1_1 shape-mockup movingX" data-bottom="0" data-left="0">
                        <img src="/assets/img/hero/hero_shape_1_1.png" alt="img">
                    </div>
                    <div class="hero-shape1_2 shape-mockup movingX" data-top="-25%" data-right="35%">
                        <img src="/assets/img/hero/hero_shape_1_2.png" alt="img">
                    </div>
                    <div class="container">
                        <div class="row flex-row-reverse">
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-style1">
                                    @if($slider?->subtitle)
                                        <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.5s">{{ $slider?->subtitle }}</span>
                                    @endif
                                    <span class="hero-subtitle2" data-ani="slideindown" data-ani-delay="0.4s">{{ $slider?->description }}</span>
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.1s">{{ $slider?->title }}</h1>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-end">
                                <div class="hero-thumb1" data-ani="slideinleft" data-ani-delay="0.1s">
                                    <img src="{{ $slider?->getFirstMediaUrl('image') }}" alt="sliderbillede">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!--==============================
    About Area
    ==============================-->
    <div class="space">
        <div class="container">
            @php
                $images = $aboutUsPage?->getMedia('images');

                if ($images && $images->count() > 1) {
                    $url = $images[1]->getUrl(); // second
                } else {
                    $url = $images?->first()?->getUrl(); // first
                }
            @endphp
            <div class="row flex-row-reverse align-items-center justify-content-between">
                <div class="col-lg-7 ">
                    <div class="about-thumb mb-5 mb-lg-0 text-lg-end fade_left">
                        <img class="about-img-1" src="{{ $url }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-wrap title-anim">
                        <div class="title-area mb-0">
                            <span class="sub-title">OM OS</span>
                            <h2 class="sec-title home-about-title">{{ $aboutUsPage?->title }}</h2>
                            <p class="sec-text" style="text-align: justify">
                                {{ \Illuminate\Support\Str::words($aboutUsPage?->body, 25) }}
                            </p>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="{{ route('about-us-page') }}" class="btn">OPDAG MERE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Service Area 01
    ==============================-->
    <div class="service-area-1 overflow-hidden" wire:ignore>
        <div class="service-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0" data-left="-5%">
            <img src="/assets/img/normal/service_1-1.png" alt="img">
        </div>
        <div class="container">
            <div class="title-area text-center title-anim">
                <span class="sub-title style2">FIND DIN PLADS</span>
                <h2 class="sec-title">SOCIALE MIXERE</h2>
            </div>
            <div class="row gx-90 gy-40 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card title-anim">
                        <div class="service-card_icon">
                            <img src="/assets/img/icon/service-icon_1-1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5">Bryllupsreception</h4>
                            <span class="service-card_time">03 PM - 04 PM</span>
                            <p class="service-card_text">Søndag den 18. september 2022.
                                One World Observatory,
                                285 Fulton Street</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card title-anim">
                        <div class="service-card_icon">
                            <img src="/assets/img/icon/service-icon_1-2.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5">Ceremonien</h4>
                            <span class="service-card_time">04 PM - 05 PM</span>
                            <p class="service-card_text">Søndag den 18. september 2022. Lymni Restaurant, Francois Street 123</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card title-anim">
                        <div class="service-card_icon">
                            <img src="/assets/img/icon/service-icon_1-3.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5">Festtid</h4>
                            <span class="service-card_time">06 PM - 12 PM</span>
                            <p class="service-card_text">Søndag den 18. september 2022. Rooftoop, Terry Francois Street 123</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==============================
    Video Area
    ==============================-->
    <div class="video-area-1 space-top overflow-hidden" wire:ignore>
        <div class="container">
            <div class="title-area text-center title-anim">
                <span class="sub-title style2">NYD VORES ØJEBLIKKE</span>
                <h2 class="sec-title">KOM MED OS</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-wrap">
                        <div class="service-shape1_1 shape-mockup jump d-lg-block d-none z-index-3" data-top="-10%" data-right="-10%">
                            <img src="/assets/img/normal/video-shape_1-1.png" alt="img">
                        </div>
                        <div class="img-anim">
                            <img src="/assets/img/normal/video_1-2.png" alt="img">
                        </div>
                        <a href="{{ asset('assets/vids/video.mp4') }}" class="play-btn popup-video background-image">
                            <i class="fas fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Counter Area
    ==============================-->
    <div class="counter-area-1" data-bg-src="assets/img/bg/counter-1-bg.png" wire:ignore>
        <div class="counter-wrap1 space counter-item">
            <div class="container">
                <div class="row gy-40 justify-content-lg-between justify-content-center">
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="256">.</span>
                                </h3>
                                <p class="counter-card_text">Bryllupper om året</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="28">.</span>
                                </h3>
                                <p class="counter-card_text">År med fest</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="1369">.</span>
                                </h3>
                                <p class="counter-card_text">Blomsterbuket</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="256">.</span>
                                </h3>
                                <p class="counter-card_text">Solrige dage om året</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space" wire:ignore>
        <div class="container">
            <div class="title-area text-center title-anim">
                <span class="sub-title style2">Vores blogindlæg
                </span>
                <h2 class="sec-title">Seneste nyt fra vores tidsskrift</h2>
            </div>

            @php
                $featured = $blogs->first();
                $secondary = $blogs->skip(1)->take(2);
            @endphp

            <div class="row flex-row-reverse">
                @if($featured)
                    <div class="col-lg-4 mb-30 mb-lg-0">
                        <div class="blog-grid style2 style-big title-anim">
                            <div class="blog-img">
                                <img src="{{ $featured->getFirstMediaUrl('image', Constants::RESOLUTION_854_480) }}" alt="blogbillede">
                            </div>
                            <div class="blog-content">
                                <div class="post-meta-item blog-meta">
                                    <a href="#">{{ $featured->updated_at->format('d M, Y') }}</a>
                                    <a href="#">VED {{ strtoupper($featured->user->name ?? 'ADMIN') }}</a>
                                </div>
                                <h3 class="blog-title"><a href="{{ route('blog-detail-page', ['slug' => $featured?->slug]) }}">{{ $featured->title }}</a></h3>
                                <a href="{{ route('blog-detail-page', ['slug' => $featured?->slug]) }}" class="link-btn style2">Fortsæt læsning <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        @foreach($secondary as $blog)
                            <div class="blog-grid style2 style-small title-anim">
                                <div>
                                    <div class="blog-img">
                                        <img src="{{ $blog->getFirstMediaUrl('image', Constants::RESOLUTION_854_480) }}" alt="blog image">
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta-item blog-meta">
                                        <a href="#">{{ $blog->updated_at->format('d M, Y') }}</a>
                                        <a href="#">VED {{ strtoupper($blog->user->name ?? 'ADMIN') }}</a>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ route('blog-detail-page', ['slug' => $blog?->slug]) }}">{{ $blog->title }}</a></h3>
                                    <a href="{{ route('blog-detail-page', ['slug' => $blog?->slug]) }}" class="link-btn style2">Fortsæt læsning <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!--==============================
    Portfolio Area
    ==============================-->
    <div class="portfolio-area-1 space overflow-hidden" data-bg-src="assets/img/bg/portfolio-1-bg.png" wire:ignore>
        <div class="portfolio-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-right="-10%">
            <img src="/assets/img/normal/portfolio-shape_1-1.png" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-area title-anim">
                        <span class="sub-title style2">DER ER NOGET FOR ALLE</span>
                        <h2 class="sec-title">VELKOMMEN TIL VORES BRYLLUPS & KONCEPTSTUDIO</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 masonary-active">
                @foreach($portfolios as $index => $portfolio)
                    <div class="{{ $index ? 'col-lg-5' : 'col-lg-7' }} filter-item">
                        <div class="portfolio-thumb fade_left">
                            <a class="popup-image icon-btn" href="{{ $portfolio?->getFirstMediaUrl('image') }}"><i class="far fa-eye"></i></a>
                            <div class="img-anim">
                                <img src="{{ $portfolio?->getFirstMediaUrl('image') }}" alt="portfolio">
                            </div>
                            <div class="portfolio-details">
                                <h3><a href="{{ route('portfolio-detail-page', ['slug' => $portfolio?->slug]) }}">{{ $portfolio?->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--==============================
    Testimonial Area
    ==============================-->
    <div class="testimonial-area-1 space-top space-bottom overflow-hidden" wire:ignore>
        <div class="container">
            <div class="title-area title-anim">
                <span class="sub-title style2">Feedbacks</span>
                <h2 class="sec-title">Vores udtalelser</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row global-carousel testi-slider1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                @foreach($opinions as $opinion)
                    <div class="col-lg-4">
                        <div class="testi-box title-anim" data-bg-src="/assets/img/testimonial/testi_box-bg.png">
                            <div class="testi-box_thumb">
                                <img src="{{ $opinion?->getFirstMediaUrl('image') }}" alt="img">
                            </div>
                            <div class="testi-box_profile">
                                <h4 class="testi-box_name">{{ $opinion?->user_name }}</h4>
                                <span class="testi-box_desig">{{ $opinion?->company }}</span>
                            </div>
                            <p class="testi-box_text">“{{ $opinion?->comment }}”</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--==============================
    Reservation Area
    ==============================-->
    <div class="contact-area-1 space overflow-hidden" style="background-image:url('/assets/img/bg/contact-1-bg.png'); background-size:cover; background-position:center;">
        <div class="contact-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-right="-8%">
            <img src="/assets/img/normal/contact-shape_1-1.png" alt="img">
        </div>
        <div class="contact-shape1_2 shape-mockup jump-reverse d-lg-block d-none" data-bottom="-3%" data-left="-12%">
            <img src="/assets/img/normal/contact-shape_1-2.png" alt="img">
        </div>
        <div class="container-fluid p-0">
            <div class="contact-form-area space">
                <div class="title-area text-center title-anim">
                    <span class="sub-title style2 text-white">GIV OS BESKED, OM DU KOMMER
                    </span>
                    <h2 class="sec-title text-white">VI GLÆDER OGSÅ AT SE JER!</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if($successMessage)
                            <div class="alert alert-success text-start" wire:poll.4s="clearSuccess">{{ $successMessage }}</div>
                        @endif
                        <form wire:submit.prevent="submit" class="contact-form" data-livewire-form="1" wire:loading.attr="data-loading" wire:target="submit">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-user"></i>
                                        <input type="text" 
                                            class="form-control style-border @error('name') is-invalid @enderror" 
                                            id="name" 
                                            placeholder="Indtast fulde navn"
                                            wire:model.defer="name"
                                            autocomplete="name"
                                        >
                                    </div>
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-envelope"></i>
                                        <input type="text" 
                                            class="form-control style-border @error('email') is-invalid @enderror" 
                                            id="email" 
                                            placeholder="E-mailadresse"
                                            wire:model.defer="email"
                                            autocomplete="email"
                                        >
                                    </div>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-calendar"></i>
                                        <input type="number"
                                            min="10"
                                            class="form-control style-border @error('guest') is-invalid @enderror"
                                            wire:model.defer="guest"
                                            id="guest"
                                            placeholder="Antal gæster"
                                        >
                                    </div>
                                    @error('guest') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-calendar"></i>
                                        <input type="date"
                                            class="form-control style-border @error('date') is-invalid @enderror"
                                            wire:model.defer="date"
                                            id="date"
                                            placeholder="Dato"
                                            min="{{ now()->toDateString() }}"
                                        >
                                        @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-calendar"></i>
                                        <input type="text"
                                            class="form-control style-border @error('description') is-invalid @enderror"
                                            wire:model.defer="description"
                                            id="description"
                                            placeholder="Tilføj beskrivelse"
                                        >
                                    </div>
                                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="form-btn col-12 text-center">
                                <button type="submit" class="btn" wire:loading.attr="disabled">
                                    <span wire:loading.remove>FORETAG RESERVATION</span>
                                    <span wire:loading>Sender...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
