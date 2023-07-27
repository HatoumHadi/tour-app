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

        <div>
            <x-request.post-request-form/>
        </div>


        <!--Promotional Tours Area -->
        <section id="promotional_tours" class="section_padding_top">
            <div class="container">
                <!-- Section Heading -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section_heading_center">
                            <h2>Popular destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                            @foreach($places as $singlePlace)
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <div>
                                            @if(count($singlePlace->photoGallery) > 0)
                                                @foreach($singlePlace->photoGallery as $image)
                                                    <img src="{{ asset('storage/' . $image->media) }}"
                                                         alt="img">
                                                @endforeach
                                            @else
                                                <img src="{{ asset('storage/images/AdventureDefualtImage.png') }}"
                                                     alt="img">
                                            @endif
                                        </div>
                                        <p><i class="fas fa-map-marker-alt"></i>{{$singlePlace->city->name}}</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4>{{$singlePlace->title}}</h4>
                                        <p>{{$singlePlace->description}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="load_more_flight">
                    <a href="{{route('show-places')}}" class="btn btn_theme btn_md"> View all</a>
                </div>

            </div>
        </section>


        <!-- Offer Area -->
        <section id="offer_area" class="section_padding_top">
            <div class="container">
                <div class="row">
                    @foreach($packages as $index=>$package)
                        @if($index<2)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="offer_area_box d-none-phone img_animation">
                                    @if(count($package->photoGallery) > 0)
                                        @foreach($package->photoGallery as $image)
                                            <img src="{{ asset('storage/' . $image->media) }}"
                                                 alt="img">
                                        @endforeach
                                    @else
                                        <img src="{{ asset('storage/images/AdventureDefualtImage.png') }}"
                                             alt="img">
                                    @endif
                                    <div class="offer_area_content">
                                        <h2>Special Offers</h2>
                                        <h2>{{$package->title}}</h2>
                                        <p>{{$package->description}}</p>
                                        <a href="#!" class="btn btn_theme btn_md">Holiday deals</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>

                <div class="load_more_flight">
                    <a href="{{route('show-packages')}}" class="btn btn_theme btn_md"> View all</a>
                </div>
            </div>
        </section>

        <!-- Cta Area -->
        <section id="cta_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="cta_left">
                            <div class="cta_icon">
                                <img src="{{asset('assets/img/common/email.png')}}" alt="icon">
                            </div>

                            <!-- Offer Area -->
                            <div class="cta_content">
                                <h2>Send Text Message</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cat_form">
                            <form id="cta_form_wrappper">
                                <div>
                                    <input type="text" name="name" class="form-control"
                                           placeholder="Enter your name">
                                </div>
                                <div>
                                    <input type="email" name="email" class="form-control"
                                           placeholder="Enter your mail address">
                                </div>
                                <div>
                                    <textarea name="message" class="form-control"
                                              placeholder="Enter your message"></textarea>
                                </div>
                                <br>
                                <div>
                                    <button class="btn btn_theme btn_md" type="button">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-layouts.app>
