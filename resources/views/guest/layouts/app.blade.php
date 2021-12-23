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
        </style>
    </head>
    <body>
        @include('master.loader')
        <div class="d-none d-lg-block">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top z-depth-0 p-4 d-flex justify-content-between" id="header">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('image/body_logo.png') }}" style="width:140px;">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2 home">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-3 about">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item mr-3 program">
                            <a class="nav-link" href="{{ route('program') }}">Program</a>
                        </li>
                        <li class="nav-item contact">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top z-depth-0" id="header_mobile">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('image/body_logo.png') }}" style="width:80px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-2 home">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-3 about">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item mr-3 program">
                                <a class="nav-link" href="{{ route('program') }}">Program</a>
                            </li>
                            <li class="nav-item contact">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
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



            $(document).ready(function(){
                $(".preloader").fadeOut();
                new WOW().init();
            });

            $(window).on('scroll', function () {
                if($(window).scrollTop() > 100) {
                    $('#header').addClass('black');
                    $('#header').removeClass('p-4');
                    $('#header').addClass('pr-4 pl-4 pt-2 pb-2')
                    $('#header_mobile').addClass('black');
                }
                else
                {
                    $('#header').removeClass('black');
                    $('#header').removeClass('pr-4 pl-4 pt-2 pb-2');
                    $('#header').addClass('p-4');
                    $('#header_mobile').removeClass('black');
                }
            });
        </script>
    </body>
</html>
