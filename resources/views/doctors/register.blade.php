<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find easily a doctor and book online an appointment">
    <meta name="author" content="Ansonika">
    <title>FINDOCTOR - Find easily a doctor and book online an appointment</title>
    @livewireStyles
    <!-- Favicons-->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo">
                    <a href="index.html" title="Findoctor"><img src="{{ URL::asset('img/logo.png') }}" alt="" width="163" height="36"></a>
                </div>
            </div>
            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
                <ul id="top_access">
                    <li id="user">
                        <a href="#0">
                            <figure><img src="http://via.placeholder.com/150x150.jpg" alt=""></figure>
                            Jhon Smith
                        </a>
                    </li>
                </ul>
                <div class="main-menu">
                    <ul>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Home<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="index.html">Home Default</a></li>
                                <li><a href="index-2.html">Home Version 2</a></li>
                                <li><a href="index-3.html">Home Version 3</a></li>
                                <li><a href="index-4.html">Home Version 4</a></li>
                                <li><a href="index-7.html">Home with Map</a></li>
                                <li><a href="index-6.html">Revolution Slider</a></li>
                                <li><a href="index-5.html">With Cookie Bar (EU law)</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li class="third-level"><a href="#0">List pages</a>
                                    <ul>
                                        <li><a href="list.html">List page</a></li>
                                        <li><a href="grid-list.html">List grid page</a></li>
                                        <li><a href="list-map.html">List map page</a></li>
                                    </ul>
                                </li>
                                <li class="third-level"><a href="#0">Detail pages</a>
                                    <ul>
                                        <li><a href="detail-page.html">Detail page 1</a></li>
                                        <li><a href="detail-page-2.html">Detail page 2</a></li>
                                        <li><a href="detail-page-3.html">Detail page 3</a></li>
                                        <li><a href="detail-page-working-booking.html">Detail working booking</a></li>
                                    </ul>
                                </li>
                                <li><a href="submit-review.html">Submit Review</a></li>
                                <li><a href="blog-1.html">Blog</a></li>
                                <li><a href="badges.html">Badges</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="login-2.html">Login 2</a></li>
                                <li><a href="register-doctor.html">Register Doctor</a></li>
                                <li><a href="register-doctor-working.html">Working doctor register</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Extra Elements<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="booking-page.html">Booking page</a></li>
                                <li><a href="confirm.html">Confirm page</a></li>
                                <li><a href="faq.html">Faq page</a></li>
                                <li><a href="coming_soon/index.html">Coming soon</a></li>
                                <li class="third-level"><a href="#0">Pricing tables</a>
                                    <ul>
                                        <li><a href="pricing-tables-3.html">Pricing tables 1</a></li>
                                        <li><a href="pricing-tables.html">Pricing tables 2</a></li>
                                        <li><a href="pricing-tables-2.html">Pricing tables 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="icon-pack-1.html">Icon pack 1</a></li>
                                <li><a href="icon-pack-2.html">Icon pack 2</a></li>
                                <li><a href="icon-pack-3.html">Icon pack 3</a></li>
                                <li><a href="404.html">404 page</a></li>
                            </ul>
                        </li>
                        <li><a href="#0">Buy this template</a></li>
                    </ul>
                </div>
                <!-- /main-menu -->
            </nav>
        </div>
    </div>
    <!-- container -->
</header>
<!-- /Header -->
@php
    $fields = \App\Models\MedicineField::all();
    $titles = \App\Models\DoctorTitle::all();
@endphp
<main>
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="register">
                <h1>Please register to Findoctor!</h1>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <form method="post" action="{{ route('doctor.register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="box_form">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Your first name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Your last name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your Field</label>
                                    <select class="form-select" name="doctor_title_id">
                                        @foreach($titles as $title)
                                            <option value="{{$title->id}}">{{$title->title_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your email address">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password1" name="password" placeholder="Your password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" class="form-control" id="password2" name="password_confirmation" placeholder="Confirm password">
                                </div>
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="number" class="form-control"  name="telephone" placeholder="Telephone Number">
                                </div>

                                <div class="form-group">
                                    <label>Your Field</label>
                                    <select class="form-select" name="medicine_field_id">
                                        @foreach($fields as $field)
                                            <option value="{{$field->id}}">{{$field->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Profile Picture</label>
                                    <input type="file" class="form-control"  name="profile_picture" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    <img style="width: 100%;" id="pic" />

                                </div>
                                <div id="pass-info" class="clearfix"></div>
                                <div class="checkbox-holder text-left">
                                    <div class="checkbox_2">
                                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
                                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                                    </div>
                                </div>
                                <div class="form-group text-center add_top_30">
                                    <input class="btn_1" type="submit" value="Submit">
                                </div>
                            </div>
                            <p class="text-center"><small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</small></p>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /register -->

        </div>
    </div>
</main>
<!-- /main -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <p>
                    <a href="index.html" title="Findoctor">
                        <img src="img/logo.png" alt="" width="163" height="36" class="img-fluid">
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>About</h5>
                <ul class="links">
                    <li><a href="#0">About us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#0">FAQ</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="#0">Doctors</a></li>
                    <li><a href="#0">Clinics</a></li>
                    <li><a href="#0">Specialization</a></li>
                    <li><a href="#0">Join as a Doctor</a></li>
                    <li><a href="#0">Download App</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
                    <li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> help@findoctor.com</a></li>
                </ul>
                <div class="follow_us">
                    <h5>Follow us</h5>
                    <ul>
                        <li><a href="#0"><i class="social_facebook"></i></a></li>
                        <li><a href="#0"><i class="social_twitter"></i></a></li>
                        <li><a href="#0"><i class="social_linkedin"></i></a></li>
                        <li><a href="#0"><i class="social_instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 2021 Findoctor</div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->

<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('js/common_scripts.min.js') }}"></script>
<script src="{{ URL::asset('js/functions.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ URL::asset('js/pw_strenght.js') }}"></script>
</body>
</html>
