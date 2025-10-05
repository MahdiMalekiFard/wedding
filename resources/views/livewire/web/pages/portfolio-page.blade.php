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
                        <h1 class="breadcumb-title">Porteføljer</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Porteføljer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Portfolio Area
    ==============================-->
    <section class="portfolio-page space">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="project-tab tab-menu1 filter-menu-active">--}}
{{--                        <button data-filter="*" class="filter-btn active">--}}
{{--                            Vis alle--}}
{{--                        </button>--}}
{{--                        <button data-filter=".cat1" class="filter-btn">--}}
{{--                            Bekendtgørelse--}}
{{--                        </button>--}}
{{--                        <button data-filter=".cat2" class="filter-btn">--}}
{{--                            Planlægger--}}
{{--                        </button>--}}
{{--                        <button data-filter=".cat3" class="filter-btn">--}}
{{--                            Historie--}}
{{--                        </button>--}}
{{--                        <button data-filter=".cat4" class="filter-btn">--}}
{{--                            Bryllup--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row gy-4 filter-active mb-60">
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_1.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_2.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_3.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_4.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_5.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_6.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="{{ route('portfolio-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Årets bedste ukrudtsrydning</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="blog.html">01</a></li>
                    <li><a href="blog.html">02</a></li>
                    <li><a href="blog.html">03</a></li>
                    <li><a href="blog.html">Next <i class="fas fa-angle-double-right"></i>
                        </a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
