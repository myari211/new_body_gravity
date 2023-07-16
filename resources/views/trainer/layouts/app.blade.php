<html>
    <head>
        @include('master.css')
        <style>
            body {
                background-color: #EDF1FB;
            }
            .menu{
                transition: 0.5s;
                padding-top:10px;
                padding-bottom:10px;
                /* color: #000 !important; */
            }

            .menu:hover {
                /* background-color:#F5F6FF; */
                border-radius: 10px;
            }

            .menu > a{
                /* color:white; */
                font-size:10px;
                font-weight:400;
                /* opacity:0.6; */
                /* color: #000 !important; */
                color: #fff;
            }

            .menu:hover > a{
                opacity:1;
            }
        </style>
    </head>
    <body>
        <div class="d-none d-lg-block">
            <div class="row" style="height: 100%">
                <div class="col-lg-2 pr-0 h-100">
                    {{-- <div class="w-100 h-100" style="min-height:100vh;">
                        <div class="row d-flex justify-content-center">
                            <div class='col-lg-8 pt-4'>
                                <img src="{{ asset('image/body_white.png') }}" class="w-100">
                            </div>
                        </div>
                        <div class="pr-4 pl-4">
                            <div class="row mt-5 d-flex justify-content-center">
                                <div class="col-12">
                                    <span class="text-white" style="font-weight: 600; font-size: 8px; opacity: 0.6">NAVIGATION</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12 menu">
                                    <a href="{{ url('/') }}/admin/dashboard/{{ Auth::user()->id }}" class="text-stylish-color">
                                        <span class="badge badge p-2 rounded z-depth-0 bg-white mr-2">
                                            <i class="fas fa-chart-pie text-dark"></i>
                                        </span>
                                        Dashboard
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <span class="text-white" style="font-weight: 600; font-size: 8px; opacity: 0.6">RESOURCES</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12 menu">
                                    <a href="{{ url('/') }}/admin/customer/" class="w-100">
                                        <span class="badge badge p-2 rounded z-depth-0 bg-white mr-2">
                                            <i class="fas fa-user text-dark"></i>
                                        </span>
                                        Customer
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-12 menu">
                                    <a href="{{ url('/') }}/admin/trainer">
                                        <span class="badge badge p-2 rounded z-depth-0 bg-white mr-2">
                                            <i class="fas fa-user text-dark"></i>
                                        </span>
                                        Trainer
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div> --}}
                    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="position:fixed !important;">
                        <div class="app-brand demo">
                          <a href="{{ route('admin.dashboard', Auth::user()->id) }}" class="app-brand-link">
                            {{-- <span class="app-brand-logo demo">
                              <svg
                                width="25"
                                viewBox="0 0 25 42"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                              >
                                <defs>
                                  <path
                                    d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                    id="path-1"
                                  ></path>
                                  <path
                                    d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                    id="path-3"
                                  ></path>
                                  <path
                                    d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                    id="path-4"
                                  ></path>
                                  <path
                                    d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                    id="path-5"
                                  ></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                                        <mask id="mask-2" fill="white">
                                          <use xlink:href="#path-1"></use>
                                        </mask>
                                        <use fill="#696cff" xlink:href="#path-1"></use>
                                        <g id="Path-3" mask="url(#mask-2)">
                                          <use fill="#696cff" xlink:href="#path-3"></use>
                                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                        </g>
                                        <g id="Path-4" mask="url(#mask-2)">
                                          <use fill="#696cff" xlink:href="#path-4"></use>
                                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                        </g>
                                      </g>
                                      <g
                                        id="Triangle"
                                        transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                                      >
                                        <use fill="#696cff" xlink:href="#path-5"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                            </span> --}}
                            <span class="app-brand-text demo menu-text fw-bolder ms-2">Body Gravity</span>
                          </a>
              
                          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                          </a>
                        </div>
              
                        <div class="menu-inner-shadow"></div>
              
                        <ul class="menu-inner py-1">
                          <!-- Dashboard -->
                          <li class="menu-item active">
                            <a href="{{ url('/') }}/admin/dashboard/{{ Auth::user()->id }}" class="menu-link">
                              <i class="menu-icon tf-icons bx bx-home-circle"></i>
                              <div data-i18n="Analytics">Dashboard</div>
                            </a>
                          </li>
              
                          <!-- Layouts -->
              
                          <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Account</span>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                              <div data-i18n="Account Settings">Trainer</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="{{ url('/') }}/admin/trainer" class="menu-link">
                                  <div data-i18n="Account">Trainer Dashboard</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="{{ route('trainer_performance') }}" class="menu-link">
                                  <div data-i18n="Notifications">Trainer Performance</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="{{ route('trainer_account') }}" class="menu-link">
                                  <div data-i18n="Connections">Trainer Account</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                              <div data-i18n="Authentications">Customer</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="{{ route('customer_dashboard') }}" class="menu-link">
                                  <div data-i18n="Basic">Customer Dashboard</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="{{ route('admin.customer_package') }}" class="menu-link">
                                  <div data-i18n="Basic">Customer Package</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <!-- Components -->
                          <li class="menu-header small text-uppercase"><span class="menu-header-text">Finance</span></li>
                          <!-- Cards -->
                          <li class="menu-item">
                            <a href="cards-basic.html" class="menu-link">
                              <i class="menu-icon tf-icons bx bx-collection"></i>
                              <div data-i18n="Basic">Revenue</div>
                            </a>
                        </li>
                        </ul>
                      </aside>
                </div>
                <div class="col-lg-10 pl-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end align-items-center">
                                            <div class="mr-2">
                                                <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 30px; height:30px;" class="border rounded-circle">
                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span style="font-size: 10px; font-weight: 600">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span style="font-size: 8px;">Administrator</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                    {{-- <div class="card front-color rounded-0 z-depth-0" style="height: 200px; border-bottom-left-radius: 25px !Important; border-bottom-right-radius: 25px !important;">
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
                    </div> --}}
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
<html>
    <head>
        @include('master.css')
        <style type="text/css">
            body {
                overflow-x: hidden !important;
                background-color: #EDF1FB;
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
                        <button type="button" class="btn btn-md rounded btn-primary pt-3 pb-3 pr-3 pl-3 rounded-circle m-0" onclick="openQr();">
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
            <div class="modal fade" id="qrCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div id="qrcode"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 12px;">Scan this link for fill ur attendances</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content.mobile')
        </div>
        @include('master.js')
        <script type="text/javascript">
            var trainer = "{{ Auth::user()->id }}"

            const openQr = () => {
                $('#qrCode').modal('show');
                createQr();
            }

            const createQr = () => {
                var qrcode = new QRCode(document.getElementById('qrcode'), {
                    text: "{{ url('/') }}/customer/scan/" + trainer,
                    width: 150,
                    height: 150,
                    correctLevel: QRCode.CorrectLevel.H,
                });

                $('#qrCode').on('hidden.bs.modal', function() {
                    qrcode.clear();
                });
            }

        </script>
    </body>
</html>