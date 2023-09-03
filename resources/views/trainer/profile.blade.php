@extends('trainer.layouts.app')
@section('content.mobile')
<div class="row">
    <div class="col-12">
        <div class="card bg-primary">
            <div class="card-body bg-primary">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        @if(Auth::user()->avatar != null)
                            <img src="{{ asset(url('/').'/avatar/'.$data->avatar) }}" style="width: 70px; height: 70px;" class="rounded-circle border">
                        @else
                            <img src="{{ asset(url('/').'/image/body_black.jpeg') }}" style="width: 70px; height: 70px;" class="rounded-circle border">
                        @endif
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-center">
                        <span style="font-size: 12px;" class="text-white">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12 d-flex justify-content-center">
                        <span class="text-white" style="font-size: 10px;">{{ Auth::user()->email }}</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 10px;" class="text-white">Sharing Profit</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span class="text-white">@currency($total_money->total_salary)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 10px;" class="text-white">Session</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span class="text-white">{{ $total_hours->total_hours }} Session</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <span style="font-size: 12px; font-weight: 600">Profile</span>
                            <button type="button" class="btn btn-md rounded btn-primary p-2 z-depth-0 border-0 text-capitalize">
                                Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <span style="font-size: 10px;">Ganti Password</span>
                    <i class="fas fa-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="card" onClick="event.preventDefault(); document.getElementById('logout').submit();">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <span style="font-size: 10px;">Logout</span>
                    <i class="fas fa-power-off"></i>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="{{ route('logout') }}" id="logout">
        @csrf
    </form>
</div>
{{-- <div class="container">
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            <img src="{{ asset('image/andry.png') }}" style="width: 120px; height: 120px;" class="rounded-circle">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
            <span style="font-size:20px; font-weight: 700">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <span style="font-weight: 600; font-size: 10px;">Hours</span>
                            <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 rounded z-depth-0" style="font-size: 10px;">
                                Total
                            </span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <span style="font-size: 30px; font-weight: 600">{{ $attendances }}</span>
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
                            <span style="font-weight: 600; font-size: 10px;">Hours</span>
                            <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 rounded z-depth-0" style="font-size: 10px;">
                                {{ date("M") }}
                            </span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <span style="font-weight: 600; font-size: 30px;">{{ $attendances }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span class="ml-1" style="font-size: 10px">
                                <span class="text-success"><i class="fas fa-caret-up"></i>13%</span> from last month
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <span style="font-weight: 600; font-size: 10px;">Income</span>
                            <span class="badge badge-primary rounded pt-1 pb-1 pr-2 pl-2 z-depth-0" style="font-size: 10px;">
                                {{ date("M") }}
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span style="font-weight: 600; font-size: 30px;">@currency($income)</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span calss="ml-1" style="font-size: 10px;">
                                <span class="text-danger"><i class="fas fa-caret-up"></i>5%</span> from last month
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <a href="">
                <i class="fas fa-user-circle mr-2"></i>
                Change Profile
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <a href="">
                <i class="fas fa-lock mr-2"></i>
                Change Password
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <a href="javascript:void();" onclick="document.getElementById('logoutProfile').submit();">
                <i class="fas fa-power-off mr-2"></i>
                Log Out
            </a>
            <form method="post" action="{{ route('logout') }}" id="logoutProfile" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div> --}}
@endsection