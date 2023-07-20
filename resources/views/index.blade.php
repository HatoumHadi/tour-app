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
<!-- preloader Area -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

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
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Sign up</a></li>
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
                        <a href="index-2.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index-2.html">
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
                                        <a href="#" class="nav-link">
                                            Flights
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="flight-search-result.html" class="nav-link">Flight</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="flight-booking-submission.html" class="nav-link">Flight
                                                    Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Hotel reservation
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="hotel-search.html" class="nav-link">Hotel Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="hotel-search-list.html" class="nav-link">Hotel List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="hotel-map.html" class="nav-link">Hotel Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="hotel-details.html" class="nav-link">Hotel Booking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="room-details.html" class="nav-link">Room Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="room-booking.html" class="nav-link">Room Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Visa
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="visa-details.html" class="nav-link">Visa Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-application.html" class="nav-link">Visa Application</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Business visa </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Education visa </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Working visa </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Tourist visa </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Medical visa </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">On-arrival visa </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Travel insurance
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="apartment-search.html" class="nav-link">Apartments Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apartment-search-list.html" class="nav-link">Apartments
                                                    List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apartment-search-map.html" class="nav-link">Apartments Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apartment-details.html" class="nav-link">Apartments Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apartment-booking.html" class="nav-link">Apartments Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Packages <i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="dashboard.html" class="nav-link">Dashboard</a>
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
                                <a href="#" class="nav-link">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">
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
                            <div class="option-item">
                                <a href="become-vendor.html" class="btn  btn_navber">Become a partner</a>
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

<!-- Banner Area -->
<section id="home_one_banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_one_text">
                    <h1>Explore the world together</h1>
                    <h3>Find awesome flights, hotel, tour, car and packages</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Area -->
