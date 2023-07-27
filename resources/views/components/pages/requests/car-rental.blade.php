<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Car rental request submission</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Car Rental</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Area -->
        <section>
            <x-request.form :method="\App\Definitions\Method::POST" :action="route('requests.car-rental.post')"
                            subtitle="Car rental request" id="main_author_form"
                            title="Submit your car rental request here">
                <x-request.input :error-message="$errors->first('name')" name="name"
                                 value="{{ old('name') }}" placeholder="Enter name..."/>
                <x-request.input :error-message="$errors->first('type')" name="type"
                                 value="{{ old('type') }}" placeholder="Enter type..."/>
                <x-request.input :error-message="$errors->first('start_date')" name="start_date" type="date"
                                 value="{{ old('start_date') }}" placeholder="Enter start date..."/>
                <x-request.input :error-message="$errors->first('end_date')" name="end_date" type="date"
                                 value="{{ old('end_date') }}" placeholder="Enter end date..."/>
                <x-request.input :error-message="$errors->first('end_date')" name="end_date" type="date"
                                 value="{{ old('end_date') }}" placeholder="Enter end date..."/>
                <x-request.input :error-message="$errors->first('price')" name="price" type="number"
                                 value="{{ old('price') }}" placeholder="Enter price..."/>
                <x-request.button type="submit">Submit request</x-request.button>
            </x-request.form>
        </section>
    </div>
</x-layouts.app>
