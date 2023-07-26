<x-layouts.app>

    <div>
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
                                                                            <button class="btn btn_theme btn_md">Search
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
                            @foreach($places as $singlePlace)
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="{{route('adventure-details')}}">
                                            @if(count($singlePlace->photoGallery) > 0)
                                                @foreach($singlePlace->photoGallery as $image)
                                                    <img src="{{ asset('storage/' . $image->media) }}"
                                                         alt="img">
                                                @endforeach
                                            @else
                                                <img src="{{ asset('storage/images/AdventureDefualtImage.png') }}"
                                                     alt="img">
                                            @endif
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>{{$singlePlace->city->name}}</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="{{route('adventure-details')}}">{{$singlePlace->title}}</a></h4>
                                        <p>{{$singlePlace->description}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="load_more_flight">
                    <a href="{{route('show-places')}}" class="btn btn_theme btn_md"> View all</a>
                </div>

            </div>
        </section>


        <!-- Offer Area -->
        <section id="offer_area" class="section_padding_top">
            <div class="container">
                <div class="row">
                    @foreach($packages as $index=>$package)
                        @if($index<2)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="offer_area_box d-none-phone img_animation">
                                    @if(count($package->photoGallery) > 0)
                                        @foreach($package->photoGallery as $image)
                                            <img src="{{ asset('storage/' . $image->media) }}"
                                                 alt="img">
                                        @endforeach
                                    @else
                                        <img src="{{ asset('storage/images/AdventureDefualtImage.png') }}"
                                             alt="img">
                                    @endif
                                    <div class="offer_area_content">
                                        <h2>Special Offers</h2>
                                        <h2>{{$package->title}}</h2>
                                        <p>{{$package->description}}</p>
                                        <a href="#!" class="btn btn_theme btn_md">Holiday deals</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>

                <div class="load_more_flight">
                    <a href="{{route('show-packages')}}" class="btn btn_theme btn_md"> View all</a>
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
                                    <textarea name="message" class="form-control"
                                              placeholder="Enter your message"></textarea>
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
    </div>

</x-layouts.app>
