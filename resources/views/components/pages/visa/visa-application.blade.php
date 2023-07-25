<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Visa application</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span><a href="{{route('visa-details')}}"> Visa Details</a>
                                </li>
                                <li><span><i class="fas fa-circle"></i></span> Visa application</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visa application  Areas -->
        <section id="tour_booking_submission" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tou_booking_form_Wrapper">
                            <div class="booking_tour_form">
                                <h3 class="heading_theme">Traveller details</h3>
                                <div class="tour_booking_form_box">
                                    <form action="https://andit.co/projects/html/and-tour/demo/!#" id="tour_bookking_form_item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="First name*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Last name*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Email address (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Mobile number*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select bg_input">
                                                        <option value="1">Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="1">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Date of birth">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Passport number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Passport expiry date">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Local street address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg_input"
                                                           placeholder="Apartment, Suite, House no (optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select bg_input">
                                                        <option value="1">City</option>
                                                        <option value="1">New York</option>
                                                        <option value="1">Barisal</option>
                                                        <option value="1">Nator</option>
                                                        <option value="1">Joybangla</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select bg_input">
                                                        <option value="1">State</option>
                                                        <option value="1">New York</option>
                                                        <option value="1">Barisal</option>
                                                        <option value="1">Nator</option>
                                                        <option value="1">Joybangla</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select bg_input">
                                                        <option value="1">Country</option>
                                                        <option value="1">New York</option>
                                                        <option value="1">Barisal</option>
                                                        <option value="1">Nator</option>
                                                        <option value="1">Joybangla</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="booking_tour_form">
                                <h3 class="heading_theme">Payment method</h3>
                                <div class="tour_booking_form_box">
                                    <div class="booking_payment_boxed">
                                        <form action="https://andit.co/projects/html/and-tour/demo/!#" id="payment_checked">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault1" value="red">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Payment by card
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault2" value="green">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Paypal
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault3" value="black">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Payoneer
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault4" value="white">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Cash on delivery
                                                </label>
                                            </div>
                                            <div class="payment_filed_wrapper">
                                                <div class="payment_card payment_toggle red">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control bg_input"
                                                                       placeholder="Card number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control bg_input"
                                                                       placeholder="Cardholder name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control bg_input"
                                                                       placeholder="Date of expiry">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control bg_input"
                                                                       placeholder="Security code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="paypal_payment payment_toggle green">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control bg_input"
                                                                       placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payoneer_payment payment_toggle black">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control bg_input"
                                                                       placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="booking_tour_form_submit">
                                <div class="form-check write_spical_check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                    <label class="form-check-label" for="flexCheckDefaultf1">
                                    <span class="main_spical_check">
                                        <span>I read and accept all <a href="terms-service.html">Terms and
                                                conditios</a></span>
                                    </span>
                                    </label>
                                </div>
                                <a href="{{route('home')}}" class="btn btn_theme btn_md">Submit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tour_details_right_sidebar_wrapper">
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Business visa</h3>
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
                                        <h5>Room facilities</h5>
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
                            </div>
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Travel date</h3>
                                    </div>
                                    <div class="edit_date_form">
                                        <div class="form-group">
                                            <label for="dates">Edit Date</label>
                                            <input type="date" id="dates" value="2022-05-05" class="form-control">
                                        </div>
                                    </div>
                                    <div class="tour_package_details_bar_list">
                                        <h5>Tourist</h5>
                                        <div class="select_person_item">
                                            <div class="select_person_left">
                                                <h6>Adult</h6>
                                                <p>12y+</p>
                                            </div>
                                            <div class="select_person_right">
                                                <h6>01</h6>
                                            </div>
                                        </div>

                                        <div class="select_person_item">
                                            <div class="select_person_left">
                                                <h6>Children</h6>
                                                <p>2 - 12 years</p>
                                            </div>
                                            <div class="select_person_right">
                                                <h6>01</h6>
                                            </div>
                                        </div>
                                        <div class="select_person_item">
                                            <div class="select_person_left">
                                                <h6>Infant</h6>
                                                <p>Below 2 years</p>
                                            </div>
                                            <div class="select_person_right">
                                                <h6>01</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit_person">
                                        <p>Edit person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Coupon code</h3>
                                    </div>
                                    <div class="coupon_code_area_booking">
                                        <form action="#!">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input"
                                                       placeholder="Enter coupon code">
                                            </div>
                                            <div class="coupon_code_submit">
                                                <button class="btn btn_theme btn_md">Apply voucher</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="tour_detail_right_sidebar">
                                <div class="tour_details_right_boxed">
                                    <div class="tour_details_right_box_heading">
                                        <h3>Booking amount</h3>
                                    </div>

                                    <div class="tour_booking_amount_area">
                                        <ul>
                                            <li>Adult Price x 1 <span>$40,000.00</span></li>
                                            <li>Discount <span>-10%</span></li>
                                            <li>Tax<span>5%</span></li>
                                        </ul>
                                        <div class="tour_bokking_subtotal_area">
                                            <h6>Subtotal <span>$38,000.00</span></h6>
                                        </div>
                                        <div class="coupon_add_area">
                                            <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)
                                                <span>$5,000.00</span>
                                            </h6>
                                        </div>
                                        <div class="total_subtotal_booking">
                                            <h6>Total Amount <span>$33,000.00</span> </h6>
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
</x-layouts.app>
