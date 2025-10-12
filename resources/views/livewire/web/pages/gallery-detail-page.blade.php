<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="/assets/img/bg/breadcrumb-bg.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $artGallery?->title }}</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">galleridetaljer</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Galleries Area
    ==============================-->
    <section class="portfolio-page-2">
        @php
            $images = $artGallery?->getMedia('images')->reject(function ($media) use ($artGallery) {
                // reject if this image is linked as a video poster
                return $artGallery->getMedia('videos')->contains(function ($video) use ($media) {
                    return $video->getCustomProperty('poster_media_id') === $media->id;
                });
            });
        @endphp
        <div class="container-fluid p-0">
            <div class="row gy-4 masonary-active">
                @foreach($images as $image)
                    <div class="col-xl-6 filter-item">
                        <div class="portfolio-thumb fade_left">
                            <a class="popup-image icon-btn" href="{{ $image?->getUrl() }}"><i class="far fa-eye"></i></a>
                            <img src="{{ $image?->getUrl() }}" alt="gallery">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
