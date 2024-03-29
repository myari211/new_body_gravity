@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{ asset('image/img/avatars/6.png') }}" class="w-100 border rounded-circle">
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-between">
                                            <h4>{{ $user->first_name." ".$user->last_name }}</h4>
                                            <button type="button" class="btn  bg-label-primary btn-md rounded text-capitalize z-depth-0 m-0" data-toggle="modal" data-target="#profile">
                                                Edit Profile
                                            </button>
                                            {{-- <span id="name"></span> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="text-muted">{{ $user->email }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-12 d-flex align-items-center">
                                                    <span>
                                                        <i class="fas fa-phone text-primary"></i>
                                                    </span>
                                                    <span class="ml-2 fw-bold">{{ $user->phone == NULL ? "-" : $user->phone }}</span>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-12">
                                                    <span>
                                                        <i class="fas fa-calendar text-primary"></i>
                                                    </span>
                                                    <span class="ml-2 fw-bold">{{ $user->birth_date == Null ? "--/--/----" : $user->birth_date }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex align-items-center">
                                                    <span style="font-size: 20px;">
                                                        <i class="fas fa-{{ $user->gender == "m" ? "mars text-primary" : "venus text-danger" }}"></i>
                                                    </span>
                                                    <span class="ml-2 fw-bold">{{ $user->gender == NULL ? "-" : ($user->gender == "f" ? "Female" : "Male") }}</span>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-lg-12 d-flex align-items-center">
                                                    <span>
                                                        <i class="fas fa-user text-primary"></i>
                                                    </span>
                                                    <span class="ml-2 fw-bold">33 y.o</span>
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
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-muted">Details Information</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Riwayat Penyakit Scoliosis</span>
                                </div>
                                <div class="col-6">
                                    <span>{{ $user->q1 == NULL ? "-" : $user->q1 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Level</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q2 == NULL ? "-" : $user->q2 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Tulang belakang tampak melengkung</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q3 == NULL ? "-" : $user->q3 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Salah satu bahu lebih tinggi dari pada yang lain</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q4 == NULL ? "-" : $user->q4 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Salah satu pinggul lebih menonjol</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q5 == NULL ? "-" : $user->q5 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Condong Ke Satu sisi</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q6 == NULL ? "-" : $user->q6 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Tinggi Pinggang tidak rata</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q7 == NULL ? "-" : $user->q7 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Nyeri Punggung Bawah</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q8 == NULL ? "-" : $user->q8 }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span>Kaku Pada Punggung</span>
                                </div>
                                <div class="col-lg-6">
                                    <span>{{ $user->q9 == NULL ? "-" : $user->q9 }}</span>
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
                            <div id="attendancesChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="badge bg-label-primary me-1 fw-bold z-depth-0 text-capitalize">Trainer</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span style="font-size: 30px; font-weight: 800">{{ $trainer == NULL ? "-" : $trainer->first_name." ".$trainer->last_name }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <small class="text-muted">{{ $session }} Session</small>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="before_package">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <span class="badge bg-label-primary me-1 text-capitalize fw-bold z-depth-0">{{ count($package) > 0 ? $package_left->package : "Belum Ada Paket" }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 30px; font-weight: 600">{{  count($package) > 0 ? $package_left->total_package - $package_left->total_usage : "Belum Ada Paket"}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <small class="text-muted">Session Left</small>
                                </div>
                            </div>
                            {{-- <div id="before_trainer">
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
                            <div id="after_trainer">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span id="name_trainer"></span>
                                    </div>
                                </div>  
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card" style="max-height: 500px; overflow:auto">
                        <div class="card-body" style="max-height: 500px; overflow:auto">
                            <table class="table">
                                <thead class="table-light">
                                  <tr>
                                    <th>Package</th>
                                    <th>Session</th>
                                    <th>Session Remaining</th>
                                    <th>Price</th>
                                    <th>Purchase Date</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach($package as $data)
                                        <tr>
                                            <td><strong>{{ $data->package }}</strong></td>
                                            <td>{{ $data->total_package }}</td>
                                            <td>{{ $data->total_package - $data->total_usage }}</td>
                                            <td>@currency($data->total_money)</td>
                                            <td>{{ date('d M Y', strtotime($data->created_at)) }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card" style="max-height: 320px; overflow:auto">
                        <div class="card-body" style="max-height: 320px; overflow:auto">
                            <table class="table">
                                <thead class="table-light">
                                  <tr>
                                    <th>Trainer</th>
                                    <th>Session</th>
                                    <th>Customers</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach($attendances as $data)
                                        <tr>
                                            <td><strong>{{ $data->first_name." ".$data->last_name }}</strong></td>
                                            <td>1</td>
                                            <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('image/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle">
                                                </li>
                                            </ul>
                                            </td>
                                            <td>{{ date("d M Y", strtotime($data->created_at)) }}</td>
                                            <td>{{ date("H:i", strtotime($data->created_at)) }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
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
            <div class="modal-header front-color">
                <span class="text-white" style="font-size:18px;">Pilih Trainer</span>
            </div>
            <div class="modal-body">
                <input type="hidden" class="d-none" id="package_id">
                <div class="row" id="trainer_pick">
                    
                </div>
            </div>
        </div>
    </div>
</div>

{{-- profile --}}
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row d-flex justify-content-end" style="margin-top:-80px;">
                    <div class="col-2">
                        <div class="card rounded-circle" style="width: 100px; height: 100px">
                            <div class="card-body bg-label-primary rounded-circle p-1">
                                <div class="row h-100">
                                    <div class="col-12 h-100">
                                        <div class="card rounded-circle h-100">
                                            <div class="card-body rounded-circle p-0">
                                                <img src="{{ asset('image/img/avatars/6.png') }}" class="w-100 border rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-end">
                        <h4>Edit Profile</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr />
                    </div>
                </div>
                <form method="post" action="/admin/customer/profile/{{ $user->user_id }}">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="md-form md-outline m-0">
                                <input type="text" class="form-control rounded" name="first_name" id="first_name" value="{{ $user->first_name }}">
                                <label for="first_name" class="active">First Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="md-form md-outline m-0">
                                <input type="text" class="form-control rounded" name="last_name" id="last_name" value="{{ $user->last_name }}">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="md-form md-outline m-0">
                            <input type="email" class="form-control rounded" name="email" id="email" value="{{ $user->email }}">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="md-form md-outline m-0">
                                <input type="number" class="form-control rounded" name="phone" id="phone" value="{{ $user->phone }}">
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="md-form md-outline m-0">
                                <input type="date" class="form-control rounded" name="birth_date" id="birth_date" value="{{ $user->birth_date }}">
                                <label for="birth_date">Birth Date</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="md-form md-outline m-0">
                                <select name="gender" class="form-control rounded" name="gender" id="gender">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-md rounded m-0 bg-label-primary text-capitalize z-depth-0 text-bold">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var userID = $('#user_id').val();
    var packageID = "";

    $(document).ready(function () {
        initial();
        historyPaymentSlick();
    });

    const historyPaymentSlick = () => {
        $('#history_payment').slick({
            centerMode: true,
            centerPadding: "30px",
            slidesToShow: 3,
            arrows: false,
        });
    }

    const initial = () => {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/admin/api/customer/details/' + userID,
            success:function(data) {
                $('#name').html(data.customer.first_name +" "+ data.customer.last_name);
                $('#package_id').val(data.package.id);
                if(data.package_total >= 1) {
                    $('#before_package').addClass('d-none');
                    $('#after_package').removeClass('d-none');
                    $('#span_package').html(data.package.package);
                    var money_session = data.package.total_money/data.package.total_package;
                    var money_used = money_session * data.package.total_usage;
                    var money_remaining = data.package.total_money - money_used;

                    var rupiah = new Intl.NumberFormat('en-US', {
                        style: 'currency',
                        currency: 'IDR',
                    });
                    $('#span_money_remaining').html(rupiah.format(money_remaining));

                    var package_session = data.package.total_package - data.package.total_usage;
                    $('#span_package_remaining').html(package_session + " Sesi Tersisa");
                    console.log([
                        money_remaining,
                        package_session,
                        data.package.trainer,
                    ]);
                    $('#trainer_pick').html(data.trainer);
                }
                else
                {
                    $('#after_package').addClass('d-none');
                    $('#before_package').removeClass('d-none');
                }

                console.log(data.trainer_show);

                if(data.trainer_count < 1) {
                    $('#after_trainer').addClass('d-none');
                    $('#before_trainer').removeClass('d-none');
                }
                else
                {
                    $('#before_trainer').addClass('d-none');
                    $('#after_trainer').removeClass('d-none');
                    $('#name_trainer').html(data.trainer_show.first_name+" "+data.trainer_show.last_name);
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
        });
    }

    const trainerPick = (elem) => {
        var trainerID = $(elem).data('trainer-id');
        var package_id = $('#package_id').val();

        let formData = {
            "trainer" : trainerID,
        }

        $.ajax({
            type: 'POST',
            dataType: 'json',
            encode:true,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: '/admin/api/customer/add/trainer/' + package_id,
            data: formData,
            success:function(data) {
                if(data.icon == "error") {
                    status(data.icon, data.message);
                }
                else
                {
                    status(data.icon, data.message);
                    $('#select_trainer').modal('hide');
                }
            }
        });

        $('#select_trainer').modal('hide');
        initial();
    }
</script>
@endsection