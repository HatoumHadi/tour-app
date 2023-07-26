<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Home - Andtourtravel </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}"/>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/font/bootstrap-icons.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"/>
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}"/>
    <!-- Slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}" />
    <!--slick-theme.css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.html')}}" />
    <!-- Rangeslider css -->
    <link rel="stylesheet" href="{{asset('assets/css/nouislider.css')}}" />
    <!-- navber css -->
    <link rel="stylesheet" href="{{asset('assets/css/navber.css')}}"/>
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}"/>
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
</head>

<body>

<!-- Header Area -->
<header class="main_header_arae">
    <!-- Top Bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list">
                        <li>
                            <a href="#!"><i class="fab fa-facebook"></i></a>
                            <a href="#!"><i class="fab fa-twitter-square"></i></a>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                            <a href="#!"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li><a href="#!"><span>+011 234 567 89</span></a></li>
                        <li><a href="#!"><span>contact@domain.com</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-others-options">
                        @guest
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('sign-up')}}">Sign up</a></li>
                        @else
                            <li>
                                <div class="dropdown language-option">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <span>My Account</span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                    </div>
                                </div>
                            </li>
                        @endguest
                        <li>
                            <div class="dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Arabic</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Bar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('flight-search-result')}}" class="nav-link">
                                            Flights
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('hotels')}}" class="nav-link">
                                            Hotel reservation
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('visa-info')}}" class="nav-link">
                                            Visa
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('requests.travel-insurance')}}" class="nav-link">
                                            Travel insurance
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Packages <i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="hotel-booking.html" class="nav-link">Hotel booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="flight-booking.html" class="nav-link">Flight booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tour-booking.html" class="nav-link">Tour booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="booking-history.html" class="nav-link">Booking history</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="my-profile.html" class="nav-link">My profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wallet.html" class="nav-link">Wallet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="notification.html" class="nav-link">Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact-us')}}" class="nav-link">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about-us')}}" class="nav-link">
                                    About us
                                </a>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="#" class="search-box">
                                    <i class="bi bi-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="option-item">
                                <a href="contact.html" class="btn  btn_navber">Get free quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- search -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="button"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>


<div>
    {{$slot}}
</div>


<!-- Footer  -->
<footer id="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Need any help?</h5>
                </div>
                <div class="footer_first_area">
                    <div class="footer_inquery_area">
                        <h5>Call 24/7 for any help</h5>
                        <h3><a href="tel:+00-123-456-789">+00 123 456 789</a></h3>
                    </div>
                    <div class="footer_inquery_area">
                        <h5>Mail to our support team</h5>
                        <h3><a href="mailto:support@domain.com">admin@admin.com</a></h3>
                    </div>
                    <div class="footer_inquery_area">
                        <h5>Follow us on</h5>
                        <ul class="soical_icon_footer">
                            <li><a href="#!"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Company</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Support</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="{{route('contact-us')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Other Services</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="{{route('hotels')}}">List My Hotel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Top cities</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a>Chicago</a></li>
                        <li><a>New York</a></li>
                        <li><a>San Francisco</a></li>
                        <li><a>California</a></li>
                        <li><a>Ohio </a></li>
                        <li><a>Alaska</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                <div class="copyright_left">
                    <p>Copyright © 2023 All Rights Reserved</p>
                </div>
            </div>
            <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                <div class="copyright_right">
                    <img src="{{asset('assets/img/common/cards.png')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
<!-- Meanu js -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- Range js -->
<script src="assets/js/nouislider.min.js"></script>
<script src="assets/js/wNumb.js"></script>
<!-- owl carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Slick js -->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slick-slider.js"></script>
<!-- wow.js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/add-form.js')}}"></script>
<script src="{{asset('assets/js/form-dropdown.js')}}"></script>
</body>


</html>

