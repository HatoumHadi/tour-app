<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Adventures</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Adventures</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Area -->
        <section id="news_main_arae" class="section_padding">
            <div class="container">
                <div class="new_main_news_box">
                    <div class="row">
                        @foreach($adventures as $adventure)
                            <x-adventure.card :$adventure />
                        @endforeach
                        {!! $adventures->links('components.common.pagination') !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
