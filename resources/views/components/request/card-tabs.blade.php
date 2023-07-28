<div class="theme_search_form_tabbtn">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button @class(['nav-link', 'active' => $previousFlight || $noneTrue()]) id="flights-tab" data-bs-toggle="tab"
                    data-bs-target="#flights" type="button" role="tab"
                    aria-controls="flights" aria-selected="true">
                <i class="fas fa-plane-departure"></i>Flights
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button @class(['nav-link', 'active' => $previousHotelReservation]) id="hotels-tab" data-bs-toggle="tab"
                    data-bs-target="#hotels" type="button" role="tab"
                    aria-controls="hotels" aria-selected="false">
                <i class="fas fa-hotel"></i>Hotel reservation
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button @class(['nav-link', 'active' => $previousVisa]) id="visa-tab" data-bs-toggle="tab"
                    data-bs-target="#visa-application" type="button" role="tab"
                    aria-controls="visa" aria-selected="false">
                <i class="fas fa-passport"></i> Visa
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button @class(['nav-link', 'active' => $previousTravelInsurance]) id="travel-insurance-tab" data-bs-toggle="tab"
                    data-bs-target="#travel-insurance" type="button" role="tab"
                    aria-controls="travel-insurance" aria-selected="false">
                <i class="fas fa-building"></i> Travel insurance
            </button>
        </li>
    </ul>
</div>
