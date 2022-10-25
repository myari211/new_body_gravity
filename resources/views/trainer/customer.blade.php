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
        <div class="container">
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
        </div>
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
    </script>
@endsection