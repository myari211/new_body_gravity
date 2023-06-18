@extends('admin.layouts.app')
@section('content')
<div class="pl-3 pr-3">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <span style="font-size:12px; font-weight: 600">Trainer</span>
                            <button type="button" class="btn btn-md z-depth-0 border text-capitalize m-0" style="font-weight:600" data-toggle="modal" data-target="#createTrainer">
                                Add Trainer
                            </button>
                        </div>
                    </div>
                    <div class="row"  id="trainer">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-between">
        <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">100k total session</small>
                    </div>
                    <div class="dropdown">
                        <button
                            class="btn p-0"
                            type="button"
                            id="orederStatistics"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">400 Hours</h2>
                            <span>Total Session</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="bx bx-mobile-alt"></i>
                                </span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Trainer Example</h6>
                                    <small class="text-muted"></small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">400</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xl-6 order-0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <span>Total Trainer</span><br />
                                <small class="text-muted">All Trainer Account</small><br />
                            </div>
                            <h3 class="card-title mb-2">{{ $trainer_count }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <span>Total Hours</span><br />
                                <small class="text-muted">Hours of all trainer this month</small>
                            </div>
                            <h3 class="card-title mb-2">400</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <span>Session Average</span><br />
                                <small class="text-muted">Average all trainer on this month</small>
                            </div>
                            <span class="fw-semibold d-block mb-1"></span>
                            <h3 class="card-title mb-2">400 Hours/Month</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="dropdown">
                                    <button
                                    class="btn p-0"
                                    type="button"
                                    id="cardOpt3"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Admin</span>
                            <h3 class="card-title mb-2">1</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="createTrainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="md-form md-outline input-with-pre-icon m-0">
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" style="height:50px;">
                            <i class="fas fa-user input-prefix"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="md-form md-outline m-0">
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" style="height: 50px;">
                        </div>    
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <div class="md-form md-outline input-with-pre-icon m-0">
                            <input type="email" class="form-control" id="email" placeholder="Email" style="height:50px;">
                            <i class="fas fa-envelope input-prefix"></i>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <div class="md-form md-outline input-with-pre-icon m-0">
                            <input type="password" class="form-control" id="password" placeholder="Password" style="height:50px;">
                            <i class="fas fa-lock input-prefix"></i>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <div class="md-form md-outline input-with-pre-icon m-0">
                            <input type="password" class="form-control" id="retype_password" placeholder="Retype Password" style="height:50px;">
                            <i class="fas fa-lock input-prefix"></i>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-md rounded text-white front-color text-capitalize" style="font-weight:600" onclick="createCustomer();">
                            Create
                            <i class="fas fa-plus ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        initial();
    })

    const initial = () => {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/admin/api/trainer',
            success:function(data) {
                $("#trainer").html(data.trainer);
            }
        });
    }

    const createCustomer = () => {
        let formData = {
            "first_name": $('#first_name').val(),
            "last_name": $('#last_name').val(),
            "email": $('#email').val(),
            "password": $('#password').val(),
            "password_confirmation": $("#retype_password").val(),
        }

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/admin/api/trainer/create',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: formData,
            success:function(data) {
                $('#createTrainer').modal('hide');
                status(data.icon, data.message);
                // initial();
            }
        });
    }
</script>
@endsection