<div class="col-lg-4 col-md-6 col-sm-12 col-12">
    <div class="news_item_boxed">
        <div class="news_item_img">
            <a href="{{ route('adventures.show', $adventure->id) }}">
                <img src="{{ asset("storage/$adventure->thumbnail") }}" alt="img">
            </a>
        </div>
        <div class="news_item_content">
            <h3><a href="{{ route('adventures.show', $adventure->id) }}">{{ $adventure->title }}</a></h3>
            <p>{{ $adventure->description }}</p>
        </div>
    </div>
</div>
