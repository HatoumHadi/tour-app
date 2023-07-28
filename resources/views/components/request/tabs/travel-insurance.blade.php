<div {{ $attributes }}>
    <form action="{{ route('travel-insurances.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div
                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['plan_name'])])>
                    <p>Plan Name</p>
                    <input type="text" placeholder="Plan name" name="plan_name" value="{{ old('plan_name') }}">
                    @error('plan_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-12">
                <div
                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['policy_number'])])>
                    <p>Policy number</p>
                    <input type="text" placeholder="Policy number" name="policy_number"
                           value="{{ old('policy_number') }}">
                    @error('policy_number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div
                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['insurance_company'])])>
                    <p>Insurance Company Name</p>
                    <input type="text" placeholder="Insurance company name" name="insurance_company"
                           value="{{ old('insurance_company') }}">
                    @error('insurance_company')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['coverage_start_date'])])>
                    <div class="flight_Search_boxed date_flex_area">
                        <div class="Journey_date">
                            <p>Coverage Start Date</p>
                            <input type="date" name="coverage_start_date" value="{{ old('coverage_start_date') }}">
                            @error('coverage_start_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['coverage_end_date'])])>
                    <div class="flight_Search_boxed date_flex_area">
                        <div class="Journey_date">
                            <p>Coverage End Date</p>
                            <input type="date" name="coverage_end_date" value="{{ old('coverage_end_date') }}">
                            @error('coverage_end_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="top_form_search_button">
                <button class="btn btn_theme btn_md">Submit request</button>
            </div>
        </div>
    </form>
</div>
