<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>{{ $package->title }}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">{{ __('translations.home') }}</a></li>
                                <li><span><i class="fas fa-circle"></i></span><a
                                        href="{{route('packages.index')}}">{{ __('translations.packages') }}</a></li>
                                <li><span><i class="fas fa-circle"></i></span>{{ $package->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Destination details Areas -->
        <section id="top_destination_main" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tour_details_leftside_wrapper">
                            <div class="tour_details_heading_wrapper">
                                <div class="tour_details_top_heading">
                                    <h2>Explore the evergreen forest</h2>
                                    <h5><i class="fas fa-map-marker-alt"></i> Amazon evergreen forest, Amazon.</h5>
                                </div>
                                <div class="tour_details_top_heading_right">
                                    <h4>Excellent</h4>
                                    <h6>4.8/5</h6>
                                    <p>(1214 reviewes)</p>
                                </div>
                            </div>
                            <div class="tour_details_top_bottom">
                                <div class="toru_details_top_bottom_item">
                                    <div class="tour_details_top_bottom_icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="tour_details_top_bottom_text">
                                        <h5>Duration</h5>
                                        <p>10 days</p>
                                    </div>
                                </div>
                                <div class="toru_details_top_bottom_item">
                                    <div class="tour_details_top_bottom_icon">
                                        <i class="fas fa-paw"></i>
                                    </div>
                                    <div class="tour_details_top_bottom_text">
                                        <h5>Tour type</h5>
                                        <p>Group tour</p>
                                    </div>
                                </div>
                                <div class="toru_details_top_bottom_item">
                                    <div class="tour_details_top_bottom_icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="tour_details_top_bottom_text">
                                        <h5>Group size</h5>
                                        <p>50 people</p>
                                    </div>
                                </div>
                                <div class="toru_details_top_bottom_item">
                                    <div class="tour_details_top_bottom_icon">
                                        <i class="fas fa-map-marked"></i>
                                    </div>
                                    <div class="tour_details_top_bottom_text">
                                        <h5>Location</h5>
                                        <p>Amazon rain forest</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tour_details_img_wrapper">
                                <div class="slider-for">
                                    <div>
                                        <img src="assets/img/tour/big-img.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/big-img2.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/big-img3.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/big-img4.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/big-img5.png" alt="img">
                                    </div>
                                </div>
                                <div class="slider-nav">
                                    <div>
                                        <img src="assets/img/tour/small1-img.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/small2-img.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/small3-img.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/small4-img.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/small5-img.png" alt="img">
                                    </div>
                                    <div>
                                        <img src="assets/img/tour/small6-img.png" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="tour_details_boxed">
                                <h3 class="heading_theme">Overview</h3>
                                <div class="tour_details_boxed_inner">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata sanctus est.
                                    </p>
                                    <p>
                                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.
                                    </p>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                        <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian culture
                                        </li>
                                        <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire, and Cultural
                                            Dance at Camp</li>
                                        <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver allowances
                                        </li>
                                        <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle (SUV/Sedan) for
                                            sightseeing on all days as per the itinerary.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tour_details_boxed">
                                <h3 class="heading_theme">Itinerary</h3>
                                <div class="tour_details_boxed_inner">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion_flex_area">
                                            <div class="accordion_left_side">
                                                <h5>Day 1</h5>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                        Stet clita kasd gubergren, no sea takimata sanctus est
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="accordion_itinerary_list">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    There are many variations of passages of Lorem Ipsum
                                                                    available, but the majority have
                                                                    suffered alteration in some form
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Contrary to popular belief, Lorem Ipsum is not simply
                                                                    random
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Many desktop publishing packages and web page editors
                                                                    now
                                                                    use
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Lorem Ipsum is that it has a more-or-less normal
                                                                    distribution of letters, to using 'Content here
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    The standard chunk of Lorem Ipsum used since the 1500s
                                                                    is
                                                                    reproduced below for those interested.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion_flex_area">
                                            <div class="accordion_left_side">
                                                <h5>Day 2</h5>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                        Stet clita kasd gubergren, no sea takimata sanctus est
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                     aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="accordion_itinerary_list">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    There are many variations of passages of Lorem Ipsum
                                                                    available, but the majority have
                                                                    suffered alteration in some form
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Lorem Ipsum is that it has a more-or-less normal
                                                                    distribution of letters, to using 'Content here
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    The standard chunk of Lorem Ipsum used since the 1500s
                                                                    is
                                                                    reproduced below for those interested.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion_flex_area">
                                            <div class="accordion_left_side">
                                                <h5>Day 3</h5>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                        Stet clita kasd gubergren, no sea takimata sanctus est
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="accordion_itinerary_list">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Contrary to popular belief, Lorem Ipsum is not simply
                                                                    random
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Many desktop publishing packages and web page editors
                                                                    now
                                                                    use
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Lorem Ipsum is that it has a more-or-less normal
                                                                    distribution of letters, to using 'Content here
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    The standard chunk of Lorem Ipsum used since the 1500s
                                                                    is
                                                                    reproduced below for those interested.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion_flex_area">
                                            <div class="accordion_left_side">
                                                <h5>Day 4</h5>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">
                                                        Stet clita kasd gubergren, no sea takimata sanctus est
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                     aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="accordion_itinerary_list">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    There are many variations of passages of Lorem Ipsum
                                                                    available, but the majority have
                                                                    suffered alteration in some form
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Contrary to popular belief, Lorem Ipsum is not simply
                                                                    random
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    Many desktop publishing packages and web page editors
                                                                    now
                                                                    use
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-circle"></i>
                                                                    The standard chunk of Lorem Ipsum used since the 1500s
                                                                    is
                                                                    reproduced below for those interested.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tour_details_boxed">
                                <h3 class="heading_theme">Included/Excluded</h3>
                                <div class="tour_details_boxed_inner">
                                    <p>
                                        Stet clitaStet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod.
                                    </p>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                        <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian culture
                                        </li>
                                        <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire, and Cultural
                                            Dance at Camp</li>
                                        <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver allowances
                                        </li>
                                        <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle (SUV/Sedan) for
                                            sightseeing on all days as per the itinerary.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tour_details_boxed">
                                <h3 class="heading_theme">Tours location</h3>
                                <div class="map_area">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tour_details_right_sidebar_wrapper">
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Standard package</h3>
                                    </div>
                                    <div class="valid_date_area">
                                        <div class="valid_date_area_one">
                                            <h5>Valid from</h5>
                                            <p>01 Feb 2022</p>
                                        </div>
                                        <div class="valid_date_area_one">
                                            <h5>Valid till</h5>
                                            <p>15 Feb 2022</p>
                                        </div>
                                    </div>
                                    <div class="tour_package_details_bar_list">
                                        <h5>Package details</h5>
                                        <ul>
                                            <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                            <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                                culture
                                            </li>
                                            <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                            <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                                allowances
                                            </li>
                                            <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                        </ul>
                                    </div>
                                    <div class="tour_package_details_bar_price">
                                        <h5>Price</h5>
                                        <div class="tour_package_bar_price">
                                            <h6><del>$ 35,500</del></h6>
                                            <h3>$ 30,500 <sub>/Per serson</sub> </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour_select_offer_bar_bottom">
                                    <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select
                                        offer</button>
                                </div>
                            </div>
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Deluxe package</h3>
                                    </div>
                                    <div class="valid_date_area">
                                        <div class="valid_date_area_one">
                                            <h5>Valid from</h5>
                                            <p>01 Feb 2022</p>
                                        </div>
                                        <div class="valid_date_area_one">
                                            <h5>Valid till</h5>
                                            <p>15 Feb 2022</p>
                                        </div>
                                    </div>
                                    <div class="tour_package_details_bar_list">
                                        <h5>Package details</h5>
                                        <ul>
                                            <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                            <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                                culture
                                            </li>
                                            <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                            <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                                allowances
                                            </li>
                                            <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                        </ul>
                                    </div>
                                    <div class="tour_package_details_bar_price">
                                        <h5>Price</h5>
                                        <div class="tour_package_bar_price">
                                            <h6><del>$ 35,500</del></h6>
                                            <h3>$ 30,500 <sub>/Per serson</sub> </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour_select_offer_bar_bottom">
                                    <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select
                                        offer</button>
                                </div>
                            </div>
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Super deluxe package</h3>
                                    </div>
                                    <div class="valid_date_area">
                                        <div class="valid_date_area_one">
                                            <h5>Valid from</h5>
                                            <p>01 Feb 2022</p>
                                        </div>
                                        <div class="valid_date_area_one">
                                            <h5>Valid till</h5>
                                            <p>15 Feb 2022</p>
                                        </div>
                                    </div>
                                    <div class="tour_package_details_bar_list">
                                        <h5>Package details</h5>
                                        <ul>
                                            <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                            <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                                culture
                                            </li>
                                            <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                            <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                                allowances
                                            </li>
                                            <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                        </ul>
                                    </div>
                                    <div class="tour_package_details_bar_price">
                                        <h5>Price</h5>
                                        <div class="tour_package_bar_price">
                                            <h6><del>$ 35,500</del></h6>
                                            <h3>$ 30,500 <sub>/Per serson</sub> </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour_select_offer_bar_bottom">
                                    <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select
                                        offer</button>
                                </div>
                            </div>
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Why choose us</h3>
                                    </div>

                                    <div class="tour_package_details_bar_list first_child_padding_none">
                                        <ul>
                                            <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                            <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                                culture
                                            </li>
                                            <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                            <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                                allowances
                                            </li>
                                            <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="write_your_review_wrapper">
                            <h3 class="heading_theme">Write your review</h3>
                            <div class="write_review_inner_boxed">
                                <form action="https://andit.co/projects/html/and-tour/demo/!#" id="news_comment_form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-froup">
                                                <input type="text" class="form-control bg_input"
                                                       placeholder="Enter full name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-froup">
                                                <input type="text" class="form-control bg_input"
                                                       placeholder="Enter email address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-froup">
                                            <textarea rows="6" placeholder="Write your comments"
                                                      class="form-control bg_input"></textarea>
                                            </div>
                                            <div class="comment_form_submit">
                                                <button class="btn btn_theme btn_md">Post comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Related tour packages Area -->
        <section id="related_tour_packages" class="section_padding_bottom">
            <div class="container">
                <!-- Section Heading -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section_heading_center">
                            <h2>Related top packages</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                            <div class="top_destinations_box img_hover">
                                <div class="heart_destinations">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="top-destinations-details.html"><img src="assets/img/destination/main-page6.png"
                                                                             alt="img"></a>
                                <div class="top_destinations_box_content">
                                    <h4><a href="top-destinations-details.html">Kathmundu</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                            <div class="top_destinations_box img_hover">
                                <div class="heart_destinations">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="top-destinations-details.html"><img src="assets/img/destination/main-page5.png"
                                                                             alt="img"></a>
                                <div class="top_destinations_box_content">
                                    <h4><a href="top-destinations-details.html">Himalaya</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                            <div class="top_destinations_box img_hover">
                                <div class="heart_destinations">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="top-destinations-details.html"><img src="assets/img/destination/main-page4.png"
                                                                             alt="img"></a>
                                <div class="top_destinations_box_content">
                                    <h4><a href="top-destinations-details.html">Beautiful darjeeling</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                            <div class="top_destinations_box img_hover">
                                <div class="heart_destinations">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="top-destinations-details.html"><img src="assets/img/destination/main-page3.png"
                                                                             alt="img"></a>
                                <div class="top_destinations_box_content">
                                    <h4><a href="top-destinations-details.html">Annapurna</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                            <div class="top_destinations_box img_hover">
                                <div class="heart_destinations">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="top-destinations-details.html"><img src="assets/img/destination/main-page2.png"
                                                                             alt="img"></a>
                                <div class="top_destinations_box_content">
                                    <h4><a href="top-destinations-details.html">Explore china</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                            <div class="top_destinations_box img_hover">
                                <div class="heart_destinations">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="top-destinations-details.html"><img src="assets/img/destination/main-page1.png"
                                                                             alt="img"></a>
                                <div class="top_destinations_box_content">
                                    <h4><a href="top-destinations-details.html">Ancient egypt</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
