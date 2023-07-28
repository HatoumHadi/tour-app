<x-layouts.app>
    <div>
        <!-- Banner Area -->
        <section id="home_one_banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="banner_one_text">
                            <h1>Explore the world together</h1>
                            <h3>Find awesome flights, hotel, tour, car and packages</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @auth()
            <div>
                <x-request.card/>
            </div>
        @endauth


        <!--Promotional Tours Area -->
        <section id="promotional_tours" class="section_padding_top">
            <div class="container">
                <!-- Section Heading -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section_heading_center">
                            <h2>Popular adventures</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                            @foreach($adventures as $adventure)
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <div>
                                            <img src="{{ asset('storage/' . $adventure->thumbnail) }}"
                                                 alt="img">
                                        </div>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4>{{$adventure->title}}</h4>
                                        <p>{{$adventure->description}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="load_more_flight">
                    <a href="{{route('adventures.index')}}" class="btn btn_theme btn_md"> View all</a>
                </div>

            </div>
        </section>


        <!-- Offer Area -->
        <section id="offer_area" class="section_padding_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section_heading_center">
                            <h2>Featured packages</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($packages as $package)
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="offer_area_box d-none-phone img_animation">
                                <img src="{{ asset('storage/' . $package->thumbnail) }}"
                                     alt="img">
                                <div class="offer_area_content">
                                    <h2>{{$package->title}}</h2>
                                    <p>{{$package->description}}</p>
                                    <a href="{{ route('packages.show', $package->id) }}" class="btn btn_theme btn_md">View
                                        package</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="load_more_flight">
                    <a href="{{route('packages.index')}}" class="btn btn_theme btn_md"> View all</a>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
