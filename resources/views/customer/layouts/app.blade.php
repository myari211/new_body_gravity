<html>
    <head>
        @include('master.css')
        <style type="text/css">
            html, body{
                background-color: #F5F6FF;
            }
        </style>
    </head>
    <body>
        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand fixed-bottom bg-white">
                <ul class="navbar-nav nav-justified w-100">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}/customer/dashboard/{{ Auth::user()->id }}" class="nav-link">
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
                        <a href="{{ url('/') }}/customer/attendances/{{ Auth::user()->id }}" class="nav-link">
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
        </div>
        @yield('content')
        @include('master.js')
    </body>
</html>