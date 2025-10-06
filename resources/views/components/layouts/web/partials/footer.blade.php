<footer class="footer-wrapper footer-layout1 overflow-hidden" data-bg-src="{{ asset('assets/img/bg/footer-1-bg.png') }}">
    <div class="shape-mockup footer1-shape1 jump" data-top="20%" data-left="-2%">
        <img src="{{ asset('assets/img/normal/footer-1-shape1.png') }}" alt="img">
    </div>
    <div class="shape-mockup footer1-shape2 jump-reverse" data-top="-10%" data-right="-10%">
        <img src="{{ asset('assets/img/normal/footer-1-shape2.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-auto">
                    <div class="footer-logo mb-40 mb-sm-0">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo2.png') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="social-btn style2">
                        <a href="https://facebook.com/#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/#"><i class="fab fa-twitter"></i></a>
                        <a href="https://behance.com/#"><i class="fab fa-behance"></i></a>
                        <a href="https://www.youtube.com/#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3 col-lg-4">
                    <div class="widget footer-widget">
                        <div class="widget-contact">
                            <h3 class="widget_title">Kontaktoplysninger</h3>
                            <ul class="contact-info-list">
                                <li>Reception: +45 50 71 25 59</li>
                                <li>E-mail: info@uranus-partyhouse.dk</li>
                                <li>Adresse: Haderslevvej 93  6000 Kolding  Danmark</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto col-lg-4">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Information</h3>
                        <div class="menu-all-pages-container list-column2">
                            <ul class="menu">
                                <li><a href="{{ route('team-page') }}">Vores teams</a></li>
                                <li><a href="{{ route('faq-page') }}">Faq’s</a></li>
                                <li><a href="{{ route('contact-us-page') }}">Kontakt os</a></li>
                                <li><a href="{{ route('portfolio-page') }}">Tjenester</a></li>
                            </ul>
                            <ul class="menu">
                                <li><a href="{{ route('about-us-page') }}">Om</a></li>
                                <li><a href="{{ route('blog-page') }}">Vores blogs</a></li>
                                <li><a href="{{ route('gallery-page') }}">galleri</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Abonner nu</h3>
                        <p class="footer-text">Bare rolig, vi spammer ikke din e-mail</p>
                        <form class="newsletter-form">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="E-mailadresse" required="">
                            </div>
                            <button type="submit" class="btn">ABONNER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-menu-area">
            <div class="copyright-wrap text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-auto align-self-center">
                            <p class="copyright-text">© 2025 </p>
                            <p class="copyright-text"><a href="{{ route('home') }}">Uranus party house.</a> Alle rettigheder forbeholdes.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
