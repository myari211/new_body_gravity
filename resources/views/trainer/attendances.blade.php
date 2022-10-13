@extends('trainer.layouts.app')
@section('content.mobile')
<div class="d-block d-lg-none">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <span>Attendances</span>
            </div>
        </div>
        @foreach($attendances as $data)
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-size: 30px; font-weight: 700" class="text-primary">
                                                        {{ date("d", strtotime($data->time)) }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-weight: 700">{{ date("M", strtotime($data->time)) }}</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-weight: 700">{{ date("Y", strtotime($data->time)) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card z-depth-0 border">
                                        <div class="card-body">
                                            <div class="row h-100">
                                                <div class="col-3 d-flex align-items-center">
                                                    <img src="{{ asset('image/andry.png') }}" style="width: 50px; height: 50px;" class="rounded-circle">
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size: 20px; font-weight: 700">{{ $data->first_name." ".$data->last_name }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span>{{ date("H:i", strtotime($data->time)) }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span class="badge badge-success pt-2 pb-2 pl-3 pr-3 z-depth-0 rounded-pill">
                                                                    <i class="fas fa-check mr-1"></i>
                                                                    {{ $data->status }}
                                                                </span>
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
            </div>
        @endforeach
    </div>
</div>
@endsection