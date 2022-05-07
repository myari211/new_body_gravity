@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-3">
            <img src="{{ asset('image/body_gravity_black.png') }}" class="w-100 border rounded-circle">
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <span id="name"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:20px; font-weight:600">Package Information</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="before_package">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span style="opacity:0.8; font-weight:600" class="text-center">Customer ini belum mempunyai paket</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-md rounded front-color text-white text-capitalize" data-toggle="modal" data-target="#add_package">
                                            Tambahkan Paket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="user_id" value="{{ $id }}">
                            <div id="after_package">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="span_package" class="text-capitalize" style="font-size:18px; opacity:0.8; font-weight:600"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="span_package_remaining" style="font-weight:600; font-size:14px;"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="span_money_remaining" style="font-weight:600"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="before_trainer">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span style="opacity:0.8; font-weight:600" class="text-center">Customer ini belum mempunyai trainer</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-md rounded front-color text-white text-capitalize" data-toggle="modal" data-target="#select_trainer">
                                            Tambahkan Trainer
                                        </button>
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

<div class="modal fade" id="add_package" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size:20px; font-weight:600; opacity:0.8">Tambah Paket</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <small style="opacity:0.8; font-weight:600;">Paket</small>
                            <select id="package" class="form-control">
                                <option value="trainer">Trainer</option>
                                <option value="general">General</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <small style="opacity:0.8; font-weight:600">Total Session</small>
                            <input type="number" class="form-control" id="total_package">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <small style="opacity:0.8; font-weight:600">Total Price</small>
                            <input type="number" class="form-control" id="total_money">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <small style="opacity:0.8; font-weight:600">Status</small>
                            <select id="status" class="form-control">
                                <option value="trial">Trial</option>
                                <option vlaue="package">Paket</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-md rounded front-color text-white text-capitalize m-0" onclick="addPackage();">
                            Tambah Paket
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="select_trainer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ asset('image/body_gravity_black.png') }}" class="w-100 rounded-circle">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span style="font-size:18px; font-weight:600; opacity:0.8">Imelda Permatasari</span>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <button type="button" class="m-0 btn btn-md rounded front-color text-white text-capitalize">
                                                    Pilih
                                                </button>
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

<script type="text/javascript">
    var userID = $('#user_id').val();

    $(document).ready(function () {
        initial();
    });

    const initial = () => {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/admin/api/customer/details/' + userID,
            success:function(data) {
                $('#name').html(data.customer.first_name +" "+ data.customer.last_name);
                console.log(data);
                if(data.package_total >= 1) {
                    $('#before_package').addClass('d-none');
                    $('#after_package').removeClass('d-none');
                    $('#span_package').append(data.package.package);
                    var money_session = data.package.total_money/data.package.total_package;
                    var money_used = money_session * data.package.total_usage;
                    var money_remaining = data.package.total_money - money_used;

                    var rupiah = new Intl.NumberFormat('en-US', {
                        style: 'currency',
                        currency: 'IDR',
                    });

                    $('#span_money_remaining').append(rupiah.format(money_remaining));

                    var package_session = data.package.total_package - data.package.total_usage;
                    $('#span_package_remaining').append(package_session + " Sesi Tersisa");
                    console.log([
                        money_remaining,
                        package_session,
                        data.package.package,
                    ]);
                }
                else
                {
                    $('#after_package').addClass('d-none');
                    $('#before_package').removeClass('d-none');
                    
                }
            }
        });
    }

    const addPackage = () => {
        let formData = {
            'package' : $('#package option:selected').val(),
            'total_session': $('#total_package').val(),
            'total_price': $('#total_money').val(),
            'status': $('#status option:selected').val(),
        }

        $.ajax({
            type: 'POST',
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            encode: true,
            url: '/admin/api/customer/add/package/' + userID,
            data: formData,
            success:function(data) {
                if(data.icon == "error") {
                    status(data.icon, data.message);
                }
                else
                {
                    status(data.icon, data.message);
                    $('#add_package').modal('hide');
                }

                initial();
            }
        })

    }
</script>
@endsection