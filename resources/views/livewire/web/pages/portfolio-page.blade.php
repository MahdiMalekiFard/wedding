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
            <div class="row gy-4 filter-active mb-60">
                @foreach($portfolios as $portfolio)
                    <div class="col-md-6 col-lg-4 filter-item">
                        <div class="project-box title-anim">
                            <div class="project-img global-img">
                                <img src="{{ $portfolio?->getFirstMediaUrl('image', Constants::RESOLUTION_854_480) }}" alt="portfolio image">
                            </div>
                            <div class="project-card-details">
                                <h3 class="title"><a href="{{ route('portfolio-detail-page', ['slug' => $portfolio?->slug]) }}">{{ $portfolio?->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                <ul>
                    {{ $portfolios->onEachSide(1)->links() }}
                </ul>
            </div>
        </div>
    </section>
</div>
