<html>
    <head>
        @include('master.css')
        <style>
            .menu{
                transition: 0.5s;
                padding-top:10px;
                padding-bottom:10px;
                color: #000 !important;
            }

            .menu:hover {
                background-color:#F5F6FF;
                border-radius: 10px;
            }

            .menu > a{
                /* color:white; */
                font-size:13px;
                font-weight:600;
                opacity:0.6;
                color: #000 !important;
            }

            .menu:hover > a{
                opacity:1;
            }
        </style>
    </head>
    <body>
        <div class="d-none d-lg-block">
            <div class="row">
                <div class="col-lg-2 pr-0 z-depth-1">
                    <div class="w-100 h-100" style="min-height:100vh;">
                        <div class="row d-flex justify-content-center">
                            <div class='col-lg-8 pt-4'>
                                <img src="{{ asset('image/body_gravity_black.png') }}" class="w-100">
                            </div>
                        </div>
                        <div class="pr-4 pl-4">
                            <div class="row mt-5 d-flex justify-content-center">
                                <div class="col-lg-12 menu">
                                    <a href="/admin/dashboard/{{ Auth::user()->id }}">
                                        <i class="fas fa-chart-pie mr-2"></i>
                                        Dashboard
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 menu">
                                    <a href="/admin/customer/" class="w-100">
                                        <i class="fas fa-user mr-2"></i>
                                        Customer
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 menu">
                                    <a href="/admin/trainer">
                                        <i class="fas fa-user mr-2"></i>
                                        Trainer
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 menu">
                                    <a href="/admin/customer">
                                        <i class="fas fa-user mr-2"></i>
                                        Customer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 pl-0">
                    <div class="card front-color rounded-0 z-depth-0" style="height: 200px; border-bottom-left-radius: 25px !Important; border-bottom-right-radius: 25px !important;">
                        <div class="card-body" style="border-bottom-left-radius: 25px !important; border-bottom-right-radius: 25px !important;">
                            <div class="row d-flex justify-content-center mt-3">
                                <div class="col-lg-11">
                                    <span style="font-size:30px; font-weight: 700;" class="text-white">Hi, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center" style="margin-top: -80px;">
                        <div class="col-lg-11">
                            <div class="card z-depth-0" style="background-color:#F5F6FF; border-radius: 15px;">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand fixed-bottom bg-white">
                <ul class="navbar-nav nav-justified w-100">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}/admin/dashboard/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="fas fa-home" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Home</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}/admin/customer/" class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="far fa-calendar-alt" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Customer</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <button type="button" class="btn btn-md rounded btn-primary pt-3 pb-3 pr-3 pl-3 rounded-circle m-0">
                            <i class="fas fa-qrcode text-white" style="font-size: 20px;"></i>
                        </button>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ url('/') }}/customer/package/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class='col-12'>
                                    <i class="fas fa-clipboard" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Package</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href='{{ url('/') }}/customer/profile/{{ Auth::user()->id }}' class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="fas fa-user-circle" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Me</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            @yield('content.mobile')
        </div>
        @include('master.js')
        @yield('javascript')
    </body>
</html>