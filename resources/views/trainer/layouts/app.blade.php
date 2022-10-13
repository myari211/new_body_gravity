<html>
    <head>
        @include('master.css')
        <style type="text/css">
            body {
                overflow-x: hidden !important;
            }
        </style>
    </head>
    <body>
        <div class="d-none d-lg-block">
            <div class="row">
                <div class="col-lg-2 z-depth-1 pr-0">
                    <div class="w-100 h-100" style="min-height: 100vh">
                        <div class="w-100 h-100" style="min-height:100vh;">
                            <div class="row d-flex justify-content-center">
                                <div class='col-lg-8 pt-4'>
                                    <img src="{{ asset('image/body_gravity_black.png') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pr-4 pl-4">
                                <div class="row mt-5 d-flex justify-content-center">
                                    <div class="col-lg-12">
                                        <a href="/trainer/dashboard/{{ Auth::user()->id }}" style="font-weight: 600; font-size: 14px;">
                                            <i class="fas fa-chart-pie mr-2"></i>
                                            Dashboard
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <a href="/trainer/customers/{{ Auth::user()->id }}" style="font-weight: 600; font-size: 14px;">
                                            <i class="fas fa-user mr-2"></i>
                                            Customers
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <a href="/trainer/attendances/{{ Auth::user()->id }}" style="font-weight: 600; font-size: 14px;">
                                            <i class="fas fa-calendar mr-2"></i>
                                            Attendances
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 pl-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card z-depth-0" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px; height: 200px;">
                                <div class="card-body front-color" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">
                                    <div class="row mt-3 d-flex justify-content-center">
                                        <div class="col-lg-11 d-flex align-items-center justify-content-between">
                                            <span class="text-white" style="font-size: 30px; font-weight: 700">Hi, {{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                                            <div class="dropdown show" data-offset="20,20">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="cursor:pointer !important">
                                                    <img src="{{ asset('image/body_black.jpeg') }}" style="width: 50px; height: 50px;" class="rounded-circle border">
                                                    <button type="button" class="btn btn-md p-0 z-depth-0 border-0" data-toggle="modal" data-target="#account">
                                                        <i class="fas fa-chevron-down text-white"></i>
                                                    </button>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right mt-4 p-2" style="width: 300px !important">
                                                    <div class="row">
                                                        <div class="col-lg-3 d-flex align-items-center">
                                                            <img src="{{ asset('image/body_black.jpeg') }}" style="width: 50px; height: 50px; border:1px solid #007bff" class="rounded-circle">
                                                        </div>
                                                        <div class="col-lg-8 d-flex align-items-center">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <span class="font-color text-primary" style="font-weight: 600">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <span style="font-size: 13px; font-weight: 500">{{ Auth::user()->email }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <hr />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <a href="" class="pt-2 pb-2" style="font-size: 14px; font-weight: 600">
                                                                <i class="fas fa-user mr-2"></i>
                                                                My Account
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-lg-12">
                                                            <a href="" class="pt-2 pb-2" style="font-size: 14px; font-weight: 600">
                                                                <i class="fas fa-cog mr-2"></i>
                                                                Setting
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <hr />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <a style="font-size: 14px; font-weight: 600" class="text-danger" href="javascript:void();" onclick="document.getElementById('logout').submit();">
                                                                Log Out
                                                            </a>
                                                            <form method="post" action="{{ route('logout') }}" id="logout" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center" style="margin-top: -80px;">
                        <div class="col-lg-11">
                            <div class="card z-depth-0" style="background-color: #F5F6FF; border-radius: 15px;">
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
                        <a href="{{ url('/') }}/trainer/dashboard/{{ Auth::user()->id }}" class="nav-link">
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
                        <a href="{{ url('/') }}/trainer/attendances/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="far fa-calendar-alt" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Attendances</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-md rounded btn-primary pt-3 pb-3 pr-3 pl-3 rounded-circle m-0">
                            <i class="fas fa-qrcode text-white" style="font-size: 20px;"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}/trainer/customers/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class='col-12'>
                                    <i class="fas fa-clipboard" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Customers</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}/trainer/profile/{{ Auth::user()->id }}" class="nav-link">
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
    </body>
</html>