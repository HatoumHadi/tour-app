<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Hotel Reservation Request</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Hotel Reservation Request</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tour Booking Submission Areas -->
        <section id="tour_booking_submission" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tou_booking_form_Wrapper">
                            <div class="booking_tour_form">
                                <h3 class="heading_theme">Hotel reservation request</h3>
                                <x-request.tabs.hotel-reservation class="tour_booking_form_box"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
