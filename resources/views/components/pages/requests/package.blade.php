<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Package request submission</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Package</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Area -->
        <section>
            <x-request.form :method="\App\Definitions\Method::POST" :action="route('requests.package.post')"
                            subtitle="Package request" id="main_author_form"
                            title="Submit your package request here">
                <x-request.input :error-message="$errors->first('title')" name="title"
                                 value="{{ old('title') }}" placeholder="Enter title..."/>
                <x-request.input :error-message="$errors->first('description')" name="description" type="date"
                                 value="{{ old('description') }}" placeholder="Enter description..."/>
                <x-request.input :error-message="$errors->first('date')" name="date" type="date"
                                 value="{{ old('date') }}" placeholder="Enter date..."/>
                <x-request.input :error-message="$errors->first('duration')" name="duration" type="number"
                                 value="{{ old('duration') }}" placeholder="Enter duration..."/>
                <x-request.input :error-message="$errors->first('price')" name="price" type="number"
                                 value="{{ old('price') }}" placeholder="Enter price..."/>
                <x-request.select :error-message="$errors->first('type')" name="type">
                    <option value="">Select type</option>
                    @foreach(\App\Definitions\PackageType::cases() as $type)
                        <option
                            @selected($type->value == old('type')) value="{{ $type->value }}">{{ \Illuminate\Support\Str::title($type->value) }}</option>
                    @endforeach
                </x-request.select>
                <x-request.button type="submit">Submit request</x-request.button>
            </x-request.form>
        </section>
    </div>
</x-layouts.app>
