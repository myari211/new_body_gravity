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

            input,
            input::-webkit-input-placeholder{
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="card-login d-flex align-items-center">
            <div class="w-100">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class='card'>
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-6 p-0">
                                        <div id="header_banner" class="pl-4 pr-4 d-flex align-items-center">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <span style="font-size:30px; font-weight:600">Member Area</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <span style="font-weight:600">Please Login to your account</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-0 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10">
                                                    <span style="font-size:30px; font-weight:600">Welcome Back!</span>
                                                </div>
                                            </div>
                                            <form method="post" action="{{ route('login') }}">
                                                @csrf
                                                <div class="row d-flex justify-content-center mt-4">
                                                    <div class="col-lg-10">
                                                        <input type="email" class="form-control rounded-pill" style="height:50px;" placeholder="Enter Email Address..." name="email">
                                                        <div class="col-md-6">
                            
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center mt-3">
                                                    <div class="col-lg-10">
                                                        <input type="password" class="form-control rounded-pill" style="height:50px;" placeholder="Password" name="password">
                                                    </div>
                                                </div>
                                                <div class="row mt-3 d-flex justify-content-center">
                                                    <div class="col-lg-10">
                                                        <button type="submit" class="btn btn-md rounded-pill btn-block btn-black text-white z-depth-0 text-capitalize" style="font-weight:600; height:50px;">
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
                    </div>
                </div>
            </div>
        </div>
        @include('master.js')
    </body>
</html>
