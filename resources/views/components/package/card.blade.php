<div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="top_destinations_box img_hover">
        <a href="{{route('packages.show', 1)}}">
            <img src="{{ asset("storage/$package->thumbnail") }}" alt="img">
        </a>
        <div class="top_destinations_box_content">
            <h4><a href="{{route('packages.show', 1)}}">{{ $package->title }}</a></h4>
            {{--            <p>--}}
            {{--                <span class="review_rating">4.8/5 Excellent</span>--}}
            {{--                <span class="review_count">(1214 reviewes)</span>--}}
            {{--            </p>--}}
            <h3>${{ $package->price }} <span>Price starts from</span></h3>
        </div>
    </div>
</div>
