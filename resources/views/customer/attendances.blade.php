@extends('customer.layouts.app')
@section('content')
    <div class="d-block d-lg-none">
        <div class="container">
            <div class="row mt-4 mb-4">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <span style="font-size: 12px; font-weight: 600">My Attendances</span>
                    <button type="button" class="btn btn-primary rounded z-depth-0 text-capitalize btn-md p-2 border-0" data-toggle="modal" data-target="#token">Token</button>
                </div>
            </div>
            @foreach($attendances as $data)
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 10px;">{{ date('d M Y', strtotime($data->time)) }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 10px; font-weight: 600">{{ $data->first_name." ".$data->last_name }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 10px;">1 Session</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end align-items-center">
                                        <span style="font-size: 10px; font-weight: 600" class="badge badge-success p-2 rounded z-depth-0 text-capitalize">{{ $data->status == 1 ? "Success" : "Not Scan" }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="modal fade" id="token" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="min-height: 150px; border-bottom-right-radius: 60px;">
                        <div class="row">
                            <div class="col-12">
                                <span class="text-white" style="font-size: 20px;">Attendances</span><br />
                                <span class="text-white" style="font-size: 20px;">Token</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ url('/') }}/customer/attendances/fill/token/{{ Auth::user()->id }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="md-form md-outline m-0">
                                        <label for="token">Token</label>
                                        <input type="number" class="form-control rounded" name="token" id="token">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-md rounded btn-primary z-depth-0 text-capitalize border-0 btn-block">
                                        Fill Attendances
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection