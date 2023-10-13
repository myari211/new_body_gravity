@extends('guest.layouts.app')
@section('content')
<style type="text/css">

    html, body{
        overflow-y:hidden !important;
    }

    #header_banner { 
        width: 100%;
        min-height: 800px;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/home2.jpg') }});
    }

    #header_banner_mobile { 
        width: 100%;
        min-height: 800px;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/home2.jpg') }});
    }

    #program_1 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/strong.png') }});
    }

    #program_2 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/pain.png') }});
    }

    #program_3 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/agile.jpg') }});
    }

    #program_4 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg,rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/posture.jpg') }});
    }

    #button_hover:hover{
        background-color:white !important;
        color:black !important;
    }

    .button_hover_black:hover{
        background-color:black !important;
        color: white !important;
    }
</style>
<div class="d-none d-lg-block">
    <div class="row">
        <div class="col-lg-12">
            <div id="header_banner" class="parallax">
                <div class="w-100 d-flex justify-content-center align-items-center" style="height: 100vh !important;">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-weight:700; font-size:62px;" class="animated fadeInDown">Body Gravity</span>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-weight:400; font-size:21px;" class="animated fadeInDown delay-1s">It's time for recovery</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="button" class="btn dusty-grass-gradient text-white btn-lg rounded-pill text-capitalize d-flex align-items-center animated fadeInDown delay-2s" style="font-weight:600" onclick="location.href='{{ route('about') }}';">
                                    Take A Look <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite delay-3s"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-block d-lg-none">
    <div class="row">
        <div class="col-12">
            <div id="header_banner_mobile">
                <div class="w-100 d-flex justify-content-center align-items-center" style="height: 100vh">
                    <div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size:40px; font-weight:600" class="wow animated fadeInDown">Body Gravity</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:500" class="wow animated fadeInDown delay-1s">It's time for recovery</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md dusty-grass-gradient text-white rounded-pill wow animated fadeInDown delay-2s text-capitalize" onclick="location.href='{{ route('about') }}';">
                                    Take A Look
                                    <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection