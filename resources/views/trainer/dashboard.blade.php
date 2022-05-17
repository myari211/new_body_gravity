@extends('trainer.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-center">
                                <img src="{{ asset('image/body_gravity_black.png') }}" class="border rounded-circle" style="width:150px; height:150px;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span id="name" style="font-size:20px; font-weight:600; opacity: 0.7;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <small style="font-weight: 600">Customers</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="customers_count" style="font-size:30px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <i class="fas fa-user" style="font-size:80px; opacity: 0.3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class='card-body'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <small style="font-weight: 600">Gain</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="gain" style="font-weight: 600; font-size:15px;">25.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <i class="fas fa-dollar-sign" style="font-size:80px; opacity: 0.3"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="gain" style="font-size: 30px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <small style="font-weight: 600">Hours</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="hours" style="font-weight: 600; font-size: 30px;">157</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <i class="fas fa-clock" style="font-size:80px; opacity: 0.3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <span style="font-size:20px; font-weight: 600">My Client</span>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-lg rounded-0 btn-outline-black p-2 z-depth-0" id="prev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button type="button" class="btn btn-lg rounded-0 btn-outline-black p-2 z-depth-0" id="next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="row mt-4 d-flex align-items-center" id="customer_list" style="height: 150px;">
                    
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var userID = "{{ Auth::user()->id }}";
        $(document).ready(function() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/trainer/' + userID,
                success:function(data) {
                    $('#name').html(data.user.first_name + " " + data.user.last_name);
                    $('#customers_count').append(data.customer_count);
                    $('#customer_list').html(data.customer);

                    if(data.customer_count > 3) {
                        $('#customer_list').slick({
                            lazyload: 'ondemand',
                            infinite:true,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            nextArrow: $('#next'),
                            prevArrow: $('#prev'),
                        });

                        $('#next').removeClass('d-none');
                        $("#prev").removeClass('d-none');
                    }
                    else
                    {
                        $('#next').addClass('d-none');
                        $('#prev').addClass('d-none');
                    }
                }
            });


        });
    </script>
@endsection