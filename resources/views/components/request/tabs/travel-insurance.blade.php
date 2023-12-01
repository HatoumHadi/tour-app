{{--<div {{ $attributes }}>--}}
{{--    <form action="{{ route('travel-insurances.store') }}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3 col-md-12 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['plan_name'])])>--}}
{{--                    <p>{{ __('translations.plan-name') }}</p>--}}
{{--                    <input type="text" placeholder="{{ __('translations.plan-name') }}" name="plan_name" value="{{ old('plan_name') }}">--}}
{{--                    @error('plan_name')--}}
{{--                    <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-12 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['policy_number'])])>--}}
{{--                    <p>{{ __('translations.policy-number') }}</p>--}}
{{--                    <input type="text" placeholder="{{ __('translations.policy-number') }}" name="policy_number"--}}
{{--                           value="{{ old('policy_number') }}">--}}
{{--                    @error('policy_number')--}}
{{--                    <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-12 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['insurance_company'])])>--}}
{{--                    <p>{{ __('translations.insurance-company') }}</p>--}}
{{--                    <input type="text" placeholder="{{ __('translations.insurance-company') }}" name="insurance_company"--}}
{{--                           value="{{ old('insurance_company') }}">--}}
{{--                    @error('insurance_company')--}}
{{--                    <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-4 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['coverage_start_date'])])>--}}
{{--                    <div class="flight_Search_boxed date_flex_area">--}}
{{--                        <div class="Journey_date">--}}
{{--                            <p>{{ __('translations.coverage-start-date') }}</p>--}}
{{--                            <input type="date" name="coverage_start_date"  value="{{ old('coverage_start_date') }}">--}}
{{--                            @error('coverage_start_date')--}}
{{--                            <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-4 col-sm-12 col-12">--}}
{{--                <div--}}
{{--                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['coverage_end_date'])])>--}}
{{--                    <div class="flight_Search_boxed date_flex_area">--}}
{{--                        <div class="Journey_date">--}}
{{--                            <p>{{ __('translations.coverage-end-date') }}</p>--}}
{{--                            <input type="date" name="coverage_end_date" value="{{ old('coverage_end_date') }}">--}}
{{--                            @error('coverage_end_date')--}}
{{--                            <span class="text-danger text-wrap">{{ $message }}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="top_form_search_button">--}}
{{--                <button class="btn btn_theme btn_md">{{ __('translations.submit-request') }}</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}
