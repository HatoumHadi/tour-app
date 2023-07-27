<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Transportation request submission</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Transportation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Area -->
        <section>
            <x-request.form :method="\App\Definitions\Method::POST" :action="route('requests.transportation.post')"
                            subtitle="Transportation request" id="main_author_form"
                            title="Submit your transportation request here">
                <x-request.input :error-message="$errors->first('name')" name="name"
                                 value="{{ old('name') }}" placeholder="Enter name..."/>
                <x-request.input :error-message="$errors->first('type')" name="type"
                                 value="{{ old('type') }}" placeholder="Enter type..."/>
                <x-request.input :error-message="$errors->first('company')" name="company"
                                 value="{{ old('company') }}" placeholder="Enter company name..."/>
                <x-request.input :error-message="$errors->first('departure_date')" name="departure_date"
                                 value="{{ old('departure_date') }}" placeholder="Enter depature date..."
                                 type="date"/>
                <x-request.input :error-message="$errors->first('return_date')" name="return_date"
                                 value="{{ old('return_date') }}" placeholder="Enter return date..."
                                 type="date"/>
                <x-request.input :error-message="$errors->first('from')" name="from"
                                 value="{{ old('from') }}" placeholder="Enter from..."/>
                <x-request.input :error-message="$errors->first('to')" name="to"
                                 value="{{ old('to') }}" placeholder="Enter to..."/>
                <x-request.button type="submit">Submit request</x-request.button>
            </x-request.form>
        </section>
    </div>
</x-layouts.app>
