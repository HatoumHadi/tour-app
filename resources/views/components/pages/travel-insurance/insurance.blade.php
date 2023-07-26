<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Travel insurance request submission</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span> Travel insurance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Area -->
        <section>
            <x-request.form :method="\App\Definitions\Method::POST" :action="route('requests.travel-insurance.post')"
                            subtitle="Travel insurance request" id="main_author_form"
                            title="Submit your travel insurance request here">
                <x-request.input :error-message="$errors->first('name')" name="name"
                                 value="{{ old('name') }}" placeholder="Enter name..."/>
                <x-request.input :error-message="$errors->first('policy_number')" name="policy_number"
                                 value="{{ old('policy_number') }}" placeholder="Enter policy number..."/>
                <x-request.input :error-message="$errors->first('coverage_start_date')" name="coverage_start_date"
                                 value="{{ old('coverage_start_date') }}" placeholder="Enter coverage start date..."
                                 type="date"/>
                <x-request.input :error-message="$errors->first('coverage_end_date')" name="coverage_end_date"
                                 value="{{ old('coverage_end_date') }}" placeholder="Enter coverage end date..."
                                 type="date"/>
                <x-request.input :error-message="$errors->first('insurance_company')" name="insurance_company"
                                 value="{{ old('insurance_company') }}" placeholder="Enter insurance company name..."/>
                <x-request.button type="submit">Submit request</x-request.button>
            </x-request.form>
        </section>
    </div>
</x-layouts.app>
