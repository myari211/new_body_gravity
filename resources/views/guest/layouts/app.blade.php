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
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top z-depth-0 p-4 d-flex justify-content-between" id="header">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('image/body_logo.png') }}" style="width:100px;">
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
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        @include('master.loader')
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



            $(document).ready(function(){
                $(".preloader").fadeOut();
                new WOW().init();
            });

            $(window).on('scroll', function () {
                if($(window).scrollTop() > 100) {
                    $('#header').addClass('black');
                    $('#header').removeClass('p-4');
                    $('#header').addClass('pr-4 pl-4 pt-2 pb-2')
                }
                else
                {
                    $('#header').removeClass('black');
                    $('#header').removeClass('pr-4 pl-4 pt-2 pb-2');
                    $('#header').addClass('p-4');
                }
            })
        </script>
    </body>
</html>
