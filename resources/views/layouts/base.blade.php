<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @stack('title_base')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Consulting Website Template Free Download" name="keywords">
    <meta content="Consulting Website Template Free Download" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    @livewireStyles
    @stack('styles')

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    @livewire('homecomponentes.top-bar-component')
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Confer</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="feature.html" class="nav-item nav-link">Feature</a>
                    <a href="advisor.html" class="nav-item nav-link">Advisor</a>
                    <a href="review.html" class="nav-item nav-link">Review</a>


                    @if(Route::has('login'))
                    @auth
                        @if(Auth::user()->utype === 'ADM')
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Page</a>
                                <a href="single.html" class="dropdown-item">Single Page</a>
                                <a title="Logout" class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                            </div>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf

                        </form>
                        </div>
                        @elseif(Auth::user()->utype === 'CLB')
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Page</a>
                                <a href="single.html" class="dropdown-item">Single Page</a>
                                <a title="Logout" class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                        </div>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf

                        </form>
                        </div>
                        @elseif(Auth::user()->utype === 'CLB')
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Page</a>
                                <a href="single.html" class="dropdown-item">Single Page</a>
                                <a title="Logout" class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                        </div>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf

                        </form>
                        </div>

                        @elseif(Auth::user()->utype === 'COS')
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Page</a>
                                <a href="single.html" class="dropdown-item">Single Page</a>
                                <a title="Logout" class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                        </div>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf

                        </form>
                        </div>
                        @else
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Page</a>
                                <a href="single.html" class="dropdown-item">Single Page</a>
                                <a title="Logout" class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                            </div>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf

                            </form>
                        </div>
                        @endif
                    @else
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ingreso</a>
                        <div class="dropdown-menu">
                            <a href="{{route('login')}}" class="dropdown-item">Login</a>
                            <a href="{{route('register')}}" class="dropdown-item">Register</a>
                        </div>
                    </div>
                    @endif
                    @endif


                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('assets/img/carousel-1.jpg')}}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Fastest Way to Achieve Success</h1>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac
                            consequat at lectus in malesuada
                        </p>
                        <div class="carousel-btn">
                            <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                            <a class="btn btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal"><i
                                    class="fa fa-play"></i>Watch Video</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('assets/img/carousel-2.jpg')}}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Your Success Our Achievement</h1>
                        <p>
                            Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci
                            sodales varius fermentum, tortor
                        </p>
                        <div class="carousel-btn">
                            <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                            <a class="btn btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal"><i
                                    class="fa fa-play"></i>Watch Video</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('assets/img/carousel-3.jpg')}}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Your Business Our Effort</h1>
                        <p>
                            Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula
                            euismod quam. Proin pellentesque odio
                        </p>
                        <div class="carousel-btn">
                            <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                            <a class="btn btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal"><i
                                    class="fa fa-play"></i>Watch Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    {{$slot}}




    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{ asset('assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
