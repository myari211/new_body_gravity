@extends('customer.layouts.app')
@section('content')
<div class="d-block d-lg-none">
    <div class="row">
        <div class="col-12">
            <div class="card front-color rounded-0 z-depth-0" style="height: 150px;">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: -80px; !important">
            <div class="col-12">
                <div class="card z-depth-0 border rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="{{ asset('image/body_black.jpeg') }}" style="width: 80px; height: 80px;" class="border rounded-circle">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 20px; font-weight: 600">Hi!, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight: 500">{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="card z-depth-0 border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 18px; font-weight: 600">Package</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 12px;">Find you active package here!</span>
                            </div>
                        </div>
                        <div class="row mt-3" id="package_data">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="card z-depth-0 border">
                    <div class="card-body">
                        <div class="row">
                            <div class='col-12'>
                                <span style="font-size: 18px; font-weight: 600">Attendances</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 12px;">Your Attendances List!</span>
                            </div>
                        </div>
                        <div class="row mt-3" id="attendances">
                            @foreach($attendances as $data)
                                <div class="col-4">
                                    <a class="w-100" href="javascript:void();" onclick="openAttendaces(this);" data-id="{{ $data->id }}">
                                        <div class="card z-depth-0 border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 20px; font-weight: 600">{{ date("d", strtotime($data->updated_at)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span>{{ date("M", strtotime($data->updated_at)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="card z-depth-0 border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <span style="font-size: 20px; font-weight: 600">Trainer</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span style="font-size: 12px;">Your Trainer Profile!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex justify-content-end align-items-center">
                                <button type="button" class="btn btn-outline-primary rounded z-depth-0 btn-sm text-capitalize">
                                    Details
                                </button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3">
                                <img src="{{ asset('image/body_black.jpeg') }}" style="width: 50px; height: 50px;" class="border rounded-circle">
                            </div>
                            <div class="col-9 d-flex align-items-center">
                                <span style="font-weight: 600">Trainer Example</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="card rounded z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 20px; font-weight: 600">History</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 12px;">Your Package History Here!</span>
                            </div>
                        </div>
                        <div class="row mt-3" id="package_history" style="margin-bottom: 70px;">
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card z-depth-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size:20px; font-weight: 600">General</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px;">0 Session Left</span>
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