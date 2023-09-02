@extends('trainer.layouts.app')
@section('content.mobile')
    {{-- <div class="row">
        <div class="col-12">
            @foreach($salary as $data)
                <span>{{ $data->salary }}</span>
            @endforeach
        </div>
    </div> --}}
    <div class="container">
        @foreach($salary as $data)
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span class="text-primary">{{ $data->month }}</span>
                                    <span style="font-size: 10px;">@currency($data->salary)</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 10px;">{{ $data->total_hours}} Hours on this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection