<x-layouts.app>
    <div>
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Login</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span> Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{ auth()->user()->toJson() }}
    </div>
</x-layouts.app>
