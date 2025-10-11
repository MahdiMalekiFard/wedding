@php
    use App\Helpers\Constants;
@endphp

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
                        <h1 class="breadcumb-title">{{ $portfolio?->title }}</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Porteføljedetaljer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Portfolio Area
    ==============================-->
    <section class="portfolio-details-page space">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-img fade_left img-anim">
                        <img class="w-100" src="{{ $portfolio?->getFirstMediaUrl('image', Constants::RESOLUTION_1280_720) }}" alt="portefølje-detalje-billede">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="portfolio-details-wrap mt-40 title-anim">
                        {!! $portfolio?->body !!}
                    </div>
                </div>
                <div class="col-xl-4 sidebar-widget-area mt-50">
                    <aside class="sidebar-sticky-area sidebar-area title-anim">
                        <div class="widget widget-project-details">
                            <h3 class="widget_title">Information</h3>
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-layer-group"></i></div>
                                    <div class="media-body">
                                        <span class="title">Kategori:</span>
                                        <h6>{{ $portfolio?->category?->title }}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                                    <div class="media-body">
                                        <span class="title">Dato:</span>
                                        <h6>{{ $portfolio?->updated_at->format('Y-m-d') }}</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>
