<div {{ $attributes }}>
    <form action="{{ route('hotel-reservations.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-4 col-md-8 col-sm-12 col-12">
                <div
                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['hotel_name'])])>
                    <p>Hotel name</p>
                    <input type="text" name="hotel_name" placeholder="Hotel name..." value="{{ old('hotel_name') }}">
                    @error('hotel_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['check_in'])])>
                    <div class="flight_Search_boxed date_flex_area">
                        <div class="Journey_date">
                            <p>Check in</p>
                            <input type="date" name="check_in" placeholder="Check in..."
                                   value="{{ old('check_out') }}">
                            @error('check_in')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['check_out'])])>
                    <div class="flight_Search_boxed date_flex_area">
                        <div class="Journey_date">
                            <p>Check out</p>
                            <input type="date" name="check_out" placeholder="Check out..."
                                   value="{{ old('check_out') }}">
                            @error('check_out')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['number_of_guests'])])>
                    <p># Guests</p>
                    <input type="number" name="number_of_guests" placeholder="# guests"
                           value="{{ old('number_of_guests') }}">
                    @error('number_of_guests')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['height: 100%; border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['status'])])>
                    <div class="flight_Search_boxed date_flex_area" style="height: 100%">
                        <div class="Journey_date" style="width: 100%;">
                            <p>Status</p>
                            <select name="status"
                                    style="outline: none;width: 100%;background: transparent;border: transparent;font-size: 22px;">
                                <option value="">Select status</option>
                                <option
                                    @selected(old('status') == \App\Definitions\HotelReservationStatus::WAIT_LIST->value)
                                    value="wait_list">
                                    Wait list
                                </option>
                                <option
                                    @selected(old('status') == \App\Definitions\HotelReservationStatus::CANCELLED->value)
                                    value="cancelled">
                                    Cancelled
                                </option>
                                <option
                                    @selected(old('status') == \App\Definitions\HotelReservationStatus::CONFIRMED->value)
                                    value="confirmed">
                                    Confirmed
                                </option>
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
