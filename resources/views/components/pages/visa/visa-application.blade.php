<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Visa application</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span><a href="{{route('visa-details')}}"> Visa
                                        Details</a>
                                </li>
                                <li><span><i class="fas fa-circle"></i></span> Visa application</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visa application  Areas -->
        <section>
            <x-request.form :method="\App\Definitions\Method::POST" :action="route('requests.visa.post')"
                            subtitle="Visa application request" id="main_author_form"
                            title="Submit your visa application request here">
                <x-request.input :error-message="$errors->first('name')" name="name"
                                 value="{{ old('name') }}" placeholder="Enter name..."/>
                <x-request.input :error-message="$errors->first('phone')" name="phone" type="tel"
                                 value="{{ old('phone') }}" placeholder="Enter phone number..."/>
                <x-request.input :error-message="$errors->first('application_date')" name="application_date"
                                 value="{{ old('application_date') }}" placeholder="Enter application date..."
                                 type="date"/>
                <x-request.select :error-message="$errors->first('status')" name="status">
                    <option value="">Select status</option>
                    @foreach(\App\Definitions\VisaStatus::cases() as $status)
                        <option
                            @selected($status->value == old('status')) value="{{ $status->value }}">{{ \Illuminate\Support\Str::title($status->value) }}</option>
                    @endforeach
                </x-request.select>
                <x-request.button type="submit">Submit request</x-request.button>
            </x-request.form>
        </section>
    </div>
</x-layouts.app>