<section id="theme_search_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme_search_form_area">
                    <div class="theme_search_form_tabbtn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="flights-tab" data-bs-toggle="tab"
                                        data-bs-target="#flights" type="button" role="tab" aria-controls="flights"
                                        aria-selected="true"><i class="fas fa-plane-departure"></i>Flights
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tours-tab" data-bs-toggle="tab" data-bs-target="#tours"
                                        type="button" role="tab" aria-controls="tours" aria-selected="false"><i
                                        class="fas fa-globe"></i>Tours
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="hotels-tab" data-bs-toggle="tab"
                                        data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels"
                                        aria-selected="false"><i class="fas fa-hotel"></i>Hotels
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="visa-tab" data-bs-toggle="tab"
                                        data-bs-target="#visa-application" type="button" role="tab" aria-controls="visa"
                                        aria-selected="false"><i class="fas fa-passport"></i> Visa
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="apartments-tab" data-bs-toggle="tab"
                                        data-bs-target="#apartments" type="button" role="tab" aria-controls="apartments"
                                        aria-selected="false"><i class="fas fa-building"></i> Apartments
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="flights" role="tabpanel"
                             aria-labelledby="flights-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flight_categories_search">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                                        data-bs-target="#oneway_flight" type="button" role="tab"
                                                        aria-controls="oneway_flight" aria-selected="true">One
                                                    Way
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
                                                        data-bs-target="#roundtrip" type="button" role="tab"
                                                        aria-controls="roundtrip"
                                                        aria-selected="false">Roundtrip
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="multi_city-tab" data-bs-toggle="tab"
                                                        data-bs-target="#multi_city" type="button" role="tab"
                                                        aria-controls="multi_city" aria-selected="false">Multi
                                                    city
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                     aria-labelledby="oneway-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>From</p>
                                                                <input type="text" value="New York">
                                                                <span>JFK - John F. Kennedy International...</span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-departure"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>To</p>
                                                                <input type="text" value="London ">
                                                                <span>LCY, London city airport </span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-arrival"></i>
                                                                </div>
                                                                <div class="range_plan">
                                                                    <i class="fas fa-exchange-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                            <div class="form_search_date">
                                                                <div class="flight_Search_boxed date_flex_area">
                                                                    <div class="Journey_date">
                                                                        <p>Journey date</p>
                                                                        <input type="date" value="2022-05-05">
                                                                        <span>Thursday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                            <div
                                                                class="flight_Search_boxed dropdown_passenger_area">
                                                                <p>Passenger, Class </p>
                                                                <div class="dropdown">
                                                                    <button class="dropdown-toggle final-count"
                                                                            data-toggle="dropdown" type="button"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                        0 Passenger
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown_passenger_info"
                                                                         aria-labelledby="dropdownMenuButton1">
                                                                        <div class="traveller-calulate-persons">
                                                                            <div class="passengers">
                                                                                <h6>Passengers</h6>
                                                                                <div class="passengers-types">
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count pcount">2</span>
                                                                                            <div class="type-label">
                                                                                                <p>Adult</p>
                                                                                                <span>12+
                                                                                                        yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                    class="btn-add">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="btn-subtract">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count ccount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Children
                                                                                                </p><span>2
                                                                                                        - Less than 12
                                                                                                        yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                    class="btn-add-c">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="btn-subtract-c">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count incount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Infant
                                                                                                </p><span>Less
                                                                                                        than 2
                                                                                                        yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                    class="btn-add-in">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="btn-subtract-in">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cabin-selection">
                                                                                <h6>Cabin Class</h6>
                                                                                <div class="cabin-list">
                                                                                    <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="muiButton-label">Economy
                                                                                            </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="label-select-btn active">
                                                                                            <span
                                                                                                class="muiButton-label">
                                                                                                Business
                                                                                            </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="MuiButton-label">First
                                                                                                Class </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span>Business</span>
                                                            </div>
                                                        </div>
                                                        <div class="top_form_search_button">
                                                            <button class="btn btn_theme btn_md">Search</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="roundtrip" role="tabpanel"
                                     aria-labelledby="roundtrip-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="row">
                                                        <div class="col-lg-3  col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>From</p>
                                                                <input type="text" value="New York">
                                                                <span>JFK - John F. Kennedy International...</span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-departure"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3  col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>To</p>
                                                                <input type="text" value="London ">
                                                                <span>LCY, London city airport </span>
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-arrival"></i>
                                                                </div>
                                                                <div class="range_plan">
                                                                    <i class="fas fa-exchange-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                            <div class="form_search_date">
                                                                <div class="flight_Search_boxed date_flex_area">
                                                                    <div class="Journey_date">
                                                                        <p>Journey date</p>
                                                                        <input type="date" value="2022-05-05">
                                                                        <span>Thursday</span>
                                                                    </div>
                                                                    <div class="Journey_date">
                                                                        <p>Return date</p>
                                                                        <input type="date" value="2022-05-08">
                                                                        <span>Saturday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                            <div
                                                                class="flight_Search_boxed dropdown_passenger_area">
                                                                <p>Passenger, Class </p>
                                                                <div class="dropdown">
                                                                    <button class="dropdown-toggle final-count"
                                                                            data-toggle="dropdown" type="button"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                        0 Passenger
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown_passenger_info"
                                                                         aria-labelledby="dropdownMenuButton1">
                                                                        <div class="traveller-calulate-persons">
                                                                            <div class="passengers">
                                                                                <h6>Passengers</h6>
                                                                                <div class="passengers-types">
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count pcount">2</span>
                                                                                            <div class="type-label">
                                                                                                <p>Adult</p>
                                                                                                <span>12+
                                                                                                        yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                    class="btn-add">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="btn-subtract">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count ccount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Children
                                                                                                </p><span>2
                                                                                                        - Less than 12
                                                                                                        yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                    class="btn-add-c">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="btn-subtract-c">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="passengers-type">
                                                                                        <div class="text"><span
                                                                                                class="count incount">0</span>
                                                                                            <div class="type-label">
                                                                                                <p
                                                                                                    class="fz14 mb-xs-0">
                                                                                                    Infant
                                                                                                </p><span>Less
                                                                                                        than 2
                                                                                                        yrs</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="button-set">
                                                                                            <button type="button"
                                                                                                    class="btn-add-in">
                                                                                                <i
                                                                                                    class="fas fa-plus"></i>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="btn-subtract-in">
                                                                                                <i
                                                                                                    class="fas fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cabin-selection">
                                                                                <h6>Cabin Class</h6>
                                                                                <div class="cabin-list">
                                                                                    <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="muiButton-label">Economy
                                                                                            </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="label-select-btn active">
                                                                                            <span
                                                                                                class="muiButton-label">
                                                                                                Business
                                                                                            </span>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="MuiButton-label">First
                                                                                                Class </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span>Business</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="multi_city" role="tabpanel"
                                     aria-labelledby="multi_city-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="multi_city_form_wrapper">
                                                        <div class="multi_city_form">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>From</p>
                                                                        <input type="text" value="New York">
                                                                        <span>DAC, Hazrat Shahajalal
                                                                                International...</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>To</p>
                                                                        <input type="text" value="London ">
                                                                        <span>LCY, London city airport </span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div
                                                                            class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p>Journey date</p>
                                                                                <input type="date"
                                                                                       value="2022-05-05">
                                                                                <span>Thursday</span>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p>Return date</p>
                                                                                <input type="date"
                                                                                       value="2022-05-10">
                                                                                <span>Saturday</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                    <div
                                                                        class="flight_Search_boxed dropdown_passenger_area">
                                                                        <p>Passenger, Class </p>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="dropdown-toggle final-count"
                                                                                data-toggle="dropdown" type="button"
                                                                                id="dropdownMenuButton1"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                0 Passenger
                                                                            </button>
                                                                            <div
                                                                                class="dropdown-menu dropdown_passenger_info"
                                                                                aria-labelledby="dropdownMenuButton1">
                                                                                <div
                                                                                    class="traveller-calulate-persons">
                                                                                    <div class="passengers">
                                                                                        <h6>Passengers</h6>
                                                                                        <div
                                                                                            class="passengers-types">
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                        <span
                                                                                                            class="count pcount">2</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p>Adult</p>
                                                                                                        <span>12+
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                        <span
                                                                                                            class="count ccount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Children
                                                                                                        </p><span>2
                                                                                                                - Less
                                                                                                                than 12
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-c">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-c">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                        <span
                                                                                                            class="count incount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Infant
                                                                                                        </p><span>Less
                                                                                                                than 2
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-in">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-in">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cabin-selection">
                                                                                        <h6>Cabin Class</h6>
                                                                                        <div class="cabin-list">
                                                                                            <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="muiButton-label">Economy
                                                                                                    </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="label-select-btn active">
                                                                                                    <span
                                                                                                        class="muiButton-label">
                                                                                                        Business
                                                                                                    </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="MuiButton-label">First
                                                                                                        Class </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span>Business</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="multi_city_form">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>From</p>
                                                                        <input type="text" value="New York">
                                                                        <span>DAC, Hazrat Shahajalal
                                                                                International...</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>To</p>
                                                                        <input type="text" value="London ">
                                                                        <span>LCY, London city airport </span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div
                                                                            class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p>Journey date</p>
                                                                                <input type="date"
                                                                                       value="2022-05-05">
                                                                                <span>Thursday</span>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p>Return date</p>
                                                                                <input type="date"
                                                                                       value="2022-05-12">
                                                                                <span>Saturday</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                    <div
                                                                        class="flight_Search_boxed dropdown_passenger_area">
                                                                        <p>Passenger, Class </p>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="dropdown-toggle final-count"
                                                                                data-toggle="dropdown" type="button"
                                                                                id="dropdownMenuButton1"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                0 Passenger
                                                                            </button>
                                                                            <div
                                                                                class="dropdown-menu dropdown_passenger_info"
                                                                                aria-labelledby="dropdownMenuButton1">
                                                                                <div
                                                                                    class="traveller-calulate-persons">
                                                                                    <div class="passengers">
                                                                                        <h6>Passengers</h6>
                                                                                        <div
                                                                                            class="passengers-types">
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                        <span
                                                                                                            class="count pcount">2</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p>Adult</p>
                                                                                                        <span>12+
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                        <span
                                                                                                            class="count ccount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Children
                                                                                                        </p><span>2
                                                                                                                - Less
                                                                                                                than 12
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-c">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-c">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                        <span
                                                                                                            class="count incount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Infant
                                                                                                        </p><span>Less
                                                                                                                than 2
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-in">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-in">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cabin-selection">
                                                                                        <h6>Cabin Class</h6>
                                                                                        <div class="cabin-list">
                                                                                            <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="muiButton-label">Economy
                                                                                                    </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="label-select-btn active">
                                                                                                    <span
                                                                                                        class="muiButton-label">
                                                                                                        Business
                                                                                                    </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="MuiButton-label">First
                                                                                                        Class </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span>Business</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="add_multy_form">
                                                                <button type="button" id="addMulticityRow">+ Add
                                                                    another
                                                                    flight
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                0 Passenger
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                 aria-labelledby="dropdownMenuButton1">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span
                                                                                        class="muiButton-label">Economy
                                                                                    </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="label-select-btn active">
                                                                                    <span class="muiButton-label">
                                                                                        Business
                                                                                    </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span class="MuiButton-label">First
                                                                                        Class </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                0 Passenger
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                 aria-labelledby="dropdownMenuButton1">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span
                                                                                        class="muiButton-label">Economy
                                                                                    </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="label-select-btn active">
                                                                                    <span class="muiButton-label">
                                                                                        Business
                                                                                    </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span class="MuiButton-label">First
                                                                                        Class </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="visa-application" role="tabpanel" aria-labelledby="visa-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Select country</p>
                                                        <input type="text" value="United states">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Your nationality</p>
                                                        <input type="text" value="Bangladesh">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Entry date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Exit date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Traveller, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                0 Traveller
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                 aria-labelledby="dropdownMenuButton1">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Traveller</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="apartments" role="tabpanel" aria-labelledby="apartments-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class </p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                0 Traveler
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                 aria-labelledby="dropdownMenuButton1">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text"><span
                                                                                        class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                            class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span
                                                                                        class="muiButton-label">Economy
                                                                                    </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="label-select-btn active">
                                                                                    <span class="muiButton-label">
                                                                                        Business
                                                                                    </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span class="MuiButton-label">First
                                                                                        Class </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="oneway_search_form">
                                                        <form action="#!">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>From</p>
                                                                        <input type="text" value="Dhaka">
                                                                        <span>Bus Trtminal</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>To</p>
                                                                        <input type="text" value="Cox’s Bazar ">
                                                                        <span>Bus Trtminal</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p>Journey date</p>
                                                                                <input type="date" value="2022-05-05">
                                                                                <span>Thursday</span>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p>Return date</p>
                                                                                <input type="date" value="2022-05-08">
                                                                                <span>Saturday</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                    <div
                                                                        class="flight_Search_boxed dropdown_passenger_area">
                                                                        <p>Passenger, Class </p>
                                                                        <div class="dropdown">
                                                                            <button class="dropdown-toggle final-count"
                                                                                    data-toggle="dropdown" type="button"
                                                                                    id="dropdownMenuButton1"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                0 Passenger
                                                                            </button>
                                                                            <div
                                                                                class="dropdown-menu dropdown_passenger_info"
                                                                                aria-labelledby="dropdownMenuButton1">
                                                                                <div class="traveller-calulate-persons">
                                                                                    <div class="passengers">
                                                                                        <h6>Passengers</h6>
                                                                                        <div class="passengers-types">
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text"><span
                                                                                                        class="count pcount">2</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p>Adult</p>
                                                                                                        <span>12+
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text"><span
                                                                                                        class="count ccount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Children
                                                                                                        </p><span>2
                                                                                                                - Less than 12
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-c">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-c">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text"><span
                                                                                                        class="count incount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Infant
                                                                                                        </p><span>Less
                                                                                                                than 2
                                                                                                                yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-in">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-in">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cabin-selection">
                                                                                        <h6>Cabin Class</h6>
                                                                                        <div class="cabin-list">
                                                                                            <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="muiButton-label">Economy
                                                                                                    </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="label-select-btn active">
                                                                                                    <span
                                                                                                        class="muiButton-label">
                                                                                                        Business
                                                                                                    </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="MuiButton-label">First
                                                                                                        Class </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span>Business</span>
                                                                    </div>
                                                                </div>
                                                                <div class="top_form_search_button">
                                                                    <button class="btn btn_theme btn_md">Search</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Cruise line</p>
                                                        <input type="text" placeholder="American line">
                                                        <span>Choose your cruise</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03">
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Promotional Tours Area -->
<section id="promotional_tours" class="section_padding_top">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Popular destination</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                    <div class="theme_common_box_two img_hover">
                        <div class="theme_two_box_img">
                            <a href="hotel-details.html">
                                <img src="{{asset('assets/img/tab-img/hotel1.png')}}"
                                     alt="img">
                            </a>
                            <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                        </div>
                        <div class="theme_two_box_content">
                            <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <h3>$99.00 <span>Price starts from</span></h3>
                        </div>
                    </div>
                    <div class="theme_common_box_two img_hover">
                        <div class="theme_two_box_img">
                            <a href="hotel-details.html"><img src="{{asset('assets/img/tab-img/hotel2.png')}}"
                                                              alt="img"></a>
                            <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                            <div class="discount_tab">
                                <span>50%</span>
                            </div>
                        </div>
                        <div class="theme_two_box_content">
                            <h4><a href="hotel-details.html">Hotel paradise international</a></h4>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <h3>$99.00 <span>Price starts from</span></h3>
                        </div>
                    </div>
                    <div class="theme_common_box_two img_hover">
                        <div class="theme_two_box_img">
                            <a href="hotel-details.html"><img src="{{asset('assets/img/tab-img/hotel3.png')}}"
                                                              alt="img"></a>
                            <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                        </div>
                        <div class="theme_two_box_content">
                            <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <h3>$99.00 <span>Price starts from</span></h3>
                        </div>
                    </div>
                    <div class="theme_common_box_two img_hover">
                        <div class="theme_two_box_img">
                            <a href="hotel-details.html"><img src="{{asset('assets/img/tab-img/hotel4.png')}}"
                                                              alt="img"></a>
                            <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                            <div class="discount_tab">
                                <span>50%</span>
                            </div>
                        </div>
                        <div class="theme_two_box_content">
                            <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <h3>$99.00 <span>Price starts from</span></h3>
                        </div>
                    </div>
                    <div class="theme_common_box_two img_hover">
                        <div class="theme_two_box_img">
                            <a href="hotel-details.html"><img src="{{asset('assets/img/tab-img/hotel6.png')}}"
                                                              alt="img"></a>
                            <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                        </div>
                        <div class="theme_two_box_content">
                            <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <h3>$99.00 <span>Price starts from</span></h3>
                        </div>
                    </div>
                    <div class="theme_common_box_two img_hover">
                        <div class="theme_two_box_img">
                            <a href="hotel-details.html"><img src="{{asset('assets/img/tab-img/hotel7.png')}}"
                                                              alt="img"></a>
                            <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                        </div>
                        <div class="theme_two_box_content">
                            <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <h3>$99.00 <span>Price starts from</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Offer Area -->
