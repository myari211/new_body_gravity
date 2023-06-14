<html>
    <head>
        @include('master.css')
        <style type="text/css">
            .card-login {
                height:100%;
            }

            #header_banner { 
                width: 100%;
                min-height: 600px;
                background-size:cover;
                background-attachment: fixed;
                color:white;
                background-image:
                linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
                url({{ asset('image/home1.jpg') }});
            }

            #header_mobile {
                width: 100%;
                min-height: 700px;
                background-size:cover;
                background-attachment: fixed;
                /* color: white; */
                background-image:
                linear-gradient(55.8deg, rgba(0, 0, 0, 0.75) 99.53%, rgba(0, 0, 0, 1) 100%),
                url({{ asset('image/home1.jpg') }});
            }

            input {
                height: 50px !important;
            }

            input,
            input::-webkit-input-placeholder{
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="d-none d-lg-block">
            <div class="row  h-100">
                <div class="col-4 bg-primary d-flex align-items-center">
                    <div class="w-100 pl-4">
                        <div class="row">
                            <div class="col-12">
                                <span class="text-white" style="font-weight: 600; font-size: 60px;">Body Gravity</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="text-white" style="font-size: 20px; font-weight: 500;">Stabilize your body for a productive life</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 d-flex align-items-center">
                    <div class="w-100">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-8 d-flex justify-content-center">
                                    <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 200px;">
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-6">
                                    <div class="md-form md-outline m-0">
                                        <label for="email" class="active">Email</label>
                                        <input type="email" class="form-control rounded" name="email" id="email" placeholder="Input your email">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-3">
                                <div class="col-6">
                                    <div class="md-form md-outline m-0">
                                        <label for="password" class="active">Password</label>
                                        <input type="password" class="form-control rounded" name="password" id="password" placeholder="Input your password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-md btn-primary btn-block rounded text-capitalize z-depth-0">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-lg-none">
            {{-- <div id="header_mobile">
                <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                    <div class="row w-100 d-flex justify-content-center">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <span style="font-size: 30px;">Welcome Back!</span>
                                        </div>
                                    </div>
                                    <form method="post" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control rounded-pill" name="email" placeholder="Enter Email Adress..">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control rounded-pill" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-dark btn-md rounded-pill btn-block z-depth-0 z-depth-0 text-capitalize">
                                                    Login
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="container">
                <div class="w-100">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="row d-flex justify-content-center pt-5 pb-5 primary-color-dark" style="border-bottom-right-radius: 85px;">
                            <div class="col-6 d-flex justify-content-center">
                                <div class="card rounded-circle">
                                    <div class="card-body">
                                        <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 80px; height: 80px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span style="font-weight: 500; font-size: 10px;">Log In to your account</span>
                            </div>
                        </div>
                        <div class="row mt-3 d-flex justify-content-center">
                            <div class="col-12">
                                <div class="md-form md-outline m-0 input-with-post-icon">
                                    <label for="email" class="active">Email</label>
                                    <input type="email" class="form-control rounded" name="email" id="email" placeholder="Input your email">
                                    <i class="fas fa-envelope input-prefix"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-3">
                            <div class="col-12">
                                <div class="md-form md-outline m-0 input-with-post-icon">
                                    <label for="password" class="active">Password</label>
                                    <input type="password" class="form-control rounded" name="password" id="password" placeholder="Input your password">
                                    <i class="fas fa-lock input-prefix"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-12">
                                <button type="submit" class="btn primary-color-dark text-white btn-block rounded text-capitalize" style="font-weight: 600">Sign In</button>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 12px;">- Stabilize your body for a productive life -</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('master.js')
    </body>
</html>
