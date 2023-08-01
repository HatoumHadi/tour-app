<x-layouts.app>

    <div>

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>{{ $getValue('title') }}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">{{ __('translations.home') }}</a></li>
                                <li><span><i class="fas fa-circle"></i></span>{{ __('translations.about-us') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us -->
        <section id="about_us_top" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_us_left">
                            <h5>{{ $getValue('intro-title') }}</h5>
                            <h2>{{ $getValue('intro-description') }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_us_right">
                            <img src="{{ asset("storage/" . $getValue('intro-image')) }}" alt="img">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About Service Area -->
        <section id="about_service_offer" class="section_padding_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="about_service_boxed">
                            <img src="{{ asset("storage/" . $getIcon('first-card-title')) }}" alt="img">
                            <h5>{{ $getValue('first-card-title') }}</h5>
                            <p>{{ $getValue('first-card-description') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="about_service_boxed">
                            <img src="{{ asset("storage/" . $getIcon('second-card-title')) }}" alt="img">
                            <h5>{{ $getValue('second-card-title') }}</h5>
                            <p>{{ $getValue('second-card-description') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="about_service_boxed">
                            <img src="{{ asset("storage/" . $getIcon('third-card-title')) }}" alt="img">
                            <h5>{{ $getValue('third-card-title') }}</h5>
                            <p>{{ $getValue('third-card-description') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="about_service_boxed">
                            <img src="{{ asset("storage/" . $getIcon('forth-card-title')) }}" alt="img">
                            <h5>{{ $getValue('forth-card-title') }}</h5>
                            <p>{{ $getValue('forth-card-description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- consultation Area -->
        <section id="consultation_area"
                 @style("background-image: url(". asset("storage/" . $getValue('middle-banner')) . ")") class="section_padding_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="consultation_area_text">
                            <h2>{{ $getValue('middle-title') }}</h2>
                            <p>{{ $getValue('middle-description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter Area -->
        <section id="counter_area" class="section_padding_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="counter_area_wrapper">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                    <div class="counter_item">
                                        <img src="{{ asset("storage/" . $getIcon('first-badge')) }}" alt="icon">
                                        <h3 class="counter">{{ $getValue('first-badge') }}</h3>
                                        <h6>{{ $getValue('first-badge-label') }}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                    <div class="counter_item">
                                        <img src="{{ asset("storage/" . $getIcon('second-badge')) }}" alt="icon">
                                        <h3 class="counter">{{ $getValue('second-badge') }}</h3>
                                        <h6>{{ $getValue('second-badge-label') }}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                    <div class="counter_item">
                                        <img src="{{ asset("storage/" . $getIcon('third-badge')) }}" alt="icon">
                                        <h3 class="counter">{{ $getValue('third-badge') }}</h3>
                                        <h6>{{ $getValue('third-badge-label') }}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                    <div class="counter_item">
                                        <img src="{{ asset("storage/" . $getIcon('forth-badge')) }}" alt="icon">
                                        <h3 class="counter">{{ $getValue('forth-badge') }}</h3>
                                        <h6>{{ $getValue('forth-badge-label') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
