<x-layouts.app>

    <div>

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Contact</h2>
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Area -->
        <section id="contact_main_arae" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section_heading_center">
                            <h2>Contact with us</h2>
                        </div>
                    </div>
                </div>
                <div class="contact_main_form_area_two">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="contact_left_top_heading">
                                <h2>Do you have any query? Contact with us to get any support.</h2>
                                <h3>Leave us a message</h3>
                            </div>
                            <div class="contact_form_two">
                                <form action="{{ route('contact-us.post') }}" method="post" id="contact_form_content">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input" name="first_name"
                                                       @class(['border-danger border-2 border' => $errors->has('first_name')])
                                                       value="{{ old('first_name') }}" placeholder="First name*">
                                                @error('first_name')
                                                <div class="form-text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input" name="last_name"
                                                       @class(['border-danger border-2 border' => $errors->has('last_name')])
                                                       value="{{ old('last_name') }}" placeholder="Last name*">
                                                @error('last_name')
                                                <div class="form-text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input" name="email"
                                                       @class(['border-danger border-2 border' => $errors->has('email')])
                                                       value="{{ old('email') }}" placeholder="Email address (Optional)">
                                                @error('email')
                                                <div class="form-text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input" name="mobile_number"
                                                       @class(['border-danger border-2 border' => $errors->has('mobile_number')])
                                                       value="{{ old('mobile_number') }}" placeholder="Mobile number*">
                                                @error('mobile_number')
                                                <div class="form-text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <textarea class="form-control bg_input" rows="5" name="message"
                                                      @class(['border-danger border-2 border' => $errors->has('mobile_number')])
                                                      placeholder="Message">{{ old('message') }}</textarea>
                                                @error('message')
                                                <div class="form-text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn_theme btn_md">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact_two_left_wrapper">
                                <h3>Contact details</h3>
                                <div class="contact_details_wrapper">
                                    <div class="contact_detais_item">
                                        <h4>Help line</h4>
                                        <h3><a href="tel:+01-234-567-890">{{$generalInfo->phone}}</a></h3>
                                    </div>
                                    <div class="contact_detais_item">
                                        <h4>Support mail</h4>
                                        <h3><a href="mailto:support@domain.com">{{$generalInfo->email}}</a></h3>
                                    </div>
                                    <div class="contact_detais_item">
                                        <h4>Contact hour</h4>
                                        <h3>Mon-Sun : 24 hours</h3>
                                    </div>
                                    <div class="contact_map_area">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"></iframe>
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
