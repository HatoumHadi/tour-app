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
                        @foreach($items as $item)
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="{{route('adventure-details')}}">
                                        @if(count($item->photoGallery) > 0)
                                            @foreach($item->photoGallery as $image)
                                                <img src="{{ asset('storage/' . $image->media) }}"
                                                     alt="img">
                                            @endforeach
                                        @else
                                            <img src="{{ asset('storage/images/AdventureDefualtImage.png') }}"
                                                 alt="img">
                                        @endif
                                    </a>
                                    @if($item->city)
                                        <p><i class="fas fa-map-marker-alt"></i>{{$item->city->name}}</p>
                                    @endif
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="{{route('adventure-details')}}">{{$item->title}}</a></h4>
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</x-layouts.app>
