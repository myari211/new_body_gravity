@extends('customer.layouts.app')
@section('content')
    <div class="d-block d-lg-none">
        <div class="container">
            <div class="row mt-4 mb-4">
                <div class="col-12">
                    <span style="font-size: 20px; font-weight: 600">My Attendances</span>
                </div>
            </div>
            @foreach($attendances as $data)
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 30px; font-weight: 700" class="text-primary">{{ date('d', strtotime($data->time)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 20px; font-weight: 600">{{ date('M', strtotime($data->time)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-weight: 600;">{{ date('Y', strtotime($data->time)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="card z-depth-0 border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <img src="{{ asset('image/andry.png') }}" style="width: 50px; height: 50px;" class="rounded-circle">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size: 20px;">{{ $data->first_name." ".$data->last_name }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size: 15px; font-weight: 600">{{ date("H:i", strtotime($data->time)) }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span class="badge badge-success pt-1 pb-1 pr-2 pl-2 z-depth-0 rounded-pill">{{ $data->status }}</span>
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
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection