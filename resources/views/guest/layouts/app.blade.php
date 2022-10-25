<html>
    <head>
        @include('master.css')
        <style>
            #header {
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            #header_mobile {
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            .active_section {
                border-bottom: 2px solid #000;
            }

            .grey-ice {
                background-color:#DAE4DE;
            }
        </style>
    </head>
    <body>
        @include('sweetalert::alert')
        @include('master.loader')
        <div class="d-none d-lg-block">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top z-depth-0 p-4 d-flex justify-content-between" id="header">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('image/body_white.png') }}" style="width:70px;" id="image">
                        <img src="{{ asset('image/body_gravity_black.png') }}" style="width:70px;" id="other_image" class="d-none">
                    </a>
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item mr-2 home">
                            <a class="nav-link menu" href="/" style="font-weight:400; font-size:14px;">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-3 about">
                            <a class="nav-link menu" href="{{ route('about') }}" style="font-weight:400; font-size:14px;">About Us</a>
                        </li>
                        <li class="nav-item mr-3 program">
                            <a class="nav-link menu" href="{{ route('program') }}" style="font-weight:400; font-size:14px;">Our Program</a>
                        </li>
                        <li class="nav-item mr-3 testimonial">
                            <a class="nav-link menu" href="{{ route('testimonial') }}" style="font-weight:400; font-size:14px;">Testimonial</a>
                        </li>
                        <li class="nav-item contact">
                            <a class="nav-link menu" href="{{ route('contact') }}" style="font-weight:400; font-size:14px;">Contact Us</a>
                        </li>
                        <li class="nav-item" style="margin-left:70px;">
                            <button type="button" class="btn btn-md rounded btn-outline-white z-depth-0" onclick="location.href='{{ route('login') }}'";>
                                Member
                                <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>


            {{-- modal_signIn --}}
            <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <img src="{{ asset('image/body_gravity_black.png') }}" class="w-100">
                                </div>
                            </div>
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="md-form md-outline input-with-pre-icon mb-0">
                                            <input type="email" class="form-control rounded @error('email') is-invalid @enderror" name="email" id="email" style="height:50px;" placeholder="Your Email">
                                            <i class="fas fa-envelope input-prefix text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="md-form md-outline input-with-pre-icon mt-0 mb-0">
                                            <input type="password" class="form-control rounded @error('password') is-invalid @enderror" name="password" id="password" placeholder="Your Password" style="height:50px;">
                                            <i class="fas fa-lock input-prefix text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        @error('email')
                                            <small class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @error('password')
                                            <small class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <a>
                                            <small>Forgot Password ?</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-md rounded btn-block btn-outline-black text-capitalize z-depth-0" style="font-size:18px;">
                                            Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top z-depth-0" id="header_mobile">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('image/body_white.png') }}" style="width:80px;" id="image">
                        <img src="{{ asset('image/body_gravity_black.png') }}" id="other_image" class="d-none">                        
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <ul class="navbar-nav" id="menu">
                            <li class="nav-item mr-2 home">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-3 about">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item mr-3 program">
                                <a class="nav-link" href="{{ route('program') }}">Our Program</a>
                            </li>
                            <li class="nav-item mr-3 testimonial">
                                <a class="nav-link" href="{{ route('testimonial') }}">Testimonial</a>
                            </li>
                            <li class="nav-item contact">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-md rounded btn-outline-white" onclick='location.href="/login";'>
                                    Member
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        @include('master.footer')
        @include('master.js')
        <script type="text/javascript">
            @error('email')
                $('#signInModal').modal('show');
            @enderror
            @error('password')
                $('#signInModal').modal('show');
            @enderror
            var pathname = window.location.pathname;
            
            if(pathname == '/') {
                $('.home').addClass("active");
            }
            else if(pathname == '/about') {
                $('.about').addClass("active");
            }
            else if(pathname == '/program') {
                $('.program').addClass("active");
            }
            else if(pathname == '/contact') {
                $('.contact').addClass("active");
            }
            else if(pathname == '/testimonial') {
                $('.testimonial').addClass("active");
            }



            $(document).ready(function(){
                $(".preloader").fadeOut();
                new WOW().init();
            });

            $(window).on('scroll', function () {
                if($(window).scrollTop() > 100) {
                    $('#header').addClass('bg-white');
                    $('#header').removeClass('p-4');
                    $('#header').addClass('pr-4 pl-4 pt-2 pb-2');
                    $('.menu').addClass('text-dark');
                    $('#header_mobile').addClass('black');
                    $('#image').addClass('d-none');
                    $('#other_image').removeClass('d-none');
                    $('.active').addClass('active_section');
                    $('#header').removeClass('z-depth-0');
                    $('#signIn').removeClass('btn-outline-white');
                    $('#signIn').addClass('btn-outline-black');
                }
                else
                {
                    $('#header').removeClass('bg-white');
                    $('#header').removeClass('pr-4 pl-4 pt-2 pb-2');
                    $('#header').addClass('p-4');
                    $('.menu').removeClass('text-dark');
                    $('#header_mobile').removeClass('black');
                    $('#other_image').addClass('d-none');
                    $('#image').removeClass('d-none');
                    $('.active').removeClass('active_section');
                    $('#header').addClass('z-depth-0');
                    $('#signIn').removeClass('btn-outline-black');
                    $('#signIn').addClass('btn-outline-white');
                }
            });
        </script>
    </body>
</html>
