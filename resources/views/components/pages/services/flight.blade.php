<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Flight request</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span> Flight request</li>
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
                                <h3 class="heading_theme">Flight request</h3>
                                <x-request.tabs.flight class="tour_booking_form_box"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
