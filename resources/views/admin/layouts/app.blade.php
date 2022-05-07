<html>
    <head>
        @include('master.css')
        <style>
            .front-color{
                background-color:#4E73DF;
            }

            .menu{
                transition: 0.5s;
                padding-top:10px;
                padding-bottom:10px;
            }

            .menu:hover {
                background-color:#3761e0;
            }

            .menu > a{
                color:white;
                font-size:13px;
                font-weight:600;
                opacity:0.6;
            }

            .menu:hover > a{
                opacity:1;
            }

            .border-top-custom{
                border-top:1px solid rgb(255, 255, 255, .6);
            }

            .border-bot-custom{
                border-bottom:1px solid rgb(255, 255, 255, .6);
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-2 pr-0">
                <div class="w-100 h-100 front-color" style="min-height:100vh;">
                    <div class="row d-flex justify-content-center">
                        <div class='col-lg-8 pt-4'>
                            <img src="{{ asset('image/body_logo.png') }}" class="w-100">
                        </div>
                    </div>
                    <div class="pr-4 pl-4">
                        <div class="row mt-5 d-flex justify-content-center">
                            <div class="col-lg-12 menu border-top-custom border-bot-custom">
                                <a href="/admin/dashboard/{{ Auth::user()->id }}">
                                    <i class="fas fa-chart-pie mr-2"></i>
                                    Dashboard
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <span style="font-size:10px; font-weight:700; color: #B4C4F1">USER DATA</span>
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
                                <a href=="/admin/customer">
                                    <i class="fas fa-user mr-2"></i>
                                    Customer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="card rounded-0">
                            <div class="card-body pt-2 pb-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-end align-items-center">
                                            <div style="border-right:1px solid rgb(142, 126, 126)">
                                                <button type="button" class="btn btn-md rounded-0 p-2 z-depth-0">
                                                    <i class="fas fa-bell text-muted" style="font-size:17px;"></i>
                                                </button>
                                                <button type="button" class="btn btn-md rounded-0 p-2 z-depth-0">
                                                    <i class="fas fa-envelope text-muted" style="font-size:17px;"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <img src="{{ asset('image/body_gravity_black.png') }}" style="width:30px; height:30px;" class="rounded-circle border ml-3">
                                                <small class="ml-2 text-muted" style="font-weight:600">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('master.js')
    </body>
</html>