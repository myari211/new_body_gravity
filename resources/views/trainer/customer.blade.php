@extends('trainer.layouts.app')
@section('content')
    <div class="d-none d-lg-block">
        <div class="row mt-4" id="customers">
            
        </div>

        <div class="modal fade" id="customerDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-md btn-primary rounded z-depth-0" id="visit" onclick="openLink(this);">
                                    Visit
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <div id="qrcode"></div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <span style="font-size:12px; font-weight: 600">Note: Scan using ur mobile devices and scan QR Codes for fill ur attendaces, or u can Log In to Body Gravity Website, and scan using web scanner inside.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content.mobile')
    <div class="d-block d-lg-none">
        <div class="row">
            <div class="col-12">
                <div class="card" style="min-height: 250px;">
                    <div class="card-body bg-primary d-flex align-items-center justify-content-center">
                        @foreach($customers as $data)
                        <div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    @if($data->avatar != null) 
                                        <img src="{{ asset('avatar/'.$data->avatar) }}" style="width: 100px; height: 100px;" class="rounded-circle border bg-white">
                                    @else
                                        <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 100px; height: 100px;" class="rounded-circle border bg-white">
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <span class="text-white" style="font-size: 20px;">{{ $data->first_name." ".$data->last_name }}</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 d-flex justify-content-center">
                                    <span class="badge badge-primary z-depth-0 text-capitalize">
                                        {{ $session }} Session
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 100px;">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Customer Profile</span>
                                    <button type="button" class="btn btn-sm btn-primary rounded text-capitalize border-0 p-2 z-depth-0" data-toggle="modal" data-target="#profile">
                                        Edit Profile
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 10px;">Phone</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>{{ $personal_count != 0 ? $personal_information->phone : "Data Belum Di isi" }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size:10px;">Gender</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>{{ $personal_count != 0 ? ($personal_information->gender == "M" ? "Male" : "Female") : "Data Belum Di isi" }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size: 10px;">Birth Date</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>{{ $personal_count != 0 ? \Carbon\Carbon::parse($personal_information->birth_date)->format("d M Y") : "Data Belum Di isi" }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size:10px;">Age</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span>{{ $personal_count != 0 ? \Carbon\Carbon::parse($personal_information->birth_date)->age : "Data Belum Di isi" }}</span>
                                        </div>
                                    </div>
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
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Details Information</span>
                                    <button type="button" class="btn btn-primary p-2 btn-sm rounded z-depth-0 text-capitalize" data-toggle="modal" data-target="#details">Edit Profile</button>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Riwayat Penyakit Scoliosis</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q1 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Level</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q2 == 0 ? "Tidak Ada" : ($details->q2 == 1 ? "Ringan" : ($details->q2 == 2 ? "Menengah" : ($details->q2 == 3 ? "Parah" : ($details->q2 === 4 ? "Perlu Perhatian Khusus" : "-"))))) : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Tulang belakang tampak melengkung</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q3 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Salah satu bahu lebih tinggi dari pada yang lain</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q4 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Salah satu pinggul lebih menonjol</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q5 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Condong Ke Satu sisi</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q6 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Tinggi Pinggang tidak rata</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q7 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Nyeri Punggung Bawah</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q8 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 10px;">Kaku Pada Punggung</span>
                                    <span style="font-size: 10px;">{{ $details_count > 0 ? ($details->q9 == "yes" ? "Ya" : "Tidak") : "-" }}</span>
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
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Active Package</span>
                                    @if($package == null)
                                        <button type="button" class="btn btn-md rounded btn-primary text-capitalize p-2 border-0 z-depth-0" data-toggle="modal" data-target="#package">Add Package</button>
                                    @endif
                                </div>
                            </div>
                            @if($package != null)
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-between align-items-center">
                                                    <span>{{ $package->package }}</span>
                                                    <span class="badge badge-primary text-capitalize p-2 rounded z-depth-0">{{ $package->status }}</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <span style="font-size: 10px">@currency($package->total_money)</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <span style="font-size:10px;">{{ $package->total_package - $package->total_usage }} Session Left</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px;">No Package</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Attendances</span>
                                    @if($package != null)
                                        <button type="button" class="btn btn-md rounded btn-primary z-depth-0 border-0 p-2 text-capitalize" onClick="generateQR('{{ $package->id }}', '{{ Auth::user()->id }}', '{{ $user_id }}');">
                                            Generate QR
                                        </button>
                                    @else
                                        <span style="font-size: 10px;">No Package</span>
                                    @endif
                                </div>
                            </div>
                            @if(count($attendances) > 0)
                                <div class="row mt-4">
                                    @foreach($attendances as $data)
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <span style="font-size: 20px;">{{ \Carbon\Carbon::parse($data->updated_at)->format('d') }}</span>
                                                        </div>      
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <span style="font-size: 10px">{{ \Carbon\Carbon::parse($data->updated_at)->format('M Y') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <span class="badge z-depth-0 @if($data->status == 0) badge-warning @else badge-primary @endif text-capitalize" style="font-size: 10px;">
                                                                @if($data->status == 0)
                                                                    Belum Terscan
                                                                @else
                                                                    Success
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <span style="font-size: 10px;">{{ $data->first_name.' '.$data->last_name }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:10px;">No data</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- modal details --}}
        <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-dialog-scrollable modal-fluid modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary" style="min-height: 150px; border-bottom-right-radius: 60px;">
                            <div class="row">
                                <div class="col-12">
                                    <span class="text-white" style="font-size: 20px;">Edit</span><br />
                                    <span class="text-white" style="font-size: 20px;">Details</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/trainer/create/details/{{ $user_id }}">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Riwayat Penyakit Scoliosis</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q1" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Level</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q2" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="0">Tidak Ada</option>
                                            <option style="font-size: 10px;" value="1">Ringan</option>
                                            <option value="2">Menengah</option>
                                            <option value="3">Parah</option>
                                            <option value="4">Perlu Perhatian Khusus</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Tulang belakang tampak melengkung</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q3" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Salah satu bahu lebih tinggi dari pada yang lain</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q4" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Salah satu pinggul lebih menonjol</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q5" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Condong Ke Satu sisi</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q6" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Tinggi Pinggang tidak rata</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q7" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Nyeri Punggung Bawah</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q8" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-between align-items-center">
                                        <span style="font-size: 10px;">Kaku Pada Punggung</span>
                                    </div>
                                    <div class='col-6'>
                                        <select name="q9" class="form-control" style="font-size: 10px;">
                                            <option style="font-size: 10px;" value="yes">Ya</option>
                                            <option style="font-size: 10px;" value="no">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary rounded z-depth-0 border-0 text-capitalize">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endmodal --}}


        {{-- modal create customers --}}
        <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-fluid modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary" style="min-height: 150px; border-bottom-right-radius: 60px;">
                            <div class="row">
                                <div class="col-12">
                                    <span class="text-white" style="font-size: 20px;">Edit</span><br />
                                    <span class="text-white" style="font-size: 20px;">Profile</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/trainer/create/profile/{{ $user_id }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="md-form md-outline m-0">
                                            <label for="first_name">Phone</label>
                                            <input type="number" class="form-control rounded" name="phone" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="md-form md-outline m-0">
                                            <label for="last_name">Birth Date</label>
                                            <input type="date" class="form-control rounded" name="birth_date">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="md-form md-outline m-0">
                                            <select name="gender" class="form-control rounded">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary rounded z-depth-0 border-0 text-capitalize">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endmodal --}}


        {{-- modal add package --}}
        <div class="modal fade" id="package" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-fluid modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary" style="min-height: 150px; border-bottom-right-radius: 60px;">
                            <div class="row">
                                <div class="col-12">
                                    <span class="text-white" style="font-size: 20px;">Add</span><br />
                                    <span class="text-white" style="font-size: 20px;">Package</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/trainer/create/package/{{ $user_id }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="md-form md-outline m-0">
                                            <select name="package" class="form-control">
                                                <option value="General">General</option>
                                                <option value="Trainer">Trainer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="md-form md-outline m-0">
                                            <label for="last_name">Total Session</label>
                                            <input type="number" class="form-control rounded" name="total_package">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="md-form md-outline m-0">
                                            <select name="status" class="form-control">
                                                <option value="trial">Trial</option>
                                                <option value="package">Package</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="md-form md-outline m-0">
                                            <label for="total_price">Total Price</label>
                                            <input type="number" class="form-control rounded" name="total_price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary rounded z-depth-0 border-0 text-capitalize">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- qr_code --}}
            <div class="modal fade" id="qr_code" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <!-- Change class .modal-sm to change the size of the modal -->
                    <div class="modal-dialog modal-fluid modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="min-height: 150px; border-bottom-right-radius: 60px;">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="text-white" style="font-size: 20px;">Generate</span><br />
                                        <span class="text-white" style="font-size: 20px;">Attendances</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <img id="qr">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px">Let the customers scan the QR Code</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-conten-center">
                                        <span id="token" style="font-size: 10px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        {{-- <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <span style="font-size: 20px;">My Customers</span>
                </div>
            </div>
            <div class="row mt-4">
                @foreach($customers as $data)
                    <div class="col-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 70px; height: 70px;" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-weight: 700" class="text-center">{{ $data->first_name." ".$data->last_name }}</span>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 12px;">24 Year</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a style="font-size: 10px; font-weight: 600" class="text-primary" data-toggle="modal" data-target="#basicExampleModal">View Profile</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary z-depth-0 rounded text-capitalize" style="font-size: 8px; font-weight: 600" data-toggle="modal" data-target="#package{{ $data->customer_id }}">
                                            View Package
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @foreach($customers as $data)
                <div class="modal fade" id="package{{ $data->customer_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 70px; height: 70px;" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 18px; font-weight: 600">{{ $data->first_name." ".$data->last_name }}</span>
                                    </div>
                                </div>
                                <div class="row mt-4 d-flex justify-content-center">
                                    <div class="col-8">
                                        <div class="card z-depth-0 border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 30px; font-weight: 700">{{ $data->total_package - $data->total_usage }}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 10px; font-weight: 600">Package Remaining</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-weight: 600">@currency($data->total_money - (($data->total_money/$data->total_package)*$data->total_usage))</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span class="badge badge-primary rounded z-depth-0 pt-2 pb-2 pr-3 pl-3">{{ $data->package }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-md rounded btn-primary z-depth-0 text-capitalize" style="font-size: 8px; font-weight: 700" data-dismiss="modal">Close</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>

    <script type="text/javascript">
        var userID = "{{ Auth::user()->id }}";

        $(document).ready(function(){
            initial();
        });

        const initial = () => {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/trainer/' + userID,
                success:function(data) {
                    $('#customers').html(data.customer);
                }
            });
        }

        const customerDetails = (elem) => {
            var packageID = $(elem).data("package-id");
            var customerID = $(elem).data('customers-id');

            $.ajax({
                type: 'POST',
                url: '/trainer/barcode/initial/' + packageID + "/" + customerID + "/" + userID,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success:function(data) {
                    status(data.icon, data.message);
                    $('#qrcode').html("");
                    qrCode(packageID, customerID, userID);
                }
            });

            setInterval(function() {
                $.ajax({
                    type: 'POST',
                    url: '/trainer/barcode/initial/' + packageID + "/" + customerID + "/" + userID,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success:function(data) {
                        status(data.icon, data.message);
                        $('#qrcode').html("");
                        qrCode(packageID, customerID, userID);
                    }
                });
            }, 600000);

            // setInterval(function() {
            //     $('#qrcode').html("");
            //     qrCode(packageID, customerID, userID);
            // }, 10000);



            $('#customerDetails').modal('show');
        }

        const qrCode = (packageID, customerID, userID) => {
            var token;

            var timer2 = "10:01";
            var interval = setInterval(function() {
                var timer = timer2.split(':');
                var minutes = parseInt(timer[0], 10);
                var seconds = parseInt(timer[1], 10);
                --seconds

                minutes = (seconds < 0) ? --minutes : minutes;
                if(minutes < 0) clearInterval(interval);
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                $('#countdown').html(minutes+':'+seconds + " Remaining");
                timer2 = minutes + ':' + seconds;
            }, 1000);

            $.ajax({
                type: 'GET',
                url: '/trainer/barcode/' + packageID + "/" + customerID + "/" + userID,
                success:function(data) {
                    token = data.data.token;
                    var url = "http://localhost:8000/trainer/attendance/" + token;
                    $('#visit').attr('data-url', url);

                    var qrcode = new QRCode(document.getElementById('qrcode'), {
                        text: url,
                        width: 250,
                        height: 250,
                        correctLevel: QRCode.CorrectLevel.H,
                    });
                }
            });
        }

        const openLink = (elem) => {
            var url = $(elem).data('url');
            
            window.open(url);
        }

        function generateQR(packageId, trainerId, userId) {
            var url = "{{ url('/') }}";

            $.ajax({
                type: 'POST',
                url: '/trainer/create/token/attendances/' + userId + '/' + trainerId + '/' + packageId,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success:function(data) {
                    $('#qr').attr('src', 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=' + url + '/customer/attendances/scan/' + data.token +'&chld=L|1&choe=UTF-8')
                    $('#token').html("Use this token on Customer Account on Attendances Page, Token: " + data.token);
                }
            });

            $('#qr_code').modal({
                'show': true,
            });
        }
    </script>
@endsection