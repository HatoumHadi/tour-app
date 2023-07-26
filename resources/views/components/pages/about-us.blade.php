<x-layouts.app>

<div>

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>About us</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> About</li>
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
                        <h5>About us</h5>
                        <h2>We Are The World Best Travel Agency Company Since 2000</h2>
                        <p>{{$generalInfo->description}}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_right">
                        <img src="assets/img/common/abour_right.png" alt="img">
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
                        <img src="assets/img/icon/world.png" alt="img">
                        <h5><a href="#!">Best services</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/walte.png" alt="img">
                        <h5><a href="#!">Trusted payment</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/star.png" alt="img">
                        <h5><a href="#!">Top facility</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/persentis.png" alt="img">
                        <h5><a href="#!">Awesome deals</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- consultation Area -->
    <section id="consultation_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="consultation_area_text">
                        <h2>Have you any question? Get A Consultation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat</p>
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
                                    <img src="assets/img/icon/user.png" alt="icon">
                                    <h3 class="counter">2348</h3>
                                    <h6>Partners</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/bank.png" alt="icon">
                                    <h3 class="counter">1748</h3>
                                    <h6>Listed property</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/world-map.png" alt="icon">
                                    <h3 class="counter">4287</h3>
                                    <h6>Destinations</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/calander.png" alt="icon">
                                    <h3 class="counter">40</h3>
                                    <h6>Booking</h6>
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
