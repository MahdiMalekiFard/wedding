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
                        <h1 class="breadcumb-title">{{ $team->name }}</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Holddetaljer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Team Area
    ==============================-->
    <div class="team-details-area space">
        <div class="container">
            <div class="single-team-details">
                <div class="team-about-card" data-bg-src="/assets/img/bg/team-details-bg.png">
                    <div class="row g-lg-0">
                        <div class="col-xl-5">
                            <div class="team-about-card_img ratio ratio-1x1" style="width:320px; max-width:100%;">
                                <img class="w-100 h-100 object-fit-cover" src="{{ $team?->getFirstMediaUrl('image') }}" alt="{{ $team?->name }}">
                            </div>
                        </div>
                        <div class="col-xl-7 align-self-center">
                            <div class="team-about-card_box">
                                <h2 class="team-about-card_title">{{ $team?->name }}</h2>
                                <h6 class="team-about-card_desig">{{ $team?->job }}</h6>
                                <div class="social-btn">
                                    <a href="{{ $team?->extra()->get('social_media.facebook') ?? 'https://facebook.com/#' }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $team?->extra()->get('social_media.twitter') ?? 'https://x.com/#' }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $team?->extra()->get('social_media.linkedin') ?? 'https://linkedin.com/#' }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ $team?->extra()->get('social_media.youtube') ?? 'https://youtube.com/#' }}"><i class="fab fa-youtube"></i></a>
                                </div>
                                <div class="row gy-30">
                                    <div class="col-md-6">
                                        <div class="team-about-card_info">
                                            <span class="icon"><i class="fas fa-user"></i></span>
                                            <p><span>Erfaring </span> {{ $team?->extra()->get('extra_info.experience') ?? 'Mere end 10 år' }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-about-card_info">
                                            <span class="icon"><i class="fas fa-phone-alt"></i></span>
                                            <p><span>Telefon </span> {{ $team?->extra()->get('extra_info.mobile') ?? '+(45) 50 71 25 59' }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-about-card_info">
                                            <span class="icon"><i class="fas fa-envelope"></i></span>
                                            <p><span>Email </span> {{ $team?->extra()->get('extra_info.email') ?? 'info@uranus-partyhouse.dk' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="page-subtitle">Om {{ $team?->name }}</h3>
                {!! $team?->body !!}
            </div>
        </div>
    </div>
</div>
