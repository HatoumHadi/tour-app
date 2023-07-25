<x-layouts.app>
    <div>

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Register</h2>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><span><i class="fas fa-circle"></i></span> Register</li>
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
                                <h3>Register account</h3>
                                <h2>Register your account</h2>
                            </div>
                            <div class="common_author_form">
                                <form action="#" id="main_author_form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter first name*" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter last name*" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               placeholder="your email address (Optional)" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mobile number*" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User name*" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                    <div class="common_form_submit">
                                        <button class="btn btn_theme btn_md">Register</button>
                                    </div>
                                    <div class="have_acount_area other_author_option">
                                        <div class="line_or">
                                            <span>or</span>
                                        </div>
                                        <ul>
                                            <li><a href="#!"><img src="assets/img/icon/google.png" alt="icon"></a></li>
                                            <li><a href="#!"><img src="assets/img/icon/facebook.png" alt="icon"></a></li>
                                            <li><a href="#!"><img src="assets/img/icon/twitter.png" alt="icon"></a></li>
                                        </ul>
                                        <p>Already have an account? <a href="{{route('login')}}">Log in now</a></p>
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
