@extends('admin.layouts.app')
@section('content')
<div class="row mt-4">
    <div class="col-lg-12 d-flex justify-content-between">
        <span style="font-size:28px; opacity:0.7">Trainer</span>
        <button type="button" class="btn btn-md front-color text-white rounded text-capitalize" style="font-weight:600" data-toggle="modal" data-target="#createTrainer">
            <i class="fas fa-user mr-2"></i>Add New
        </button>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <span>Trainer</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span>30</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4" id="trainer">
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