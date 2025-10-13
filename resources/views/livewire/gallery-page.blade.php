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
                        <h1 class="breadcumb-title">gallerikategorier</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">gallerikategorier</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    ArtGallery Area
    ==============================-->
    @if($artGalleries->isNotEmpty())
        <section class="portfolio-page space">
            <div class="container">
                <div class="row gy-4 filter-active mb-60">
                    @foreach($artGalleries as $artGallery)
                        <div class="col-md-6 col-lg-4 filter-item">
                            <div class="project-box title-anim">
                                <div class="project-img global-img">
                                    <a href="{{ route('gallery-detail-page', ['slug' => $artGallery?->slug]) }}">
                                        <img src="{{ $artGallery?->getFirstMediaUrl('image', Constants::RESOLUTION_854_480) }}" alt="gallerikategori">
                                    </a>
                                </div>
                                <div class="project-card-details">
                                    <h3 class="title"><a href="{{ route('gallery-detail-page', ['slug' => $artGallery?->slug]) }}">{{ $artGallery?->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <ul>
                        {{ $artGalleries->onEachSide(1)->links() }}
                    </ul>
                </div>
            </div>
        </section>
    @else
        <div class="container py-5">
            <div class="alert alert-warning text-center shadow-sm rounded">
                <i class="fa-regular fa-image fa-2x d-block mb-2"></i>
                <h5 class="mb-1">Ingen tilgængelige gallerier</h5>
                <p class="mb-0">Der er ingen tilgængelige medier i øjeblikket. Tjek venligst tilbage senere.</p>
            </div>
        </div>
    @endif
    
</div>
