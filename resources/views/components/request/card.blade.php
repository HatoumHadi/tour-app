<div class="form-group">

    <!-- Form Area -->
    <section id="theme_search_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <x-request.card-tabs :$previousFlight
                                             :$previousHotelReservation
                                             :$previousTravelInsurance
                                             :$previousVisa/>
                        <div class="tab-content" id="myTabContent">
                            <div
                                @class(['tab-pane fade', 'show active' => $previousFlight || $noneTrue()])
                                id="flights" role="tabpanel" aria-labelledby="flights-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <x-request.tabs.flight class="oneway_search_form"/>
                                    </div>
                                </div>
                            </div>
                            <div
                                @class(['tab-pane fade', 'show active' => $previousHotelReservation])
                                id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <x-request.tabs.hotel-reservation class="tour_search_form"/>
                                    </div>
                                </div>
                            </div>
                            <div @class(['tab-pane fade', 'show active' => $previousVisa])
                                 id="visa-application" role="tabpanel" aria-labelledby="visa-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <x-request.tabs.visa class="tour_search_form"/>
                                    </div>
                                </div>
                            </div>
                            <div @class(['tab-pane fade', 'show active' => $previousTravelInsurance])
                                 id="travel-insurance" role="tabpanel" aria-labelledby="travel-insurance-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <x-request.tabs.travel-insurance class="tour_search_form"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
