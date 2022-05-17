<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light z-depth-0">
            <div class="container d-flex justify-content-between w-100">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('image/body_gravity_black.png') }}" style="width:60px;">
                </a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active pr-4">
                            <a class="nav-link" href="#">Home <span class="sr-only">Dashboard</span></a>
                        </li>
                        <li class="nav-item pr-2 pl-2">
                            <a class="nav-link" href="#">Barcode</a>
                        </li>
                        <li class="nav-item pr-2 pl-2">
                            <a class="nav-link" href="#">Customers</a>
                        </li>
                        <li class="nav-item pr-2 pl-2">
                            <a class="nav-link" href="#">
                                My Attendance
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        @include('master.js')
    </body>
</html>