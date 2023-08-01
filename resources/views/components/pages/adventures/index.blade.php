<x-layouts.app>
    <div>
        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>{{ __('translations.adventures') }}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">{{ __('translations.home') }}</a></li>
                                <li><span><i class="fas fa-circle"></i></span>{{ __('translations.adventures') }}</li>
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
