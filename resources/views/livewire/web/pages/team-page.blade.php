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
                        <h1 class="breadcumb-title">Vores team</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Vores team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Team Area
    ==============================-->
    <div class="team-area-1 space overflow-hidden">
        <div class="container">
            <div class="row gy-4 justify-content-lg-between justify-content-center">
                @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card title-anim">
                            <div class="portrait-mask mx-auto">
                                <a href="{{ route('team-detail-page', ['slug' => $team?->slug]) }}">
                                    <img src="{{ $team?->getFirstMediaUrl('image') }}" alt="{{ $team?->name }}">
                                </a>
                            </div>
                            <div class="team-card_content">
                                <h3 class="team-card_title"><a href="{{ route('team-detail-page', ['slug' => $team?->slug]) }}">{{ $team?->name }}</a></h3>
                                <span class="team-card_desig">{{ $team?->job }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
