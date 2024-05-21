<!DOCTYPE html>
<html lang="en" data-cookies-popup="true">

<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>Okno - Ultimate Multi-Purpose HTML5 Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/') }}frontEnd/img/favicon.png">
    <link rel="apple-touch-icon" href="{{ asset('/') }}frontEnd/img/favicon_60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}frontEnd/img/favicon_76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}frontEnd/img/favicon_120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/') }}frontEnd/img/favicon_152x152.png">

    <!-- Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}frontEnd/css/styles.css" />

    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="{{ asset('/') }}frontEnd/css/themes/theme-classic.css" />
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
</head>

<body>

    <!-- Loader -->
    <div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66"
            xmlns="http://www.w3.org/2000/svg">
            <circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33"
                r="30"></circle>
        </svg></div>
    <!-- Loader / End -->



    <!-- Content -->
    <div id="content">

        <!-- Section -->
        <section class="bg-black fullheight dark">

            <div class="bg-image"><img src="{{ asset('/') }}frontEnd/img/photos/classic_bg03.jpg" alt="">
            </div>

            <div class="container v-center text-center">
                <div class="row">
                    <div class="col-lg-4 col-lg-push-4">
                        <div class="bordered-box rounded animated" data-animation="fadeInDown">
                            <h2>Reset Password</h2>
                            <form id="login-form" method="POST" action="{{ route('password.email') }}"
                                class="validate-form text-center mb-30">
                                @csrf
                                {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

                                <div class="form-group mb-10">
                                    <label for="login">Email:</label>
                                    <input id="login" value="{{ old('email') }}" name="email" type="text"
                                        class="form-control input-2" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-filled btn-primary btn-block">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!-- Content / End -->

    <!-- Footer -->
    <footer id="footer" class="dark bg-secondary">

        <div class="container">
            <div class="row">

                <div class="col-md-3 text-center">
                    <!-- Widget - Logo -->
                    <div class="widget widget-logo">
                        <img class="logo logo-dark" src="{{ asset('/') }}frontEnd/img/logo-light.png"
                            alt="Okno">
                    </div>
                    <div class="widget widget-follow">
                        <h6 class="text-uppercase">Follow Us</h6>
                        <a href="#" class="icon icon-circle icon-facebook icon-xs"><i
                                class="fa fa-facebook"></i></a>
                        <a href="#" class="icon icon-circle icon-twitter icon-xs"><i
                                class="fa fa-twitter"></i></a>
                        <a href="#" class="icon icon-circle icon-google-plus icon-xs"><i
                                class="fa fa-google-plus"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Widget - Recent posts -->
                    <div class="widget widget-recent-posts">
                        <h6 class="text-uppercase text-muted">Recent Posts</h6>
                        <ul class="list-posts">
                            <li>
                                <a href="#">Crazy developer ideas on 2016</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                            <li>
                                <a href="#">Our road trip to London!</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                            <li>
                                <a href="#">New iOS design concept</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Widget - Instagram -->
                    <div class="widget widget-instagram">
                        <h6 class="text-uppercase text-muted">Instagram Feed</h6>
                        <div id="instagram-feed" class="instagram-grid clearfix" data-limit="6"></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Widget - Twitter -->
                    <div class="widget widget-twitter">
                        <h6 class="text-uppercase text-muted">Latest Tweets</h6>
                        <div class="twitter-feed" data-count="3"></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Widget - Newsletter -->
                    <div class="widget widget-newsletter">
                        <h6 class="text-uppercase text-muted">Subscribe Us</h6>
                        <form action="http://suelo.us12.list-manage1.com/subscribe/post-json" id="sign-up-form"
                            class="sign-up-form validate-form" method="POST"
                            data-message-error="Opps... Something went wrong - please try again later"
                            data-message-success="Yeah! You will recieve a confirmation email soon...">
                            <input type="hidden" name="u" value="ed47dbfe167d906f2bc46a01b">
                            <input type="hidden" name="id" value="24ac8a22ad">
                            <input type="email" name="MERGE0" size="25" value=""
                                class="form-control input-2 input-sm" placeholder="Your e-mail..." required>
                            <button type="submit" class="btn btn-filled btn-sm btn-submit btn-block"><span>Sign
                                    Up</span></button>
                        </form>

                    </div>
                    <!-- Widget - Contact -->
                    <div class="widget widget-contact">
                        <h6 class="text-uppercase text-muted">Contact Us</h6>
                        <img src="{{ asset('/') }}frontEnd/img/photos/location-photo01.jpg" alt=""
                            class="img-rounded mb-20">
                        <address>
                            <strong>Address:</strong><br>
                            A795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br><br>
                            <strong>Phone:</strong><br>
                            +48 221 909 99<br><br>
                            <strong>E-mail:</strong><br>
                            your.name@example.com<br>
                        </address>
                    </div>
                </div>

            </div>
            <hr class="sep-line">
            <div class="row pt-50 pb-50">
                <div class="col-sm-6 text-muted">
                    Copyright Okno 2016©. All rights reserved.<br>
                    Made with love by suelo.pl
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="nav nav-inline nav-sm mt-10">
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Other products</a></li>
                        <li><a href="#">Hire me</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer / End -->


    <!-- JS Libraries -->
    <script src="{{ asset('/') }}frontEnd/js/jquery-1.12.3.min.js"></script>

    <!-- JS Plugins -->
    <script src="{{ asset('/') }}frontEnd/js/plugins.js"></script>

    <!-- JS Core -->
    <script src="{{ asset('/') }}frontEnd/js/core.js"></script>

</body>

</html>
