@extends('customer.layouts.app')
@section('content')
<div class="d-block d-lg-none">
    <div class="row">
        <div class="col-12">
            <div class="card bg-primary z-depth-0 rounded-0">
                <div class="card-body z-depth-0">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            @if(Auth::user()->avatar != null)
                                <img src="{{ asset(url('/').'/avatar/'.Auth::user()->avatar) }}" style="width: 70px; height: 70px;" class="rounded-circle">
                            @else
                                <img src="{{ asset(url('/').'/image/body_black.jpeg') }}" style="width: 70px; height: 70px;" class="rounded-circle">
                            @endif
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 d-flex justify-content-center">
                            <span class="text-white">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 10px;" class="text-white">Active Package</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    @if($package_count < 1)
                                        <span class="text-white">{{ $package }}</span>
                                    @else
                                        <span class="text-white">{{ $package->package_left }} Session</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 10px;" class="text-white">Session This Month</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    @if($monthAttendances < 1)
                                        <span class="text-white">0</span>
                                    @else
                                        <span class="text-white">{{ $monthAttendances }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 12px;">Trainer Profile</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                @if($trainer->avatar != null)
                                    <img src="{{ asset(url('/').'/avatar/'.$trainer->avatar) }}" style="width: 70px; height: 70px;" class="rounded-circle border">
                                @else
                                    <img src="{{ asset(url('/').'/image/body_black.jpeg') }}" style="width: 70px; height: 70px;" class="rounded-circle border">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 10px;font-weight: 600">{{ $trainer->first_name." ".$trainer->last_name }}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px;">All Session With You</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        @if($monthAttendances < 1)
                                            <span>0</span>
                                        @else
                                            <span>{{ $monthAttendances }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px;">Session on this Month</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        @if($monthAttendances < 1)
                                            <span>0</span>
                                        @else
                                            <span>{{ $monthAttendances }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="button" class="btn btn-md rounded btn-primary btn-block z-depth-0 text-capitalize">
                                    Create Schedule
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4" style="margin-bottom: 100px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 12px;">Package</span>
                            </div>
                        </div>
                        @if($package_count < 1)
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 10px;">You don't have any active package</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <button type="button" class="btn btn-md rounded btn-primary btn-block z-depth-0 text-capitalize">
                                        Buy Package
                                    </button>
                                </div>
                            </div>
                        @else
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span style="font-size: 10px;">{{ $package_details->package }}</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <span style="font-size: 10px;">@currency($package_details->total_money - ($package_details->total_money * ($package_details->total_usage/$package_details->total_package)))</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <span style="font-size: 10px;">{{ $package_details->total_package - $package_details->total_usage }} Session Left</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="attendances_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class="card z-depth-0 border rounded">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <span style="font-size: 30px; font-weight: 600" id="date_attendances"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <span style="font-weight: 600; font-size: 20px;" id="year_attendances"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <span id="clock_attendances"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 d-flex justify-content-center">
                                            <span class="badge badge-success pt-1 pb-1 pr-2 pl-2 rounded-pill z-depth-0">
                                                Success
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="{{ asset('image/body_black.jpeg') }}" style="width:75px; height: 75px;" class="rounded-circle">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 d-flex justify-content-center">
                            <span>Trainer Example</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn front-color text-white rounded z-depth-0" data-dismiss="modal">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var userID = "{{ Auth::user()->id }}";

    $.ajax({
        type: 'GET',
        url: '/customer/api/dashboard/' + userID,
        dataType: 'json',
        success:function(data) {
            // $('#package').html(data.package.total_package - data.package.total_usage + " Session Left");
            $('#package_data').html(data.data);
            // $('#attendances')
            // .html(data.attendances);
        }
    });

    $('#attendances').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
    });

    $('#package_history').slick({
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
    });

    const openAttendaces = (elem) => {
        var id = $(elem).data('id');
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        $.ajax({
            type: 'GET',
            url: '/customer/api/attendances/' + id,
            dataType: 'json',
            success:function(data) {
                console.log(data.data);
                var newDate = new Date(data.data.updated_at)
                $('#date_attendances').html(newDate.getDate() + " " + monthNames[newDate.getMonth()]);
                $('#year_attendances').html(newDate.getFullYear());
                $('#clock_attendances').html(newDate.getHours() + " : " + newDate.getMinutes().toLocaleString('en-US'));
            }
        });

        $('#attendances_modal').modal('show');
    }
</script>
@endsection