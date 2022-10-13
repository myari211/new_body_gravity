@extends('customer.layouts.app')
@section('content')
    <div class="d-block d-lg-none">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <img src="{{ asset('image/andry.png') }}" style="width: 100px; height: 100px;" class="rounded-circle">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-size: 20px; font-weight: 700">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <span style="font-size: 10px;">Session</span>
                                    <span class="badge badge-primary rounded pt-1 pb-1 pr-2 pl-2 z-depth-0" style="font-size: 10px;">
                                        Total
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-weight: 600; font-size: 30px;">{{ $package }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <span style="font-size: 10px;">Session</span>
                                    <span class="badge badge-primary rounded pt-1 pb-1 pr-2 pl-2 z-depth-0" style="font-size: 10px;">
                                        {{ date("M") }}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 30px;">{{ $package_month }}</span>
                                    <span style="font-size: 10px;">
                                        <span class="text-danger" style="font-weight: 600">
                                            <i class="fas fa-caret-down"></i>
                                            100%
                                        </span>
                                        From last month
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <a href="">
                        <i class="fas fa-user mr-2"></i>
                        Change Profile
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <a href="">
                        <i class="fas fa-lock mr-2"></i>
                        Change Password
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <a href="javascript:void();" onclick="document.getElementById('logout').submit();">
                        <i class="fas fa-power-off mr-2"></i>
                        Logout
                    </a>
                    <form method="post" action="{{ route('logout') }}" id="logout">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection