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
                        <h1 class="breadcumb-title">Gallerier</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Gallerier</li>
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
            <div class="row gy-4 filter-active mb-60">
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <a href="{{ route('gallery-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">
                                <img src="/assets/img/gallery/gallery-page1.png" alt="gallerikategori">
                            </a>
                        </div>
                        <div class="project-card-details">
                            <h3 class="title"><a href="{{ route('gallery-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Ceremoniøjeblikke</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <a href="{{ route('gallery-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">
                                <img src="/assets/img/gallery/gallery-page2.png" alt="gallerikategori">
                            </a>
                        </div>
                        <div class="project-card-details">
                            <h3 class="title"><a href="{{ route('gallery-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Sted og indretning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <a href="{{ route('gallery-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">
                                <img src="/assets/img/gallery/gallery-page3.png" alt="gallerikategori">
                            </a>
                        </div>
                        <div class="project-card-details">
                            <h3 class="title"><a href="{{ route('gallery-detail-page', ['slug' => 'Årets-bedste-ukrudtsrydning']) }}">Gæster og følelser</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#">Næste <i class="fas fa-angle-double-right"></i>
                        </a></li>
                </ul>
            </div>
{{--            <div>--}}
{{--                <ul>--}}
{{--                    {{ $blogs->onEachSide(1)->links() }}--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </section>
</div>
