    {{-- <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
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

            input,
            input::-webkit-input-placeholder{
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="d-none d-lg-block">
            <div class="row h-100">
                <div class="col-lg-4 h-100 bg-primary d-flex align-items-center">
                    <div class="w-100 pl-4">
                        <div class="row">
                            <div class="col-12">
                                <span class="text-white" style="font-size: 40px; font-weight: 600">Body Gravity</span> <br/>
                                <span class="text-white" style="font-size: 20px; font-weight: 500;">Stabilize your body for a productive life</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 h-100 d-flex align-items-center">
                    <div class="w-100">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 200px;">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-8">
                                    <div class="md-form md-outline input-with-pre-icon m-0">
                                        <input type="email" name="email" class="form-control rounded" placeholder="Enter your Email" id="email" style="height: 50px;">
                                        <label for="email">Email</label>
                                        <i class="fas fa-envelope input-prefix"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-8">
                                    <div class="md-form md-outline input-with-pre-icon m-0">
                                        <input type="password" name="password" class="form-control rounded" placeholder="Enter your Password" id="password" style="height: 50px;">
                                        <label for="password">Password</label>
                                        <i class="fas fa-lock input-prefix"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-8">
                                    <button type="submit" class="btn btn-block btn-primary z-depth-0 rounded text-capitalize" style="font-height: 600 !important">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-lg-none">
            <div class="row h-100">
                <div class="col-12 bg-primary d-flex justify-content-center">
                    <div style="width: 95vw">
                        <div class="row">
                            <div class="col-12">
                                <div class="md-form md-outline input-with-pre-icon">
                                    <input type="email" name="email" class="form-control rounded bg-white" id="email">
                                    <label for="email" class="text-white">Email</label>
                                    <i class="fas fa-envelope input-prefix"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
        @include('master.js')
    </body>
</html>