<section id="offer_area" class="section_padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="offer_area_box d-none-phone img_animation">
                    <img src="{{asset('assets/img/offer/offer1.png')}}" alt="img">
                    <div class="offer_area_content">
                        <h2>Special Offers</h2>
                        <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum
                            dolor sit amet.</p>
                        <a href="#!" class="btn btn_theme btn_md">Holiday deals</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="offer_area_box img_animation">
                    <img src="{{asset('assets/img/offer/offer2.png')}}" alt="img">
                    <div class="offer_area_content">
                        <h2>News letter</h2>
                        <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                        <a href="#!" class="btn btn_theme btn_md">Subscribe now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="offer_area_box img_animation">
                    <img src="{{asset('assets/img/offer/offer3.png')}}" alt="img">
                    <div class="offer_area_content">
                        <h2>Travel tips</h2>
                        <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                        <a href="#!" class="btn btn_theme btn_md">Get tips</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Area -->
<section id="cta_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="cta_left">
                    <div class="cta_icon">
                        <img src="{{asset('assets/img/common/email.png')}}" alt="icon">
                    </div>

                    <!-- Offer Area -->
                    <div class="cta_content">
                        <h2>Send Text Message</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cat_form">
                    <form id="cta_form_wrappper">
                        <div>
                            <input type="text" name="name" class="form-control"
                                   placeholder="Enter your name">
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control"
                                   placeholder="Enter your mail address">
                        </div>
                        <div>
                            <textarea name="message" class="form-control" placeholder="Enter your message"></textarea>
                        </div>
                        <br>
                        <div>
                            <button class="btn btn_theme btn_md" type="button">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Other Services</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="hotel-search.html">List My Hotel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Top cities</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="room-details.html">Chicago</a></li>
                        <li><a href="hotel-details.html">New York</a></li>
                        <li><a href="hotel-booking.html">San Francisco</a></li>
                        <li><a href="tour-search.html">California</a></li>
                        <li><a href="tour-booking.html">Ohio </a></li>
                        <li><a href="tour-guides.html">Alaska</a></li>
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
<!-- owl carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- wow.js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/add-form.js')}}"></script>
<script src="{{asset('assets/js/form-dropdown.js')}}"></script>
</body>


</html>

