<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Adventure request submission</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Adventure</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Area -->
        <section>
            <x-request.form :method="\App\Definitions\Method::POST" :action="route('requests.adventure.post')"
                            subtitle="Adventure request" id="main_author_form"
                            title="Submit your adventure request here">
                <x-request.input :error-message="$errors->first('name')" name="name"
                                 value="{{ old('name') }}" placeholder="Enter name..."/>
                <x-request.textarea :error-message="$errors->first('description')" name="description"
                                    value="{{ old('description') }}" placeholder="Enter description..."/>
                <x-request.input :error-message="$errors->first('price')" name="price" type="number"
                                 value="{{ old('price') }}" placeholder="Enter price..."/>
                <x-request.input :error-message="$errors->first('duration')" name="duration" type="number"
                                 value="{{ old('duration') }}" placeholder="Enter price..."/>
                <x-request.select :error-message="$errors->first('city_id')" name="city_id">
                    <option value="">Select city</option>
                    @foreach($cities as $city)
                        <option
                            @selected($city->id == old('city_id')) value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </x-request.select>
                <x-request.button type="submit">Submit request</x-request.button>
            </x-request.form>
        </section>
    </div>
</x-layouts.app>
