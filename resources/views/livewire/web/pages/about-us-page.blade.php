<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Om os</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Om os</li>
                    </ul>
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
                <div class="col-lg-6">
                    <div class="about-thumb mb-5 mb-lg-0 text-lg-end text-center fade_left">
                        <img class="about-img-1 image-mask" src="{{ $page?->getFirstMediaUrl('images') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-wrap title-anim text-center">
                        <div class="title-area mb-0">
                            <h2 class="sec-title">{{ $page?->title }}</h2>
                            <p class="sec-text" style="text-align: justify">
                                {{ $page?->body }}
                            </p>
                        </div>
                        <div class="btn-wrap mt-40 justify-content-center">
                            <a href="{{ route('contact-us-page') }}" class="btn">kontakt os</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Counter Area
    ==============================-->
    <div class="counter-area-2">
        <div class="counter-wrap1 space-bottom counter-item">
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
    About Area (MORE)
    ==============================-->
    <div class="space bg-smoke4">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2">Mere om os</span>
                <h2 class="sec-title">VORES KERNEVÆRDIER</h2>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="about-tab-1">
                        <div class="filter-menu-active">
                            <button data-filter=".cat1" class="active" type="button">Forstå dig</button>
                            <button data-filter=".cat2" type="button">Høj kvalitet</button>
                            <button data-filter=".cat3" type="button">Dygtigt team</button>
                        </div>
                        <div class="filter-active-cat1">
                            <div class="filter-item cat1">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="about-thumb fade_left">
                                            <img src="/assets/img/normal/about_5-1.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="about-content-wrap style3 title-anim">
                                            <h3 class="title">Klar kommunikation</h3>
                                            <p class="text" style="text-align: justify">
                                                Vi har stor forståelse for, at vores kunders behov og ønsker kan variere, så vi tager altid en indledende snak med dig omkring netop dette.
                                                På den måde kan vi bedst muligt nå i mål med leveringen af en komplet og skræddersyet løsning.
                                                Vi spørger grundigt ind til dine forventninger til opgaven, så vi undgår misforståelse.
                                                Vi holder dig også gerne opdateret fra start til slut, hvis du ønsker det.
                                                Det er vigtigt for os, at vores kunder føler sig trygge gennem hele forløbet.
                                            </p>
                                            <div class="btn-wrap mt-50">
                                                <a href="{{ route('reservation-page') }}" class="btn">LAV EN AFTALE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item cat2">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="about-thumb fade_left">
                                            <img src="/assets/img/normal/about-quality.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="about-content-wrap style3 title-anim">
                                            <h3 class="title">Pålidelig service</h3>
                                            <p class="text" style="text-align: justify">
                                                Hos os kan du altid regne med god service og høj kvalitet. Vi går aldrig fra en opgave, før den 100% færdig, og før begge parter er tilfredse med resultatet.
                                                Vi overholder alle aftaler og deadlines, så hvis du er på udkig efter kvalitetsløsninger til tiden, så er det os, du skal kontakte.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item cat3">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="about-thumb fade_left">
                                            <img src="/assets/img/normal/about-team.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="about-content-wrap style3 title-anim">
                                            <h3 class="title">Ekspertpleje</h3>
                                            <p class="text" style="text-align: justify">
                                                Vores medarbejdere har den rette faglige viden og kompetencerne til at levere et veludført stykke arbejde.
                                                Vi møder dig altid med et smil, og vi besvarer med glæde ethvert spørgsmål, som du måtte have i løbet af projektet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Team Area
    ==============================-->
    <div class="team-area-1 space overflow-hidden">
        <div class="container">
            <div class="title-area text-center title-anim">
                <span class="sub-title style2">Mere om os</span>
                <h2 class="sec-title">Vores besætningsmedlemmer</h2>
            </div>
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
