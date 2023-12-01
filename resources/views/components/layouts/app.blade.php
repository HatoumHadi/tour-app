<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>{{ config('app.name') }}</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}"/>
    <!--slick-theme.css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.html')}}"/>
    <!-- Rangeslider css -->
    <link rel="stylesheet" href="{{asset('assets/css/nouislider.css')}}"/>
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
    <style>
        .text-wrap {
            white-space: break-spaces !important;
        }
    </style>
    @if($direction === \App\Definitions\LanguageDirection::RTL->value)
        <style>
            .topbar-others-options li::before {
                content: "";
                position: absolute;
                top: 5px;
                left: -15px;
                right: unset;
                width: 1px;
                height: 15px;
                background-color: #dbdbdb78;
            }

            .topbar-list li::before {
                content: "";
                position: absolute;
                top: 5px;
                left: -15px;
                right: unset;
                width: 1px;
                height: 15px;
                background-color: #dbdbdb78;
            }

            .offer_area_box .offer_area_content {
                position: absolute;
                right: 0;
                left: unset;
                bottom: 0;
                padding: 30px 27px;
                z-index: 999;
            }

            .footer_inquery_area {
                padding-top: 5px;
                border-right: 2px solid var(--main-color);
                border-left: unset;
                margin-top: 25px;
                padding-right: 9px;
                padding-left: unset;
            }
            .theme_search_form_tabbtn .nav-item {
                margin-left: 20px;
                margin-right: unset;
            }
            .theme_search_form_tabbtn .nav-tabs .nav-link i {
                padding-left: 10px;
                padding-right: unset;
            }
            .plan_icon_posation {
                position: absolute;
                top: 20px;
                left: 30px;
                right: unset;
            }
            .flight_Search_boxed {
                background: rgba(101, 122, 255, 0.09);
                padding: 10px 20px 10px 10px;
                border-radius: 10px;
                position: relative;
            }
            .range_plan {
                z-index: 1;
            }
            .common_bannner_text ul li span i {
                color: var(--white-color);
                font-size: 7px;
                position: relative;
                top: -2px;
                right: -3px;
                left: unset;
            }
            .main-navbar .navbar .navbar-nav .nav-item:last-child {
                margin-left: 0;
                margin-right: 30px;
            }
        </style>
    @endif
</head>

