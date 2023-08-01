<x-layouts.app>
    <div>

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>{{ __('translations.packages') }}</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">{{ __('translations.home') }}</a></li>
                                <li><span><i class="fas fa-circle"></i></span>{{ __('translations.packages') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Destinations Areas -->
        <section id="top_testinations" class="section_padding">
            <div class="container">
                <!-- Section Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach($packages as $package)
                                <x-package.card :$package />
                            @endforeach
                            {!! $packages->links('components.common.pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
