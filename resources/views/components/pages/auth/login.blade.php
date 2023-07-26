<x-layouts.app>
    <div>

        <!-- Common Banner Area -->
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

        <!--  Common Author Area -->
        <section id="common_author_area" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="common_author_boxed">
                            <div class="common_author_heading">
                                <h3>Login your account</h3>
                                <h2>Logged in to stay in touch</h2>
                            </div>
                            <div class="common_author_form">
                                <form action="{{ route('login.post') }}" method="post" id="main_author_form">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" @class(['form-control', 'border-danger border-2 border' => $errors->hasAny('email', 'password')]) value="{{ old('email') }}" placeholder="Enter email" name="email" aria-describedby="emailHelp"/>
                                        @error('email')
                                        <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" value="{{ old('password') }}" @class(['form-control']) placeholder="Enter password" name="password" aria-describedby="passwordHelp"/>
                                        {{--                                        <a href="forgot-password.html">Forgot password?</a>--}}
                                    </div>
                                    <div class="common_form_submit">
                                        <button class="btn btn_theme btn_md">Log in</button>
                                    </div>
                                    <div class="have_acount_area">
                                        <p>Dont have an account? <a href="{{route('sign-up')}}">Register now</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
