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
                        <h1 class="breadcumb-title">Kontakt os</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Kontakt os</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Contact Area
    ==============================-->
    <div class="contact-area space" data-bg-src="/assets/img/bg/contact-page-bg.png">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="/assets/img/icon/location-icon.svg" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Kontoradresse</h4>
                            <span>03 PM - 04 PM</span>
                            <p>Søndag den 18. september 2022. En</p>
                            <p>Haderslevvej 93  6000 Kolding  Danmark</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="/assets/img/icon/envelope.svg" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">E-mailadresse</h4>
                            <span>24/7 Når som helst</span>
                            <p>info@uranus-partyhouse.dk</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="/assets/img/icon/phone.svg" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Telefonnummer</h4>
                            <span>24/7 Når som helst</span>
                            <p>+(45) 50 71 25 59</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Reservation Area
    ==============================-->
    <div class="space" >
        <div class="container">
            <div class="contact-page-wrap">
                <div class="row gx-0 justify-content-center flex-row-reverse">
                    <div class="col-xl-5">
                        <div class="map-sec">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d289408.2614606667!2d9.468878!3d55.4800622!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x464ca1d5fd39e5a9%3A0xc076fbb899cdcea5!2sHaderslevvej%2093%206000%20Kolding%20Denmark!3m2!1d55.4800622!2d9.468878!5e0!3m2!1sen!2s!4v1759659287893!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-form-wrap">
                            <div class="title-area mb-30">
                                <span class="sub-title style2">Kontakt os
                                </span>
                                <h2 class="sec-title">Kontakt os!</h2>
                            </div>
                            <form action="mail.php" method="POST" class="contact-form ajax-contact">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-user"></i>
                                            <input type="text" class="form-control style-border" name="name" id="name" placeholder="Indtast fulde navn">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-envelope"></i>
                                            <input type="text" class="form-control style-border" name="email" id="email" placeholder="E-mailadresse">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-comment"></i>
                                            <textarea name="message" placeholder="Skriv din besked" id="contactForm" class="form-control style-border"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn col-12 text-center">
                                    <button type="submit" class="btn">FORETAG RESERVATION</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
