@extends('admin.layouts.app')
@section('content')
<div class="pl-3 pr-3">
    <div class="row">
        <div class="col-8 h-100">
            <div class="card z-depth-0 h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('image/body_gravity_black.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 12px; font-weight: 600">First Name</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-weight: 600">{{ $trainer->first_name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 12px; font-weight: 600">Last Name</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-weight: 600">{{ $trainer->last_name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <span style="font-weight: 600; font-size: 12px;">Email</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-weight: 600">{{ $trainer->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 h-100">
            <div class="row">
                <div class="col-12">
                    <div class="card z-depth-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <span style="font-size: 12px; font-weight: 600">Hours (Total)</span>
                                    <span class="badge p-2 rounded z-depth-0 unique-color">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 30px; font-weight: 600">{{ $hours }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card z-depth-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <span style="font-size: 12px; font-weight: 600">Hours (Months)</span>
                                    <span class="badge p-2 rounded z-depth-0 unique-color">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 30px; font-weight: 600">{{ $hours_month }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <span style="font-size: 12px; font-weight: 600">Attendances</span>
        </div>
    </div>
    <div class="row mt-3">
        @foreach($attendances as $data)
            <div class="col-2">
                <div class="card z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 30px; font-weight: 600">{{ date("d", strtotime($data->updated_at)) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 12px; font-weight: 600">{{ date("M", strtotime($data->updated_at)) }} {{ date("Y", strtotime($data->updated_at)) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 12px; font-weight: 600">{{ date("H:i", strtotime($data->updated_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection