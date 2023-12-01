{{--@php use App\Definitions\FlightStatus; @endphp--}}
{{--<div {{ $attributes }}>--}}
{{--    <form action="{{ route('flights.store') }}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['from'])])>--}}
{{--                    <p>{{ __('translations.from') }}</p>--}}
{{--                    <input type="text" name="from" placeholder="{{ __('translations.from') }}" value="{{ old('from') }}">--}}
{{--                    <div class="plan_icon_posation">--}}
{{--                        <i class="fas fa-plane-departure"></i>--}}
{{--                    </div>--}}
{{--                    @if($direction === \App\Definitions\LanguageDirection::RTL->value)--}}
{{--                        <div class="range_plan">--}}
{{--                            <i class="fas fa-exchange-alt"></i>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    @error('from')--}}
{{--                    <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['to'])])>--}}
{{--                    <p>{{ __('translations.to') }}</p>--}}
{{--                    <input type="text" name="to" placeholder="{{ __('translations.to') }}" value="{{ old('to') }}">--}}
{{--                    <div class="plan_icon_posation">--}}
{{--                        <i class="fas fa-plane-arrival"></i>--}}
{{--                    </div>--}}
{{--                    @if($direction === \App\Definitions\LanguageDirection::LTR->value)--}}
{{--                    <div class="range_plan">--}}
{{--                        <i class="fas fa-exchange-alt"></i>--}}
{{--                    </div>--}}
{{--                    @endif--}}
{{--                    @error('to')--}}
{{--                    <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-4 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['departure_time'])])>--}}
{{--                    <div class="flight_Search_boxed date_flex_area">--}}
{{--                        <div class="Journey_date">--}}
{{--                            <p>{{ __('translations.departure-time') }}</p>--}}
{{--                            <input type="date" name="departure_time" placeholder="{{ __('translations.departure-time') }}"--}}
{{--                                   value="{{ old('departure_time') }}">--}}
{{--                            @error('departure_time')--}}
{{--                            <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-4 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['arrival_time'])])>--}}
{{--                    <div class="flight_Search_boxed date_flex_area">--}}
{{--                        <div class="Journey_date">--}}
{{--                            <p>{{ __('translations.arrival-time') }}</p>--}}
{{--                            <input type="date" name="arrival_time" placeholder="{{ __('translations.arrival-time') }}"--}}
{{--                                   value="{{ old('arrival_time') }}">--}}
{{--                            @error('arrival_time')--}}
{{--                            <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-4 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="form_search_date" @style(['height: 100%', 'border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['status'])])>--}}
{{--                    <div class="flight_Search_boxed date_flex_area" style="height: 100%">--}}
{{--                        <div class="Journey_date" style="width: 100%;">--}}
{{--                            <p>{{ __('translations.status') }}</p>--}}
{{--                            <select name="status" id=""--}}
{{--                                    style="outline: none;width: 100%;background: transparent;border: transparent;font-size: 22px;">--}}
{{--                                <option value="">{{ __('translations.select-status') }}</option>--}}
{{--                                <option--}}
{{--                                    @selected(old('status') == FlightStatus::SCHEDULED->value) value="scheduled">--}}
{{--                                    {{ __('translations.scheduled') }}--}}
{{--                                </option>--}}
{{--                                <option--}}
{{--                                    @selected(old('status') == FlightStatus::DELAYED->value) value="delayed">--}}
{{--                                    {{ __('translations.delayed') }}--}}
{{--                                </option>--}}
{{--                                <option--}}
{{--                                    @selected(old('status') == FlightStatus::DEPARTED->value) value="departed">--}}
{{--                                    {{ __('translations.departed') }}--}}
{{--                                </option>--}}
{{--                                <option--}}
{{--                                    @selected(old('status') == FlightStatus::DEPARTED->value) value="in-air">--}}
{{--                                    {{ __('translations.in-air') }}--}}
{{--                                </option>--}}
{{--                                <option--}}
{{--                                    @selected(old('status') == FlightStatus::LANDED->value) value="landed">--}}
{{--                                    {{ __('translations.landed') }}--}}
{{--                                </option>--}}
{{--                                <option--}}
{{--                                    @selected(old('status') == FlightStatus::ARRIVED->value) value="arrived">--}}
{{--                                    {{ __('translations.arrived') }}--}}
{{--                                </option>--}}
{{--                                <option--}}
{{--                                    @selected(old('status') == FlightStatus::CANCELLED->value) value="cancelled">--}}
{{--                                    {{ __('translations.cancelled') }}--}}
{{--                                </option>--}}
{{--                            </select>--}}
{{--                            @error('status')--}}
{{--                            <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="top_form_search_button">--}}
{{--                <button type="submit" class="btn btn_theme btn_md">{{ __('translations.submit-request') }}</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}
