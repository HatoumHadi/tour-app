<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>{{ __('translations.contact-us') }}</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">{{ __('translations.home') }}</a></li>
                                <li><span><i class="fas fa-circle"></i></span>{{ __('translations.contact-us') }}</li>
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
                            <h2>{{ __('translations.contact-us') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="contact_main_form_area_two">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="contact_left_top_heading">
                                <h2>{{ __('translations.contact-us-title') }}</h2>
                                <h3>{{ __('translations.contact-us-subtitle') }}</h3>
                            </div>
                            <div class="contact_form_two">
                                <form action="{{ route('contact-us.post') }}" method="post" id="contact_form_content">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input" name="first_name"
                                                       @class(['border-danger border-2 border' => $errors->has('first_name')])
                                                       value="{{ old('first_name') }}"
                                                       placeholder="{{ __('translations.first-name') }}*">
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
                                                       value="{{ old('last_name') }}"
                                                       placeholder="{{ __('translations.last-name') }}*">
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
                                                       value="{{ old('email') }}"
                                                       placeholder="{{ __('translations.email') }} ({{ __('translations.optional') }})">
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
                                                       value="{{ old('mobile_number') }}"
                                                       placeholder="{{ __('translations.mobile-number') }}*">
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
                                                      @class(['border-danger border-2 border' => $errors->has('message')])
                                                      placeholder="{{ __('translations.message') }}">{{ old('message') }}</textarea>
                                                @error('message')
                                                <div class="form-text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button type="submit"
                                                        class="btn btn_theme btn_md">{{ __('translations.send-message') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact_two_left_wrapper">
                                <h3>{{ __('translations.contact-details') }}</h3>
                                <div class="contact_details_wrapper">
                                    <div class="contact_detais_item">
                                        <h4>{{ __('translations.help-line') }}</h4>
                                        <h3><a href="tel:{{ $contactPhoneNumber }}">{{ $contactPhoneNumber }}</a></h3>
                                    </div>
                                    <div class="contact_detais_item">
                                        <h4>{{ __('translations.support-mail') }}</h4>
                                        <h3><a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a></h3>
                                    </div>
                                    <div class="contact_detais_item">
                                        <h4>{{ __('translatiosn.contact-hours') }}</h4>
                                        <h3>{{ __('translations.contact-hours-value') }}</h3>
                                    </div>
                                    <div class="contact_map_area">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13257.933035636695!2d35.493178!3d33.8256459!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f19894e84f24b%3A0xe5592956cfaa421c!2sBeirut%20International%20Airport!5e0!3m2!1sen!2slb!4v1693635532462!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
