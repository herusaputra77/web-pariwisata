<!DOCTYPE html>
<html lang="en" data-cookies-popup="true">

<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>Pariwisata</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('tanah_datar_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('tanah_datar_logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('tanah_datar_logo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('tanah_datar_logo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('tanah_datar_logo.png') }}">

    <!-- Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/') }}backEnd/css/icons.css" rel="stylesheet" type="text/css">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}frontEnd/css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="{{ asset('/') }}frontEnd/css/themes/theme-energy.css" />
    @livewireStyles
</head>

<body class="one-page header-absolute">

    <!-- Loader -->
    <div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66"
            xmlns="http://www.w3.org/2000/svg">
            <circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33"
                r="30"></circle>
        </svg></div>
    <!-- Loader / End -->

    <!-- Header -->
    <header id="header" class="absolute fullwidth ">
        	<!-- Top Bar -->
	

        <!-- Navigation Bar -->
        <div id="nav-bar">

            <!-- Logo -->
            <a class="logo-wrapper" href="/">
                <img class="logo" src="{{asset('tanah_datar_logo.png')}}" alt="Okno"> <span>Seleamat Datang di Wisata Tanah Datar</span>
            </a>

            <nav class="module-group right">

                <!-- Primary Menu -->
                <div class="module menu left">
                    <ul id="nav-primary" class="nav nav-primary">
                        <li><a href="/">Beranda</a></li>
                        <li class="has-dropdown">
							<a href="#">Wisata</a>
							<ul>
                                @foreach ($kategori as $ka)
                                    
								<li class="">
                                    <a href="/kategori/{{$ka->id}}">{{$ka->kategori}}</a>
								</li>
                                @endforeach
							</ul>
						</li>
                    </ul>
                </div>

                <!-- Language Menu -->
                <div class="module language left">
                    <ul class="nav nav-primary">
                        <li class="has-dropdown">
                            <a href="#">Eng</a>
                            <ul>
                                <li><a href="#" onclick="doGTranslate('id|en');return false;" title="English"
                                        class="gflag nturl" style="background-position:-0px -0px;">English</a></li>
                                <li><a href="#" onclick="doGTranslate('en|id');return false;" title="Indonesia"
                                        class="gflag nturl" style="background-position:-0px -0px;">indonesia</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Search -->
                <div class="module search left">
                    <span class="trigger" data-toggle="search-bar"><i class="ti-search"></i></span>
                </div>

            </nav>

            <!-- Menu Toggle -->
            <div class="menu-toggle">
                <a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a>
            </div>

        </div>

        <!-- Notification Bar -->
        <div id="notification-bar"></div>

        <!-- Search Bar -->
        <div id="search-bar">
            <form id="search-form" method="POST" action="/search">
                @csrf
                <input class="search-bar-input" type="text" name="text" placeholder="Search...">
                <button type="submit" class="search-bar-submit"><i class="ti-search"></i></button>
            </form>
            <a href="#" class="search-bar-close" data-toggle="search-bar"><i class="ti-close"></i></a>
        </div>

    </header>
    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="dark bg-secondary pt-90 pb-60">

        <div class="container">
            <div class="row v-center-items">
                <div class="col-md-4 text-center mb-30">
                    <ul class="nav nav-inline nav-sm">
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Other products</a></li>
                        <li><a href="#">Hire me</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center mb-30">
                    {{-- <img class="logo logo-dark" src="{{ asset('/') }}frontEnd/img/logo-light.png" width="100"
                        alt="Okno"> --}}
                </div>

                <div class="col-md-4 text-center mb-30">
                    <a href="#" class="icon icon-circle icon-facebook icon-xs"><i
                            class="fa fa-facebook"></i></a>
                    <a href="#" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon icon-circle icon-google-plus icon-xs"><i
                            class="fa fa-google-plus"></i></a>
                </div>

            </div>
        </div>

    </footer>
    <!-- Footer / End -->

    <!-- Modal -->
    <div class="modal fade" id="SebastianKler" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <img src="{{ asset('/') }}frontEnd/img/members/member01_big.jpg" alt="">
                <div class="modal-body p-40">
                    <h3 class="font-secondary mb-0">Sebastian Kler</h3>
                    <span class="text-muted">CEO / Founder</span>
                    <p class="lead mt-20">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam.</p>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                        sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.</p>
                    <ul class="social-bar">
                        <li>
                            <a href="#"><span class="icon icon-circle icon-xs icon-facebook"><i
                                        class="fa fa-facebook"></i></span><span class="text-muted">Follow on</span>
                                Faceboook</a>
                        </li>
                        <li>
                            <a href="#"><span class="icon icon-circle icon-xs icon-twitter"><i
                                        class="fa fa-twitter"></i></span><span class="text-muted">Follow on</span>
                                Twitter</a>
                        </li>
                        <li>
                            <a href="#"><span class="icon icon-circle icon-xs icon-google-plus"><i
                                        class="fa fa-google-plus"></i></span><span class="text-muted">Follow on</span>
                                Google +</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                    class="ti-close"></i></button>
        </div>
    </div>


    <!-- JS Libraries -->
    <script src="{{ asset('/') }}frontEnd/js/jquery-1.12.3.min.js"></script>

    <!-- JS Plugins -->
    <script src="{{ asset('/') }}frontEnd/js/plugins.js"></script>

    <!-- JS Core -->
    <script src="{{ asset('/') }}frontEnd/js/core.js"></script>
    <script src="{{ asset('/') }}frontEnd/js/language.js"></script>
    @livewireScripts
</body>

</html>
