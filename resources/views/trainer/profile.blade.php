@extends('trainer.layouts.app')
@section('content.mobile')
<div class="container">
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
                            <span style="font-size: 30px; font-weight: 600">157</span>
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
                            <span style="font-weight: 600; font-size: 30px;">57</span>
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
                            <span style="font-weight: 600; font-size: 30px;">13M</span>
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
            <a href="">
                <i class="fas fa-power-off mr-2"></i>
                Log Out
            </a>
        </div>
    </div>
</div>
@endsection