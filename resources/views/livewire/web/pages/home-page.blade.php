@use(App\Helpers\Constants)

<div>
    <!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-1" id="hero">
        <div class="global-carousel" id="heroSlider1" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="false">
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
                                <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.5s">December 29</span>
                                <span class="hero-subtitle2" data-ani="slideindown" data-ani-delay="0.4s">Skal giftes! Gem datoen:</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.1s">MARY & PETE</h1>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="hero-thumb1" data-ani="slideinleft" data-ani-delay="0.1s">
                                <img src="/assets/img/hero/hero_1_1.png" alt="img">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
                                <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.5s">September 13</span>
                                <span class="hero-subtitle2" data-ani="slideindown" data-ani-delay="0.4s">Skal giftes! Gem datoen:</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.1s">David & Olivia</h1>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="hero-thumb1" data-ani="slideinleft" data-ani-delay="0.1s">
                                <img src="/assets/img/hero/hero_1_2.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    About Area
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row flex-row-reverse align-items-center justify-content-between">
                <div class="col-lg-7 ">
                    <div class="about-thumb mb-5 mb-lg-0 text-lg-end fade_left">
                        <img class="about-img-1" src="/assets/img/normal/about_1-1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-wrap title-anim">
                        <div class="title-area mb-0">
                            <span class="sub-title">OM OS</span>
                            <h2 class="sec-title">En dag at huske</h2>
                            <p class="sec-text" style="text-align: justify">
                                Hver detalje tæller, når I siger ja til hinanden.
                                Vi skaber en uforglemmelig ramme for jeres store dag — elegant, romantisk og helt jeres egen.
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
    <div class="service-area-1 overflow-hidden">
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
    <div class="video-area-1 space-top overflow-hidden">
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
    <div class="counter-area-1" data-bg-src="assets/img/bg/counter-1-bg.png">
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
    <section class="blog-area space">
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
    <div class="portfolio-area-1 space overflow-hidden" data-bg-src="assets/img/bg/portfolio-1-bg.png">
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
                <div class="col-lg-7 filter-item">
                    <div class="portfolio-thumb fade_left">
                        <a class="popup-image icon-btn" href="/assets/img/portfolio/portfolio1_1.png"><i class="far fa-eye"></i></a>
                        <div class="img-anim">
                            <img src="/assets/img/portfolio/portfolio1_1.png" alt="portfolio">
                        </div>
                        <div class="portfolio-details">
                            <p>Miranda & Malena</p>
                            <h3><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets bedste ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 filter-item">
                    <div class="portfolio-thumb fade_left">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_2.png"><i class="far fa-eye"></i></a>
                        <div class="img-anim">
                            <img src="/assets/img/portfolio/portfolio1_2.png" alt="portfolio">
                        </div>
                        <div class="portfolio-details">
                            <p>Miranda & Malena</p>
                            <h3><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets bedste ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 filter-item">
                    <div class="portfolio-thumb fade_left">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_3.png"><i class="far fa-eye"></i></a>
                        <div class="img-anim">
                            <img src="/assets/img/portfolio/portfolio1_3.png" alt="portfolio">
                        </div>
                        <div class="portfolio-details">
                            <p>Miranda & Malena</p>
                            <h3><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets bedste ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Testimonial Area
    ==============================-->
    <div class="testimonial-area-1 space-top space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area title-anim">
                <span class="sub-title style2">Feedbacks</span>
                <h2 class="sec-title">Vores udtalelser</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row global-carousel testi-slider1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                <div class="col-lg-4">
                    <div class="testi-box title-anim" data-bg-src="/assets/img/testimonial/testi_box-bg.png">
                        <div class="testi-box_thumb">
                            <img src="/assets/img/testimonial/testi_1_1.png" alt="img">
                        </div>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Marks Daniel</h4>
                            <span class="testi-box_desig">Forfatter, fotograf, leder</span>
                        </div>
                        <p class="testi-box_text">“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box title-anim" data-bg-src="assets/img/testimonial/testi_box-bg.png">
                        <div class="testi-box_thumb">
                            <img src="/assets/img/testimonial/testi_1_2.png" alt="img">
                        </div>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Louisa Abadie</h4>
                            <span class="testi-box_desig">Forfatter, fotograf, leder</span>
                        </div>
                        <p class="testi-box_text">“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box title-anim" data-bg-src="assets/img/testimonial/testi_box-bg.png">
                        <div class="testi-box_thumb">
                            <img src="/assets/img/testimonial/testi_1_3.png" alt="img">
                        </div>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Andrew Daniel</h4>
                            <span class="testi-box_desig">Forfatter, fotograf, leder</span>
                        </div>
                        <p class="testi-box_text">“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box title-anim" data-bg-src="assets/img/testimonial/testi_box-bg.png">
                        <div class="testi-box_thumb">
                            <img src="/assets/img/testimonial/testi_1_1.png" alt="img">
                        </div>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Marks Daniel</h4>
                            <span class="testi-box_desig">Forfatter, fotograf, leder</span>
                        </div>
                        <p class="testi-box_text">“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box title-anim" data-bg-src="assets/img/testimonial/testi_box-bg.png">
                        <div class="testi-box_thumb">
                            <img src="/assets/img/testimonial/testi_1_2.png" alt="img">
                        </div>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Louisa Abadie</h4>
                            <span class="testi-box_desig">Forfatter, fotograf, leder</span>
                        </div>
                        <p class="testi-box_text">“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box title-anim" data-bg-src="assets/img/testimonial/testi_box-bg.png">
                        <div class="testi-box_thumb">
                            <img src="/assets/img/testimonial/testi_1_3.png" alt="img">
                        </div>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Andrew Daniel</h4>
                            <span class="testi-box_desig">Forfatter, fotograf, leder</span>
                        </div>
                        <p class="testi-box_text">“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Contact Area
    ==============================-->
    <div class="contact-area-1 space overflow-hidden" data-bg-src="/assets/img/bg/contact-1-bg.png">
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
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-user"></i>
                                        <input type="text" class="form-control style-border" name="name" id="name" placeholder="Indtast det fulde navn">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-envelope"></i>
                                        <input type="text" class="form-control style-border" name="email" id="email" placeholder="Indtast e-mailadresse">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-calendar"></i>
                                        <input type="date" class="form-control style-border" name="date" id="date">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-calendar"></i>
                                        <input type="text" class="form-control style-border" name="number" id="number" placeholder="Antal gæster">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-icon-left">
                                        <i class="far fa-calendar"></i>
                                        <input type="text" class="form-control style-border" name="message" id="meal" placeholder="Måltidspræference">
                                    </div>
                                </div>
                            </div>

                            <div class="form-btn col-12 text-center">
                                <button type="submit" class="btn">FORETAG RESERVATION</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
