<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="/assets/img/bg/breadcrumb-bg.png" wire:ignore>
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
        Contact Info Area
    ==============================-->
    <div class="contact-area space" data-bg-src="/assets/img/bg/contact-page-bg.png" wire:ignore>
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
    Contact Form Area
    ==============================-->
    <div class="space" >
        <div class="container">
            <div class="contact-page-wrap">
                <div class="row gx-0 justify-content-center flex-row-reverse">
                    <div class="col-xl-5">
                        <div class="map-sec">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d289408.2614606667!2d9.468878!3d55.4800622!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x464ca1d5fd39e5a9%3A0xc076fbb899cdcea5!2sHaderslevvej%2093%206000%20Kolding%20Denmark!3m2!1d55.4800622!2d9.468878!5e0!3m2!1sen!2s!4v1759659287893!5m2!1sen!2s" 
                                allowfullscreen="" loading="lazy"
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-form-wrap">
                            <div class="title-area mb-30">
                                <span class="sub-title style2">Kontakt os
                                </span>
                                <h2 class="sec-title">Kontakt os!</h2>
                            </div>
                            @if($successMessage)
                                <div class="alert alert-success text-start" wire:poll.4s="clearSuccess">{{ $successMessage }}</div>
                            @endif
                            @if($errorMessage)
                                <div class="alert alert-danger text-start" wire:poll.4s="clearError">{{ $errorMessage }}</div>
                            @endif
                            <form wire:submit="submitForm" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-user"></i>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                wire:model="name" placeholder="Ihr Name">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                wire:model.live="email" placeholder="Ihre E-Mail">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-pen"></i>
                                            <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                                wire:model="subject" placeholder="Ihr Betreff">
                                            @error('subject')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fa-solid fa-phone"></i>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                wire:model.live="phone" placeholder="Ihre Telefonnummer">
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-comment"></i>
                                            <textarea wire:model.live="message" cols="30" rows="5" class="form-control @error('message') is-invalid @enderror"
                                                placeholder="Schreiben Sie Ihre Nachricht"></textarea>
                                            @error('message')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn col-12 text-center">
                                    <button type="submit" class="btn" wire:loading.attr="disabled">
                                        <span wire:loading.remove>Nachricht senden <i class="far fa-paper-plane"></i></span>
                                        <span wire:loading>Sender... <i class="fas fa-spinner fa-spin"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