<body dir="{{ $direction }}">
<!-- Header Area -->
<header class="main_header_arae">
    <!-- Top Bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list">
                        <li>
                            <a href="{{ $facebookLink }}"><i class="fab fa-facebook"></i></a>
                            <a href="{{ $twitterLink }}"><i class="fab fa-twitter-square"></i></a>
                            <a href="{{ $instagramLink }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $linkedInLink }}"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li><a href="tel:{{ $contactPhoneNumber }}"><span>{{ $contactPhoneNumber }}</span></a></li>
                        <li @style(['margin-right: 28px' => $direction === \App\Definitions\LanguageDirection::RTL->value])>
                            <a href="mailto:{{ $contactEmail }}"><span>{{ $contactEmail }}</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-others-options">
                        @guest
                            <li><a href="{{route('login')}}">{{ __('translations.login') }}</a></li>
                            <li><a href="{{route('sign-up')}}">{{ __('translations.register') }}</a></li>
                        @else
                            <li>
                                <div class="dropdown language-option">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <span>{{ __('translations.my-account') }}</span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu">
                                        <a class="dropdown-item"
                                           href="{{ route('profile') }}">{{ __('translations.profile') }}</a>
                                        <a class="dropdown-item"
                                           href="{{ route('logout') }}">{{ __('translations.logout') }}</a>
                                    </div>
                                </div>
                            </li>
                        @endguest
                        <li @style(['margin-right: 28px' => $direction === \App\Definitions\LanguageDirection::RTL->value])>
                            <div class="dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    @foreach($languages as $language)
                                        <a class="dropdown-item"
                                           href="{{ route('change-lang', ['lang' => $language->code]) }}">{{ $language->name }}</a>
                                    @endforeach
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
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <div class="logo-image-size"></div>
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{route('home')}}"
                                   @class(['active' => request()->routeIs('home')]) class="nav-link">
                                    {{ __('translations.home') }}
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a href="#"--}}
{{--                                   class="nav-link" @class(['active' => request()->routeIs('flights.index', 'hotel-reservations.index', 'visa.index', 'travel-insurances.index')])>--}}
{{--                                    {{ __('translations.services') }}--}}
{{--                                    <i class="fas fa-angle-down"></i>--}}
{{--                                </a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('flights.index')}}">{{ __('translations.requests.flight') }}</a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item">
                                        <a href="{{route('hotel-reservations.index')}}"
                                           @class(['active' => request()->routeIs('hotel-reservations.index')]) class="nav-link">{{ __('translations.hotel-reservation') }}</a>

                                    </li>
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('visa.index')}}">{{ __('translations.requests.visa') }}</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('travel-insurances.index')}}">{{ __('translations.requests.travel-insurance') }}</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

                            <li class="nav-item">
                                <a href="{{route('packages.index')}}"
                                   @class(['active' => request()->routeIs('packages.index')]) class="nav-link">{{ __('translations.packages') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('adventures.index')}}"
                                   @class(['active' => request()->routeIs('adventures.index')]) class="nav-link">{{ __('translations.adventures') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact-us')}}"
                                   @class(['active' => request()->routeIs('contact-us')]) class="nav-link">{{ __('translations.contact-us') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about-us')}}"
                                   @class(['active' => request()->routeIs('about-us')]) class="nav-link">
                                    {{ __('translations.about-us') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div>
    {{$slot}}
</div>

<!-- Footer  -->
<footer id="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>{{ __('translations.footer.first-column.title') }}</h5>
                </div>
                <div class="footer_first_area">
                    <div class="footer_inquery_area">
                        <h5>{{ __('translations.footer.first-column.first-label') }}</h5>
                        <h3><a href="tel:{{ $contactPhoneNumber }}">{{ $contactPhoneNumber }}</a></h3>
                    </div>
                    <div class="footer_inquery_area">
                        <h5>{{ __('translations.footer.first-column.second-label') }}</h5>
                        <h3><a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a></h3>
                    </div>
                    <div class="footer_inquery_area">
                        <h5>{{ __('translations.footer.first-column.third-label') }}</h5>
                        <ul class="soical_icon_footer">
                            <li><a href="{{ $facebookLink }}"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="{{ $twitterLink }}"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="{{ $instagramLink }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $linkedInLink }}"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>{{ __('translations.footer.second-column.title') }}</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="{{ route('about-us') }}">{{ __('translations.about-us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>{{ __('translations.footer.third-column.title') }}</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="{{route('contact-us')}}">{{ __('translations.contact-us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>{{ __('translations.footer.forth-column.title') }}</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a>{{ __('translations.footer.forth-column.first-label') }}</a></li>
                        <li><a>{{ __('translations.footer.forth-column.second-label') }}</a></li>
                        <li><a>{{ __('translations.footer.forth-column.third-label') }}</a></li>
                        <li><a>{{ __('translations.footer.forth-column.forth-label') }}</a></li>
                        <li><a>{{ __('translations.footer.forth-column.fifth-label') }}</a></li>
                        <li><a>{{ __('translations.footer.forth-column.sixth-label') }}</a></li>
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
                    <p>{{ __('translations.copyrights') }}</p>
                </div>
            </div>
{{--            <div class="co-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                <div class="copyright_right">--}}
{{--                    <img src="{{asset('assets/img/common/cards.png')}}" alt="img">--}}
{{--                </div>--}}
{{--            </div>--}}
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
<script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/js/wNumb.js') }}"></script>
<!-- owl carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick-slider.js') }}"></script>
<!-- wow.js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/add-form.js')}}"></script>
<script src="{{asset('assets/js/form-dropdown.js')}}"></script>
@vite('resources/js/app.js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session()->get('message', $message ?? null))
        toastr.{{ session()->get('status', $status ?? null) ?: 'success' }}('{{ session()->get('message', $message ?? null) }}');
        @endif
    })
</script>
</body>
</html>

