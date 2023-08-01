<x-layouts.app>
    <div>
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>{{ __('translations.profile') }}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">{{ __('translations.home') }}</a></li>
                                <li><span><i class="fas fa-circle"></i></span>{{ __('translations.profile') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dashboard Area -->
        <section id="dashboard_main_arae" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="dashboard_sidebar">
                            <div class="dashboard_sidebar_user">
                                <img src="assets/img/common/dashboard-user.png" alt="img">
                                <h3>{{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
                                <p><a href="tel:+00-123-456-789">{{\Illuminate\Support\Facades\Auth::user()->phone_number}}</a></p>
                                <p><a href="mailto:sherlyn@domain.com">{{\Illuminate\Support\Facades\Auth::user()->email}}</a></p>
                            </div>
                            <div class="dashboard_menu_area">
                                <ul>
                                    <li><a href="dashboard.html"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                                    <li class="dashboard_dropdown_button" id="dashboard_dropdowns"><i
                                            class="fas fa-address-card"></i>My bookings
                                        <span> <i class="fas fa-angle-down"></i></span>
                                        <div class="booing_sidebar_dashboard" id="show_dropdown_item"
                                             style="display: none;">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-hotel"></i>Hotel
                                                        booking</a></li>
                                                <li><a href="#"><i class="fas fa-paper-plane"></i>Flight
                                                        booking</a></li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-map"></i>Tour booking
                                                    </a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-history"></i>Booking
                                                        history</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{route('profile')}}" class="active"><i class="fas fa-user-circle"></i>My
                                            profile</a></li>
                                    <li><a href="{{route('logout')}}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="fas fa-sign-out-alt"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="dashboard_common_table">
                            <h3>My Profile</h3>
                            <div class="profile_update_form">
                                <form action="https://andit.co/projects/html/and-tour/demo/!#" id="profile_form_area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="f-name">Full name</label>
                                                <input type="text" class="form-control" id="f-name" placeholder="Your Name"
                                                       value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mail-address">Email address</label>
                                                <input type="text" class="form-control" id="mail-address"
                                                       value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mobil-number">Mobile number</label>
                                                <input type="text" class="form-control" id="mobil-number"
                                                       value="{{\Illuminate\Support\Facades\Auth::user()->phone_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group change_password_field">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" value="cdkdkdd">
                                                <p>Change password</p>
                                            </div>
                                        </div>
                                        <div class="change_password_input_boxed">
                                            <h3>Change password</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control"
                                                               placeholder="Old Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control"
                                                               placeholder="New Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
