@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <span>Most Performance Trainer</span><br />
                        <small class="text-muted">Most performance Trainer on this month</small>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2 d-flex align-items-center">
                        <img src="{{ asset('image/body_black.jpeg') }}" style="width: 80px; height: 80px;" class="rounded-circle border">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <h4>Trainer Example</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <small class="text-muted">400 Hours on this month</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection