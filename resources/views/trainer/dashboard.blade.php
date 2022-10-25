@extends('trainer.layouts.app')
@section('content')
    <div class="d-none d-lg-block">
        <div class="row">
            <div class="col-lg-3">
                <div class="card z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <span style="font-weight: 600; font-size: 14px;" class="text-muted">Customers</span>
                                        <span class="badge front-color rounded z-depth-0 pt-1 pb-1 pr-2 pl-2" style="font-weight: 600; font-size: 12px;">
                                            Total
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="customers_count" style="font-size:50px; font-weight: 700;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card z-depth-0">
                    <div class='card-body z-depth-0'>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <span style="font-weight: 600; font-size: 14px;" class="text-muted">Sharing Income</span>
                                <span class="badge front-color rounded pt-1 pb-1 pr-2 pl-2 z-depth-0" style="font-weight: 600">
                                    {{ \Carbon\Carbon::now()->month }}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-weight: 600; font-size:50px;" id="sallary"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <span style="font-weight: 600; font-size: 14px;">Hours</span>
                                        <span class="badge front-color text-white z-depth-0 rounded pt-1 pb-1 pr-2 pl-2 rounded" style="font-weight: 600">
                                            Month
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="hours" style="font-weight: 600; font-size: 50px;">157</span>
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
@section('content.mobile')
    <div class="d-block d-lg-none">
        <div class="row">
            <div class="col-12">
                <div class="card z-depth-0">
                    <div class="card-body pl-0 pr-0 z-depth-0">
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="{{ asset('image/body_black.jpeg') }}" style="width: 70px; height: 70px;" class="rounded-circle border">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight: 600">Hi, {{ Auth::user()->first_name }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 12px; font-weight: 600">{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-6 ">
                    <div class="card z-depth-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-weight: 600; font-size: 12px;">Customers</span>
                                    <span class="badge badge-primary p-1 rounded z-depth-0">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 30px; font-weight: 600">{{ $total_customers }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card z-depth-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <span style="font-weight: 600; font-size: 12px;">Income</span>
                                    <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0">{{ date("M") }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 30px; font-weight: 600" id="incomeMobile"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <span style="font-size: 12px; font-weight: 600">Client</span>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($customers as $data)
                    <div class="col-6 mb-2">
                        <div class="card w-100 z-depth-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 50px; height: 50px;" class="border rounded-circle">
                                    </div>
                                    <div class="col-7 offset-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px; font-weight: 700">{{ $data->first_name }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 10px;">{{ $data->total_package - $data->total_usage }} Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <span style="font-size: 20px; font-weight: 600">Attendances</span>
                </div>
            </div>
            <div class="row mt-3" id="attendanceScroll" style="height: 170px">
                @foreach($attendances as $data)
                    <div class="col-4 mb-2">
                        <div class="card z-depth-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 30px; font-weight: 700" class='text-primary'>{{ date("d", strtotime($data->updated_at)) }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 12px; font-weight: 600">{{ date("M", strtotime($data->updated_at)) }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 12px; font-weight: 600">{{ date("Y", strtotime($data->updated_at)) }}</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 12px; font-weight: 600" class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0">{{ date("H:i", strtotime($data->updated_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var userID = "{{ Auth::user()->id }}";

        $(document).ready(function() {
            $('#mobileView').addClass('d-none');

            const nFormatter = (num, digits) => {
                const lookup = [
                    { value: 1, symbol: ""},
                    { value: 1e3, symbol: "K"},
                    { value: 1e6, symbol: "M"},
                    { value: 1e9, symbol: "G"},
                ];
                const rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
                var item = lookup.slice().reverse().find(function(item) {
                    return num >= item.value;
                });
                return item ? (num / item.value).toFixed(digits).replace(rx, "$1") + " " + item.symbol : "0";
            }

            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/trainer/' + userID,
                success:function(data) {
                    $('#name').html(data.user.first_name + " " + data.user.last_name);
                    $('#customers_count').append(data.customer_count);
                    $('#customer_list').html(data.customer);
                    $('#sallary').html(nFormatter(25000000, 1));
                    $('#incomeMobile').html(nFormatter(data.income, 1));
                }
            });
        });

    </script>
@endsection