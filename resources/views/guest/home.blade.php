@extends('guest.layouts.app')
@section('content')
<style type="text/css">
    #header_banner { 
        width: 100%;
        min-height: 800px;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/why.png') }});
    }

    #program_1 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(242,3,58, 0.6) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/strong.png') }});
    }

    #program_2 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(30,155,213, 0.6) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/pain.png') }});
    }

    #program_3 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(252,106,160, 0.7) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/agile.jpg') }});
    }

    #program_4 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg,rgba(4,170,109, 0.7) 100%, rgba(0,0,0, 0) 100%),
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
<div class="row">
    <div class="col-lg-12">
        <div id="header_banner" class="parallax">
            <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                <div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:600; font-size:80px;" class="animated fadeInDown">Body Gravity</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:600; font-size:24px;" class="animated fadeInDown delay-1s">Stabilize your body for a productive life</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn blue-gradient btn-lg rounded-pill text-capitalize d-flex align-items-center animated fadeInDown delay-2s">
                                Take A Look <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite delay-3s"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    {{-- <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-white" style="font-size:40px; font-weight:500">Body Gravity</span>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12 d-flex justify-content-center">
            <i class="text-white">- Body Gravity is a new way of seeing & training the body -</i>
        </div>
    </div> --}}
    <div>
        <div class="row" style="margin-top: 100px;">
            <div class="col-lg-12 d-flex justify-content-center">
                <span class="text-white wow fadeIn" style="font-size:30px; font-weight:500">Why Choose Body Gravity</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 z-depth-0 border-0 wow fadeInUp">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="program_1">
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:40px; font-weight:600">Stronger</span>
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
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 z-depth-0 border-0 wow fadeInLeft">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="program_2">
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:40px; font-weight:600">No Pain</span>
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
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 z-depth-0 border-0 wow fadeInRight">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="program_3">
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:40px; font-weight:600">Agile</span>
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
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 z-depth-0 border-0 wow fadeInDown">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="program_4">
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:40px; font-weight:600">Posture</span>
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
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <button type="button" class="btn btn-md rounded-pill btn-outline-white text-capitalize wow fadeIn" id="button_hover">
                    Look More
                </button>
            </div>
        </div>
    </div>
</div>
<div style="background-color:#fff" class="p-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <span style="font-size:30px; font-weight:500" class="wow fadeIn">
                    Our Program
                </span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card rounded-0 wow fadeInUp">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('image/product_1.jpg') }}" class="w-100 h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <small>10 Times Visit</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <small>Only From</small><span style="font-weight:600"> 6 Mil</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:20px; font-weight:500">Body Shaping</span>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-black btn-sm mb-0 mt-0 mr-4 ml-0 z-depth-0">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card rounded-0 wow fadeInUp">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('image/product_2.jpg') }}" class="w-100 h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <small>10 Times Visit</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <small>Only From</small><span style="font-weight:600"> 6 Mil</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:20px; font-weight:500">Rehabilitation</span>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-black btn-sm mb-0 mt-0 mr-4 ml-0 z-depth-0">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="card rounded-0 wow fadeInUp">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('image/product_3.jpg') }}" class="w-100 h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <small>10 Times Visit</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <small>Only From</small><span style="font-weight:600"> 5 Mil</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:20px; font-weight:500">Children</span>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-black btn-sm mb-0 mt-0 mr-4 ml-0 z-depth-0">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card rounded-0 wow fadeInUp">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('image/product_4.jpg') }}" class="w-100 h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <small>10 Times Visit</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <small>Only From</small><span style="font-weight:600"> 7 Mil</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:20px; font-weight:500">Senior</span>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-black btn-sm mb-0 mt-0 mr-4 ml-0 z-depth-0">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <button type="button" class="btn btn-md btn-outline-black rounded-pill text-capitalize z-depth-0 button_hover_black wow fadeIn">
                    Look More
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class='row mt-5'>
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:30px; font-weight:600" class="text-white wow fadeIn">
                Meet Our Teams
            </span>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-4">
            <div class="card z-depth-0 rounded-0 wow fadeIn">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <img src="{{ asset("image/andry.png") }}" style="width:200px; height:200px;" class="rounded-circle">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:600; font-size:30px;">Andry</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:500">Founder</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="text-center">
                                Hi, I'm the founder of Body Gravity. Body Gravity is founded because i see out there that there is no
                                exercise to restore body posture, especially in scoliosis...
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a>
                                <small>Read More</small>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a class="pl-2 pr-2">
                                <i class="fab fa-instagram" style="font-size:30px;"></i>
                            </a>
                            <a class="pr-2 pl-2">
                                <i class="fab fa-youtube" style="font-size:30px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card z-depth-0 rounded-0 h-100 wow fadeIn">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <img src="{{ asset("image/Karen.png") }}" style="width:200px; height:200px;" class="rounded-circle">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:600; font-size:30px;">Karen</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:500">Coach</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="text-center">
                                Hi, since childhood i have had scoliosis with 60 Degree inclination. I have tried many ways to cure it, but none
                                of the result are satisfactory...
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a>
                                <small>Read More</small>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a class="pl-2 pr-2">
                                <i class="fab fa-instagram" style="font-size:30px;"></i>
                            </a>
                            <a class="pr-2 pl-2">
                                <i class="fab fa-youtube" style="font-size:30px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card z-depth-0 rounded-0 h-100 wow fadeIn">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <img src="{{ asset("image/imelda.png") }}" style="width:200px; height:200px;" class="rounded-circle">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:600; font-size:30px;">Imelda</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-weight:500">Coach</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="text-center">
                                I used to have back pain. But everything changed after meeting Body Gravity, the pain in my shoulder was getting better,
                                even no it's 100% gone...
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a>
                                <small>Read More</small>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <a class="pl-2 pr-2">
                                <i class="fab fa-instagram" style="font-size:30px;"></i>
                            </a>
                            <a class="pr-2 pl-2">
                                <i class="fab fa-youtube" style="font-size:30px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection