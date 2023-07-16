@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-8">
        <div class="card h-100">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">Customer Growth</h5>
                    <div id="totalRevenueChart" class="px-2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 col-md-4 col-lg-4 order-3 order-md-2">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Customer</span>
                        <h3 class="card-title text-nowrap mb-2" id="total_customer"></h3>
                        <small class="text-success fw-semibold"><i class="bx bx-down-arrow-alt"></i> +14.82%</small>
                        <small class="text-muted">From last month</small>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('image/img/icons/unicons/cc-primary.png') }}" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Customers have package</span>
                        <h3 class="card-title mb-2">1</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +100%</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Customers have no package</span>
                        <h3 class="card-title text-nowrap mb-2">0</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-down-arrow-alt"></i> +14.82%</small>
                        <small class="text-muted">From last month</small>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Trainer</th>
                        <th>Session</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($customer as $data)
                        <tr>
                            <td>{{ $data->first_name.' '.$data->last_name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ ($data->phone == null ? "-" : $data->phone) }}</td>
                            <td>{{ $data->trainer_name }}</td>
                            <td>{{ ((int)$data->total_package - (int)$data->total_usage )}}</td>
                            <td>
                                <button type="button" class="btn btn-primary roudned text-capitalize m-0" onclick="location.href='/admin/customer/{{ $data->user_id }}'">Profile</button>
                            </td>
                        </tr>
                        @endforeach
                      {{-- <tr>
                        <td><strong>Customer Example</strong></td>
                        <td>customer@body-gravity.com</td>
                        <td>+62 812 7231 7198</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="{{ asset('image/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle">
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">8 Left</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row mt-4">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="md-form md-outline rounded input-with-pre-icon m-0">
                            <input type="text" class="form-control rounded bg-white border-0 h-100" id="first_name" placeholder="First Name">
                            <i class="fas fa-user input-prefix"></i>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="md-form md-outline rounded input-with-pre-icon m-0">
                            <input type="text" class="form-control rounded bg-white border-0 h-100" id="last_name" placeholder="Last Name">
                            <i class="fas fa-user input-prefix"></i>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="md-form md-outline rounded input-with-pre-icon m-0">
                            <input type="text" class="form-control rounded bg-white border-0 h-100" id="email" placeholder="Email">
                            <i class="fas fa-envelope input-prefix"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <button type="button" class="btn btn-md front-color text-white rounded text-capitalize m-0 z-depth-0" style="font-weight:600" data-toggle="modal" data-target="#createCustomer">
                        <i class="fas fa-user mr-2"></i>Add New
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-4">
        <div class="card z-depth-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <span style="font-weight:600; font-size:16px;">Customer</span>
                        <span class="badge front-color text-white pt-2 pb-2 pr-2 pl-2 rounded z-depth-0">
                            Total
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span id="total_customer" style="font-size: 50px; font-weight: 600"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card z-depth-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <span style="font-weight: 600; font-size: 16px;">Customer</span>
                        <span class="badge front-color text-white pt-2 pb-2 pr-2 pl-2 rounded z-depth-0">
                            Active
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size: 50px; font-weight: 600">3</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card z-depth-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <span style="font-weight: 600; font-size: 16px;">Customer</span>
                        <span class="badge front-color text-white pt-2 pb-2 pr-2 pl-2 rounded z-depth-0">
                            In Active
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size: 50px; font-weight: 600">4</span>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4" id="customer_list">
</div>

<div class="modal fade" id="createCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@endsection


@section('content.mobile')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class='md-form md-outline input-with-pre-icon mr-0'>
                    <input type="text" class="form-control rounded z-depth-0" id="first_name" placeholder="First Name">
                    <i class="fas fa-user input-prefix"></i>
                </div>
            </div>
            <div class="col-5">
                <div class="md-form md-outline input-with-pre-icon mr-0">
                    <input type="text" class="form-control rounded z-depth-0" id="last_name" placeholder="Last Name">
                    <i class='fas fa-user input-prefix'></i>
                </div>
            </div>
            <div class="col-1 d-flex align-items-center">
                <button type="button" class="btn btn-sm btn-primary rounded z-depth-0 text-white mt-0 mb-0 ml-0 mr-2" data-toggle="modal" data-target="#createCustomerMobile">
                    <i class="fas fa-user"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createCustomerMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div> --}}
@endsection


@section('javascript')
{{-- ajax --}}
<script type="text/javascript">
    $(document).ready(function() {
        initial();
    });

    
        // toast: true,
        // position: 'top-right',
        // iconColor: 'white',
        // customClass: {
        //     popup: 'colored-toast'
        // },
        // showConfirmButton: false,
        // timer: 1500,
        // timeProgressBar: true


    const initial = () => {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/admin/api/customer',
            success:function(data) {
                $('#total_customer').html(data.total_customer);
                $('#customer_list').html(data.customer);
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
            url: '/admin/api/customer/create',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: formData,
            success:function(data) {
                $('#createCustomer').modal('hide');
                status(data.icon, data.message);
                initial();
            }
        })
    }

</script>
@endsection