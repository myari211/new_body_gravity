@extends('customer.layouts.app')
@section('content')
<div class="d-block d-lg-none">
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <span style="font-size: 20px; font-weight: 600">My Package</span>
            </div>
        </div>
        <div class="row mt-4">
            @foreach($package as $data)
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('image/andry.png') }}" style="width: 75px; height: 75px;" class="rounded-circle">
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12 d-flex align-items-center">
                                            <span style="font-size:20px; font-weight: 600" class="text-capitalize">{{ $data->package }}</span>
                                            <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 rounded-pill z-depth-0 ml-3">Active</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>@currency($data->total_money - (($data->total_money/$data->total_package) * $data->total_usage))</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>{{ $data->total_package - $data->total_usage }} Session Left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <span style="font-size: 20px; font-weight: 600">My History Packages</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4">
                @foreach($package as $data)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('image/andry.png') }}" style="width: 75px; height: 75px;" class="rounded-circle">
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12 d-flex align-items-center">
                                            <span style="font-size: 20px; font-weight: 600" class="text-capitalize">
                                                {{ $data->package }}
                                            </span>
                                            <span class="badge badge-danger pt-1 pb-1 pr-2 pl-2 rounded-pill z-depth-0 ml-3">
                                                Over
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>@currency($data->total_money)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>0 Session Left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection