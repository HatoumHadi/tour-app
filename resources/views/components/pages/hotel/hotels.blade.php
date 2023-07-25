<x-layouts.app>
    <div>

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Hotel search result</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span> Hotel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Area -->
        <section id="theme_search_form_tour">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="theme_search_form_area">
                            <div class="theme_search_form_tabbtn">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="flights-tab" data-bs-toggle="tab"
                                                data-bs-target="#flights" type="button" role="tab"
                                                aria-controls="flights"
                                                aria-selected="true"><i class="fas fa-plane-departure"></i>Flights
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tours-tab" data-bs-toggle="tab"
                                                data-bs-target="#tours"
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
                                                data-bs-target="#visa-application" type="button" role="tab"
                                                aria-controls="visa"
                                                aria-selected="false"><i class="fas fa-passport"></i> Visa
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="apartments-tab" data-bs-toggle="tab"
                                                data-bs-target="#apartments" type="button" role="tab"
                                                aria-controls="apartments"
                                                aria-selected="false"><i class="fas fa-building"></i> Apartments
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="bus-tab" data-bs-toggle="tab"
                                                data-bs-target="#bus" type="button" role="tab" aria-controls="bus"
                                                aria-selected="false"><i class="fas fa-bus"></i> Bus
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="cruise-tab" data-bs-toggle="tab"
                                                data-bs-target="#cruise" type="button" role="tab" aria-controls="cruise"
                                                aria-selected="false"><i class="fas fa-ship"></i> Cruise
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
                                                        <button class="nav-link active" id="oneway-tab"
                                                                data-bs-toggle="tab"
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
                                                        <button class="nav-link" id="multi_city-tab"
                                                                data-bs-toggle="tab"
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
                                                                        <div
                                                                            class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                            <div
                                                                                class="flight_Search_boxed dropdown_passenger_area">
                                                                                <p>Passenger, Class </p>
                                                                                <div class="dropdown">
                                                                                    <button
                                                                                        class="dropdown-toggle final-count"
                                                                                        data-toggle="dropdown"
                                                                                        type="button"
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
                                                                                                        <div
                                                                                                            class="text">
                                                                                                        <span
                                                                                                            class="count pcount">2</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p>
                                                                                                                    Adult</p>
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
                                                                                                        <div
                                                                                                            class="text">
                                                                                                        <span
                                                                                                            class="count ccount">0</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p
                                                                                                                    class="fz14 mb-xs-0">
                                                                                                                    Children
                                                                                                                </p>
                                                                                                                <span>2
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
                                                                                                        <div
                                                                                                            class="text">
                                                                                                        <span
                                                                                                            class="count incount">0</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p
                                                                                                                    class="fz14 mb-xs-0">
                                                                                                                    Infant
                                                                                                                </p>
                                                                                                                <span>Less
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
                                                                                            <div
                                                                                                class="cabin-selection">
                                                                                                <h6>Cabin Class</h6>
                                                                                                <div class="cabin-list">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="label-select-btn">
                                                                                                    <span
                                                                                                        class="muiButton-label">Economy
                                                                                                    </span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="label-select-btn active">
                                                                                                    <span
                                                                                                        class="muiButton-label">
                                                                                                        Business
                                                                                                    </span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
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
                                                                        <div
                                                                            class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                            <div
                                                                                class="flight_Search_boxed dropdown_passenger_area">
                                                                                <p>Passenger, Class </p>
                                                                                <div class="dropdown">
                                                                                    <button
                                                                                        class="dropdown-toggle final-count"
                                                                                        data-toggle="dropdown"
                                                                                        type="button"
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
                                                                                                        <div
                                                                                                            class="text">
                                                                                                        <span
                                                                                                            class="count pcount">2</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p>
                                                                                                                    Adult</p>
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
                                                                                                        <div
                                                                                                            class="text">
                                                                                                        <span
                                                                                                            class="count ccount">0</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p
                                                                                                                    class="fz14 mb-xs-0">
                                                                                                                    Children
                                                                                                                </p>
                                                                                                                <span>2
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
                                                                                                        <div
                                                                                                            class="text">
                                                                                                        <span
                                                                                                            class="count incount">0</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p
                                                                                                                    class="fz14 mb-xs-0">
                                                                                                                    Infant
                                                                                                                </p>
                                                                                                                <span>Less
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
                                                                                            <div
                                                                                                class="cabin-selection">
                                                                                                <h6>Cabin Class</h6>
                                                                                                <div class="cabin-list">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="label-select-btn">
                                                                                                    <span
                                                                                                        class="muiButton-label">Economy
                                                                                                    </span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="label-select-btn active">
                                                                                                    <span
                                                                                                        class="muiButton-label">
                                                                                                        Business
                                                                                                    </span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
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
                                <div class="tab-pane fade" id="visa-application" role="tabpanel"
                                     aria-labelledby="visa-tab">
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
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
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
                                <div class="tab-pane fade" id="apartments" role="tabpanel"
                                     aria-labelledby="apartments-tab">
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
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
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
                                                                        <div
                                                                            class="col-lg-4  col-md-6 col-sm-12 col-12">
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
                                                                                               value="2022-05-08">
                                                                                        <span>Saturday</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                            <div
                                                                                class="flight_Search_boxed dropdown_passenger_area">
                                                                                <p>Passenger, Class </p>
                                                                                <div class="dropdown">
                                                                                    <button
                                                                                        class="dropdown-toggle final-count"
                                                                                        data-toggle="dropdown"
                                                                                        type="button"
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
                                                                                                        <div
                                                                                                            class="text"><span
                                                                                                                class="count pcount">2</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p>
                                                                                                                    Adult</p>
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
                                                                                                        <div
                                                                                                            class="text"><span
                                                                                                                class="count ccount">0</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p
                                                                                                                    class="fz14 mb-xs-0">
                                                                                                                    Children
                                                                                                                </p>
                                                                                                                <span>2
                                                                                                                - Less than 12
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
                                                                                                        <div
                                                                                                            class="text"><span
                                                                                                                class="count incount">0</span>
                                                                                                            <div
                                                                                                                class="type-label">
                                                                                                                <p
                                                                                                                    class="fz14 mb-xs-0">
                                                                                                                    Infant
                                                                                                                </p>
                                                                                                                <span>Less
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
                                                                                            <div
                                                                                                class="cabin-selection">
                                                                                                <h6>Cabin Class</h6>
                                                                                                <div class="cabin-list">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="label-select-btn">
                                                                                                    <span
                                                                                                        class="muiButton-label">Economy
                                                                                                    </span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="label-select-btn active">
                                                                                                    <span
                                                                                                        class="muiButton-label">
                                                                                                        Business
                                                                                                    </span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
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
                                                                            <button class="btn btn_theme btn_md">
                                                                                Search
                                                                            </button>
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

        <!-- Flight Search Areas -->
        <section id="explore_area" class="section_padding">
            <div class="container">
                <!-- Section Heading -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section_heading_center">
                            <h2>38 hotels found</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left_side_search_area">
                            <div class="left_side_search_boxed">
                                <div class="item_searc_map_area">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"></iframe>
                                </div>
                            </div>
                            <div class="left_side_search_boxed">
                                <div class="left_side_search_heading">
                                    <h5>Search by name</h5>
                                </div>
                                <div class="name_search_form">
                                    <input type="text" class="form-control" placeholder="e.g Deluxe bus">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <div class="left_side_search_boxed">
                                <div class="left_side_search_heading">
                                    <h5>Filter by price</h5>
                                </div>
                                <div class="filter-price">
                                    <div id="price-slider"></div>
                                </div>
                                <button class="apply" type="button">Apply</button>
                            </div>
                            <div class="left_side_search_boxed">
                                <div class="left_side_search_heading">
                                    <h5>Filter by Review</h5>
                                </div>
                                <div class="filter_review">
                                    <form class="review_star">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault2">
                                            <label class="form-check-label" for="flexCheckDefault2">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault3">
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault5">
                                            <label class="form-check-label" for="flexCheckDefault5">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="left_side_search_boxed">
                                <div class="left_side_search_heading">
                                    <h5>Filter by hotel star</h5>
                                </div>
                                <div class="filter_review">
                                    <form class="review_star">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefaulta">
                                            <label class="form-check-label" for="flexCheckDefaulta">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefaulf21">
                                            <label class="form-check-label" for="flexCheckDefaulf21">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefaultf3">
                                            <label class="form-check-label" for="flexCheckDefaultf3">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefaultf4">
                                            <label class="form-check-label" for="flexCheckDefaultf4">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefaultf5">
                                            <label class="form-check-label" for="flexCheckDefaultf5">
                                                <i class="fas fa-star color_theme"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                                <i class="fas fa-star color_asse"></i>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="left_side_search_boxed">
                                <div class="left_side_search_heading">
                                    <h5>Facilities</h5>
                                </div>
                                <div class="tour_search_type">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultf1">
                                        <label class="form-check-label" for="flexCheckDefaultf1">
                                        <span class="area_flex_one">
                                            <span>Wake-up call</span>
                                            <span>20</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultf2">
                                        <label class="form-check-label" for="flexCheckDefaultf2">
                                        <span class="area_flex_one">
                                            <span>Flat TV</span>
                                            <span>14</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultaf3">
                                        <label class="form-check-label" for="flexCheckDefaultaf3">
                                        <span class="area_flex_one">
                                            <span>Vehicle service</span>
                                            <span>30</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultaf4">
                                        <label class="form-check-label" for="flexCheckDefaultaf4">
                                        <span class="area_flex_one">
                                            <span>Guide service</span>
                                            <span>22</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultaf5">
                                        <label class="form-check-label" for="flexCheckDefaultaf5">
                                        <span class="area_flex_one">
                                            <span>Internet, Wi-fi</span>
                                            <span>41</span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="left_side_search_boxed">
                                <div class="left_side_search_heading">
                                    <h5>Hotel service</h5>
                                </div>
                                <div class="tour_search_type">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultt1">
                                        <label class="form-check-label" for="flexCheckDefaultt1">
                                        <span class="area_flex_one">
                                            <span>Gymnasium</span>
                                            <span>20</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultt2">
                                        <label class="form-check-label" for="flexCheckDefaultt2">
                                        <span class="area_flex_one">
                                            <span>Mountain Bike</span>
                                            <span>14</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultt3">
                                        <label class="form-check-label" for="flexCheckDefaultt3">
                                        <span class="area_flex_one">
                                            <span>Wifi</span>
                                            <span>62</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultt4">
                                        <label class="form-check-label" for="flexCheckDefaultt4">
                                        <span class="area_flex_one">
                                            <span>Aerobics Room</span>
                                            <span>08</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefaultt5">
                                        <label class="form-check-label" for="flexCheckDefaultt5">
                                        <span class="area_flex_one">
                                            <span>Golf Cages</span>
                                            <span>12</span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cruise_search_result_wrapper">
                                    <div class="cruise_search_item">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="cruise_item_img">
                                                    <img src="assets/img/hotel/hotel-list-1.png" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="cruise_item_inner_content">
                                                    <div class="cruise_content_top_wrapper">
                                                        <div class="cruise_content_top_left">
                                                            <h4>Hotel castle salam</h4>
                                                            <p><i class="fas fa-map-marker-alt"></i> Beijing, China</p>
                                                        </div>
                                                        <div class="cruise_content_top_right">
                                                            <h5>4.8/5 Excellent</h5>
                                                            <h4>(1214 reviewes)</h4>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Deluxe room</h5>
                                                            <p>1 extra large double bed</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <p>2 nights, 1 adult</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Free cancellation</h5>
                                                            <p>Cancel your booking at any time</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <h3>$99.00 <sub>/Per person</sub></h3>
                                                            <p>+ $20.00 tax and vat</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_bottom_wrapper">
                                                        <div class="cruise_content_bottom_left">
                                                            <ul>
                                                                <li>Breakfast</li>
                                                                <li>Free wi fi</li>
                                                                <li>Transport</li>
                                                                <li>Gym</li>
                                                            </ul>
                                                        </div>
                                                        <div class="cruise_content_bottom_right">
                                                            <a href="{{route('hotel-details')}}" class="btn btn_theme btn_md">Check
                                                                availability</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruise_search_item">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="cruise_item_img">
                                                    <img src="assets/img/hotel/hotel-list-2.png" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="cruise_item_inner_content">
                                                    <div class="cruise_content_top_wrapper">
                                                        <div class="cruise_content_top_left">
                                                            <h4>Hotel Royel</h4>
                                                            <p><i class="fas fa-map-marker-alt"></i> Beijing, China</p>
                                                        </div>
                                                        <div class="cruise_content_top_right">
                                                            <h5>4.8/5 Excellent</h5>
                                                            <h4>(1214 reviewes)</h4>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Deluxe room</h5>
                                                            <p>1 extra large double bed</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <p>2 nights, 1 adult</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Free cancellation</h5>
                                                            <p>Cancel your booking at any time</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <h3>$99.00 <sub>/Per person</sub></h3>
                                                            <p>+ $20.00 tax and vat</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_bottom_wrapper">
                                                        <div class="cruise_content_bottom_left">
                                                            <ul>
                                                                <li>Breakfast</li>
                                                                <li>Free wi fi</li>
                                                                <li>Transport</li>
                                                                <li>Gym</li>
                                                            </ul>
                                                        </div>
                                                        <div class="cruise_content_bottom_right">
                                                            <a href="{{route('hotel-details')}}" class="btn btn_theme btn_md">Check
                                                                availability</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruise_search_item">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="cruise_item_img">
                                                    <img src="assets/img/hotel/hotel-list-3.png" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="cruise_item_inner_content">
                                                    <div class="cruise_content_top_wrapper">
                                                        <div class="cruise_content_top_left">
                                                            <h4>Hotel sun hommachi</h4>
                                                            <p><i class="fas fa-map-marker-alt"></i> Beijing, China</p>
                                                        </div>
                                                        <div class="cruise_content_top_right">
                                                            <h5>4.8/5 Excellent</h5>
                                                            <h4>(1214 reviewes)</h4>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Deluxe room</h5>
                                                            <p>1 extra large double bed</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <p>2 nights, 1 adult</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Free cancellation</h5>
                                                            <p>Cancel your booking at any time</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <h3>$99.00 <sub>/Per person</sub></h3>
                                                            <p>+ $20.00 tax and vat</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_bottom_wrapper">
                                                        <div class="cruise_content_bottom_left">
                                                            <ul>
                                                                <li>Breakfast</li>
                                                                <li>Free wi fi</li>
                                                                <li>Transport</li>
                                                                <li>Gym</li>
                                                            </ul>
                                                        </div>
                                                        <div class="cruise_content_bottom_right">
                                                            <a href="{{route('hotel-details')}}" class="btn btn_theme btn_md">Check
                                                                availability</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruise_search_item">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="cruise_item_img">
                                                    <img src="assets/img/hotel/hotel-list-4.png" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="cruise_item_inner_content">
                                                    <div class="cruise_content_top_wrapper">
                                                        <div class="cruise_content_top_left">
                                                            <h4>Hotel paradise international</h4>
                                                            <p><i class="fas fa-map-marker-alt"></i> Beijing, China</p>
                                                        </div>
                                                        <div class="cruise_content_top_right">
                                                            <h5>4.8/5 Excellent</h5>
                                                            <h4>(1214 reviewes)</h4>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Deluxe room</h5>
                                                            <p>1 extra large double bed</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <p>2 nights, 1 adult</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Free cancellation</h5>
                                                            <p>Cancel your booking at any time</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <h3>$99.00 <sub>/Per person</sub></h3>
                                                            <p>+ $20.00 tax and vat</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_bottom_wrapper">
                                                        <div class="cruise_content_bottom_left">
                                                            <ul>
                                                                <li>Breakfast</li>
                                                                <li>Free wi fi</li>
                                                                <li>Transport</li>
                                                                <li>Gym</li>
                                                            </ul>
                                                        </div>
                                                        <div class="cruise_content_bottom_right">
                                                            <a href="{{route('hotel-details')}}" class="btn btn_theme btn_md">Check
                                                                availability</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruise_search_item">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="cruise_item_img">
                                                    <img src="assets/img/hotel/hotel-list-5.png" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="cruise_item_inner_content">
                                                    <div class="cruise_content_top_wrapper">
                                                        <div class="cruise_content_top_left">
                                                            <h4>Manila international resorti</h4>
                                                            <p><i class="fas fa-map-marker-alt"></i> Beijing, China</p>
                                                        </div>
                                                        <div class="cruise_content_top_right">
                                                            <h5>4.8/5 Excellent</h5>
                                                            <h4>(1214 reviewes)</h4>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Deluxe room</h5>
                                                            <p>1 extra large double bed</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <p>2 nights, 1 adult</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_middel_wrapper">
                                                        <div class="cruise_content_middel_left">
                                                            <h5>Free cancellation</h5>
                                                            <p>Cancel your booking at any time</p>
                                                        </div>
                                                        <div class="cruise_content_middel_right">
                                                            <h3>$99.00 <sub>/Per person</sub></h3>
                                                            <p>+ $20.00 tax and vat</p>
                                                        </div>
                                                    </div>
                                                    <div class="cruise_content_bottom_wrapper">
                                                        <div class="cruise_content_bottom_left">
                                                            <ul>
                                                                <li>Breakfast</li>
                                                                <li>Free wi fi</li>
                                                                <li>Transport</li>
                                                                <li>Gym</li>
                                                            </ul>
                                                        </div>
                                                        <div class="cruise_content_bottom_right">
                                                            <a href="{{route('hotel-details')}}" class="btn btn_theme btn_md">Check
                                                                availability</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="load_more_flight">
                                    <button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
