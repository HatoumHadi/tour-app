<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="common_author_boxed">
                <div class="common_author_heading">
                    <h3>{{ $subtitle }}</h3>
                    <h2>{{ $title }}</h2>
                </div>
                <div class="common_author_form">
                    <form {{ $attributes->merge(['method' => $evaluateMethod]) }}>
                        @csrf
                        @method($method->value)
                        {{ $slot }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
