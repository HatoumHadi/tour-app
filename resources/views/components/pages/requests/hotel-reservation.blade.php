<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Hotel reservation request submission</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Hotel Reservation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Area -->
        <section>
            <x-request.form :method="\App\Definitions\Method::POST" :action="route('requests.hotel-reservation.post')"
                            subtitle="Hotel reservation request" id="main_author_form"
                            title="Submit your hotel reservation request here">
                <x-request.input :error-message="$errors->first('check_in')" name="check_in"
                                 value="{{ old('check_in') }}" placeholder="Enter check in..." type="date"/>
                <x-request.input :error-message="$errors->first('check_out')" name="check_out" type="date"
                                 value="{{ old('check_out') }}" placeholder="Enter check out..."/>
                <x-request.input :error-message="$errors->first('number_of_guests')" name="number_of_guests"
                                 type="number"
                                 value="{{ old('number_of_guests') }}" placeholder="Enter number of guests..."/>
                <x-request.select :error-message="$errors->first('status')" name="status">
                    <option value="">Select status</option>
                    @foreach(\App\Definitions\HotelReservationStatus::cases() as $status)
                        <option
                            @selected($status->value == old('status')) value="{{ $status->value }}">{{ \Illuminate\Support\Str::title($status->value) }}</option>
                    @endforeach
                </x-request.select>
                <x-request.button type="submit">Submit request</x-request.button>
            </x-request.form>
        </section>
    </div>
</x-layouts.app>
