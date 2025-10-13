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
    Galleries & Videos (Combined)
    ==============================-->
    @php
        // Images excluding those used as video posters
        $images = $artGallery?->getMedia('images')->reject(function ($media) use ($artGallery) {
            return $artGallery->getMedia('videos')->contains(function ($video) use ($media) {
                return $video->getCustomProperty('poster_media_id') === $media->id;
            });
        });

        // Videos
        $videos = $artGallery?->getMedia('videos');

        // Normalize into one collection
        $mediaItems = collect();
        if ($images) {
            $mediaItems = $mediaItems->concat($images->map(function ($m) {
                return [
                    'type' => 'image',
                    'url' => $m->getUrl(),
                    'name' => $m->name,
                ];
            }));
        }
        if ($videos) {
            $mediaItems = $mediaItems->concat($videos->map(function ($m) {
                return [
                    'type' => 'video',
                    'url' => $m->getUrl(),
                    'name' => $m->name,
                    'poster_url' => $m->getCustomProperty('poster_url'),
                ];
            }));
        }
    @endphp
    @if($mediaItems->count() > 0)
        <section class="portfolio-page-2">
            <div class="container-fluid p-0">
                <div class="row gy-4 masonary-active">
                    @foreach($mediaItems as $item)
                        <div class="col-xl-6 filter-item">
                            @if($item['type'] === 'image')
                                <div class="portfolio-thumb fade_left media-tile">
                                    <a class="popup-image icon-btn" href="{{ $item['url'] }}"><i class="far fa-eye"></i></a>
                                    <img src="{{ $item['url'] }}" alt="gallery">
                                </div>
                            @else
                                <div class="portfolio-thumb fade_left media-tile video-card" style="cursor: pointer;" onclick="openVideoModal('{{ $item['url'] }}', '{{ $item['name'] }}')">
                                    @if(!empty($item['poster_url']))
                                        <img src="{{ $item['poster_url'] }}" alt="video poster">
                                        <span class="play-overlay"><i class="fas fa-play"></i></span>
                                    @else
                                        <div class="d-flex align-items-center justify-content-center" style="height: 340px; background: #f3f4f6;">
                                            <div class="text-center">
                                                <i class="fas fa-play" style="font-size:44px;color:#2563eb;"></i>
                                                <p class="mt-2 mb-0" style="color:#4b5563; font-size:14px;">{{ $item['name'] }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden" style="display:none;position:fixed;left:0;top:0;width:100%;height:100%;">
        <div class="position-relative" style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;padding:16px;">
            <div class="video-dialog" style="position:relative;width:90vw;max-width:900px;background:#ffffff;border-radius:6px;box-shadow:0 15px 35px rgba(0,0,0,0.5);overflow:hidden;">
                <button type="button" onclick="closeVideoModal(event)" aria-label="Close" style="position:absolute;top:8px;right:10px;background:transparent;border:0;color:#333;font-size:20px;line-height:1;z-index:2;cursor:pointer;">
                    ✕
                </button>
                <video id="modalVideo" controls style="display:block;width:100%;height:auto;max-height:80vh;background:#000;">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <style>
        /* Consistent tile sizing */
        .media-tile {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9; /* control here: e.g., 4/3, 1/1 */
            overflow: hidden;
        }
        .media-tile img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* fill tile without distortion */
        }
        .video-card { position: relative; }
        .video-card .play-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity .2s ease;
            pointer-events: none;
        }
        .video-card:hover .play-overlay { opacity: 1; }
        .video-card .play-overlay i {
            font-size: 46px;
            color: #ffffff;
            background: rgba(0,0,0,0.45);
            border-radius: 9999px;
            padding: 10px 14px;
        }
        html.no-scroll, body.no-scroll { overflow: hidden !important; height: 100%; }
        body.no-scroll { position: fixed; width: 100%; }
    </style>

    <script>
        function openVideoModal(videoUrl, videoName) {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('modalVideo');
            if (video.src !== videoUrl) {
                video.src = videoUrl;
            }
            modal.classList.remove('hidden');
            modal.style.display = 'block';
            const scrollY = window.scrollY || window.pageYOffset;
            document.documentElement.classList.add('no-scroll');
            document.body.classList.add('no-scroll');
            document.body.style.top = `-${scrollY}px`;
            document.body.dataset.scrollY = String(scrollY);
            video.play().catch(() => {});
        }

        function closeVideoModal(event) {
            if (event) {
                event.preventDefault();
                event.stopPropagation();
                event.stopImmediatePropagation();
            }
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('modalVideo');
            video.pause();
            video.currentTime = 0;
            modal.classList.add('hidden');
            modal.style.display = 'none';
            const y = parseInt(document.body.dataset.scrollY || '0', 10);
            document.body.style.top = '';
            document.body.classList.remove('no-scroll');
            document.documentElement.classList.remove('no-scroll');
            window.scrollTo(0, y);
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeVideoModal(e);
            }
        });

        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVideoModal(e);
            }
        });
    </script>
</div>
