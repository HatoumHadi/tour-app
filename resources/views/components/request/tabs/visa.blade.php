<div {{ $attributes }}>
    <form action="{{ route('visa.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['passport_number'])])>
                    <p>Passport Number</p>
                    <input type="number" name="passport_number" placeholder="passport no." value="{{ old('passport_number') }}">
                    @error('passport_number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="form_search_date" @style(['height: 100%', 'border-radius:10px; border-style: dashed; border-color: #dc3545' => $errors->has(['visa_country_id'])])>
                    <div class="flight_Search_boxed date_flex_area" style="height: 100%">
                        <div class="Journey_date" style="width: 100%;">
                            <p>Visa Country</p>
                            <select name="visa_country_id" id=""
                                    style="outline: none;width: 100%;background: transparent;border: transparent;font-size: 22px;">
                                <option value="">Select country</option>
                                @foreach($countries as $country)
                                    <option @selected(old('visa_country_id') == $country->id) value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('visa_country_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="form_search_date" @style(['height: 100%', 'border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['nationality_country_id'])])>
                    <div class="flight_Search_boxed date_flex_area" style="height: 100%">
                        <div class="Journey_date" style="width: 100%;">
                            <p>Nationality Country</p>
                            <select name="nationality_country_id" id=""
                                    style="outline: none;width: 100%;background: transparent;border: transparent;font-size: 22px;">
                                <option value="">Select country</option>
                                @foreach($countries as $country)
                                    <option @selected(old('nationality_country_id') == $country->id) value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('nationality_country_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['application_date'])])>
                    <div class="flight_Search_boxed date_flex_area">
                        <div class="Journey_date">
                            <p>Application date</p>
                            <input type="date" name="application_date"
                                   value="{{ old('application_date') }}">
                            @error('application_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div class="form_search_date" @style(['height: 100%', 'border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['status'])])>
                    <div class="flight_Search_boxed date_flex_area" style="height: 100%">
                        <div class="Journey_date" style="width: 100%;">
                            <p>Status</p>
                            <select name="status" id=""
                                    style="outline: none;width: 100%;background: transparent;border: transparent;font-size: 22px;">
                                <option value="">Select status</option>
                                <option @selected(old('status') == 'valid') value="valid">Valid</option>
                                <option @selected(old('status') == 'approved') value="approved">Approved</option>
                                <option @selected(old('status') == 'expired') value="expired">Expired</option>
                                <option @selected(old('status') == 'denied') value="denied">Denied</option>
                                <option @selected(old('status') == 'overstay') value="overstay">Overstay</option>
                                <option @selected(old('status') == 'pending') value="pending">Pending</option>
                                <option @selected(old('status') == 'revoked') value="revoked">Revoked</option>
                            </select>
                            @error('status')
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
