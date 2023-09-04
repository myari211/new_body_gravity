@extends('customer.layouts.app')
@section('content')
<div class="d-block d-lg-none">
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <span style="font-size: 12px; font-weight: 600">My Package</span>
            </div>
        </div>
        <div class="row mt-4">
            @foreach($package as $data)
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 d-flex align-items-center justify-content-between">
                                            <span style="font-size:10px; font-weight: 600" class="text-capitalize">{{ $data->package }}</span>
                                            <span class="badge badge-primary rounded-pill z-depth-0 text-capitalize" style="font-size: 10px; font-weight:600">Active</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 10px;">@currency($data->total_money - (($data->total_money/$data->total_package) * $data->total_usage))</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 10px;">{{ $data->total_package - $data->total_usage }} Session Left</span>
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
                <span style="font-size: 12px; font-weight: 600">My History Packages</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4">
                @foreach($package as $data)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 d-flex align-items-center justify-content-between">
                                            <span style="font-size: 10px; font-weight: 600" class="text-capitalize">
                                                {{ $data->package }}
                                            </span>
                                            <span class="badge badge-danger rounded-pill z-depth-0 rounded text-capitalize" style="font-size: 10px; font-weight: 600">
                                                Over
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 10px;">@currency($data->total_money)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 10px;">0 Session Left</span>
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