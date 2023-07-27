<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>{{ $adventure->title }}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('adventures.index')}}"><span><i class="fas fa-circle"></i></span>Adventures</a>
                                </li>
                                <li><span><i class="fas fa-circle"></i></span>{{ $adventure->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Area -->
        <section id="news_details_main_arae" class="section_padding">
            <div class="container">
                {!! $adventure->content !!}
            </div>
        </section>
    </div>
</x-layouts.app>
