<x-layouts.app>
    <div>

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Packages</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Packages</li>
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
