<!--==============================
Menu
============================== -->
<div class="sidemenu-wrapper">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="fas fa-times"></i></button>
        <div class="widget footer-widget">
            <div class="widget-about">
                <div class="footer-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-white.svg') }}" alt="Ovation"></a>
                </div>
                <p class="about-text">Lorem ipsum dolor sit amet consectetur adipiscing elit sociosqu integer, suscipit nascetur aliquet posuere aptent vehicula ligula pulvinar praesent.</p>
                <div class="social-btn style2">
                    <a href="https://www.facebook.com/#"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/#"><i class="fab fa-twitter"></i></a>
                    <a href="https://pinterest.com/#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="https://instagram.com/#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="widget widget_nav_menu footer-widget">
            <h3 class="widget_title">Hurtige links</h3>
            <ul class="menu">
                <li><a href="{{ route('about-us-page') }}">Om os</a></li>
                <li><a href="{{ route('blog-page') }}">Vores blogs</a></li>
                <li><a href="{{ route('team-page') }}">Mød holdene</a></li>
                <li><a href="{{ route('faq-page') }}">FAQ-side</a></li>
                <li><a href="{{ route('contact-us-page') }}">Kontakt os</a></li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Mobile Menu
============================== -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-area text-center">
        <button class="menu-toggle"><i class="fas fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo2.png') }}" alt="Ovation"></a>
        </div>
        <div class="mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}">Hjem</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('about-us-page') }}">Om os</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('portfolio-page') }}">Portefølje</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('blog-page') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact-us-page') }}">Kontakte</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="nav-header header-layout1">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-clock"></i>Arbejder: 8.00am - 5.00pm</li>
                            <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">info@uranus-partyhouse.dk</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="social-links">
                                    <span class="me-2">Besøg os:</span>
                                    <a href="https://www.facebook.com/#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo2.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('home') }}">Hjem</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('about-us-page') }}">Om os</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('portfolio-page') }}">Portefølje</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('blog-page') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact-us-page') }}">Kontakte</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="navbar-right d-inline-flex d-lg-none">
                            <button type="button" class="menu-toggle icon-btn"><i class="fas fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <a href="{{ route('reservation-page') }}" class="btn d-none d-xl-block">
                                FORETAG RESERVATION
                            </a>
                            <button type="button" class="sidebar-btn sideMenuToggler">
                                Menu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
