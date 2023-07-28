@php use App\Definitions\FlightStatus; @endphp
<div {{ $attributes }}>
    <form action="{{ route('flights.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div
                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['from'])])>
                    <p>From</p>
                    <input type="text" name="from" placeholder="From..." value="{{ old('from') }}">
                    <div class="plan_icon_posation">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    @error('from')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div
                    class="flight_Search_boxed" @style(['border-style: dashed; border-color: #dc3545' => $errors->has(['to'])])>
                    <p>To</p>
                    <input type="text" name="to" placeholder="To..." value="{{ old('to') }}">
                    <div class="plan_icon_posation">
                        <i class="fas fa-plane-arrival"></i>
                    </div>
                    <div class="range_plan">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    @error('to')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['departure_time'])])>
                    <div class="flight_Search_boxed date_flex_area">
                        <div class="Journey_date">
                            <p>Departure time</p>
                            <input type="date" name="departure_time" placeholder="Departure time..."
                                   value="{{ old('departure_time') }}">
                            @error('departure_time')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['arrival_time'])])>
                    <div class="flight_Search_boxed date_flex_area">
                        <div class="Journey_date">
                            <p>Arrival time</p>
                            <input type="date" name="arrival_time" placeholder="Arrival time..."
                                   value="{{ old('arrival_time') }}">
                            @error('arrival_time')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                <div
                    class="form_search_date" @style(['height: 100%', 'border-radius: 10px; border-style: dashed; border-color: #dc3545' => $errors->has(['status'])])>
                    <div class="flight_Search_boxed date_flex_area" style="height: 100%">
                        <div class="Journey_date" style="width: 100%;">
                            <p>Status</p>
                            <select name="status" id=""
                                    style="outline: none;width: 100%;background: transparent;border: transparent;font-size: 22px;">
                                <option value="">Select status</option>
                                <option
                                    @selected(old('status') == FlightStatus::SCHEDULED->value) value="scheduled">
                                    Scheduled
                                </option>
                                <option
                                    @selected(old('status') == FlightStatus::DELAYED->value) value="delayed">
                                    Delayed
                                </option>
                                <option
                                    @selected(old('status') == FlightStatus::DEPARTED->value) value="departed">
                                    Departed
                                </option>
                                <option
                                    @selected(old('status') == FlightStatus::DEPARTED->value) value="in-air">
                                    In air
                                </option>
                                <option
                                    @selected(old('status') == FlightStatus::LANDED->value) value="landed">
                                    Landed
                                </option>
                                <option
                                    @selected(old('status') == FlightStatus::ARRIVED->value) value="arrived">
                                    Arrived
                                </option>
                                <option
                                    @selected(old('status') == FlightStatus::CANCELLED->value) value="cancelled">
                                    Cancelled
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
                <button type="submit" class="btn btn_theme btn_md">Submit request</button>
            </div>
        </div>
    </form>
</div>
