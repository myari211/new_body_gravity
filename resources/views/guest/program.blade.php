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
        url({{ asset('image/our_program.jpg') }});
    }

    #product_1 { 
        width: 100%;
        min-height: 800px;
        background-size:cover;
        /* background-attachment: fixed; */
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/product_1.jpg') }});
    }
</style>
<div class="d-none d-lg-block">
    <div class="row">
        <div class="col-lg-12">
            <div id="header_banner">
                <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:62px; font-weight:600" class="animated fadeInDown">Our Program</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">     
        <div class="row mt-5">
            <div class="col-lg-12 wow fadeInLeft">
                <div class="card rounded-0">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <div class="card m-0 p-0 rounded-0 z-depth-0">
                                    <div class="card-body p-0">
                                        <img src="{{ asset('image/body_shaping.jpg') }}" class="w-100 h-100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-0">
                                <div class="card rounded-0 h-100 z-depth-0">
                                    <div class="card-body d-flex align-items-center justify-content-center"  style="background-color:#DAE4DE">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:34px; font-weight:700">Body Shaping</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:16px; font-weight:600">To help you achieve your dream body.</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md rounded-pill text-capitalize btn-white" style="font-weight:700; font-size:14px;" onclick="sendMessage(this)" data-message-id="Body Shaping">
                                                        Take Class
                                                        <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
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
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card rounded-0 wow fadeInRight">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <div class="card w-100 h-100 z-depth-0">
                                    <div class="card-body z-depth-0 d-flex justify-content-center align-items-center" style="background-color:#DAE4DE">
                                        <div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:30px; font-weight:600">Pain Management</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:16px; font-weight:600" class="text-center">
                                                        There are many pains which caused by having bad posture, such as scoliosis, back pain, pinched nerve, etc.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="collapse" id="detailsPain">
                                                <div class="row">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span style="font-size:16px; font-weight:600" class="text-center">
                                                            Or anyone of you are on injury recovery process.
                                                            We suggest you to take this program because Body Gravity will help you to offload the joints and focus on perfect structures of the body which ultimately leading
                                                            to a reduction of pain and then healed completely.
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md rounded-0 p-0 z-depth-0 text-capitalize" style="font-size:12px; font-weight:700" data-toggle="collapse" data-target="#detailsPain" aria-expanded="false" onclick="openRead(this)" data-id="PainManagement" data-message="Read More" id="showPainManagement">
                                                        Read More
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    {{-- <a data-toggle="collapse" href="#product2" aria-expanded="false" aria-controls="product2" class="d-flex align-items-center">
                                                        <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                                    </a> --}}
                                                    <button type="button" class="btn btn-md btn-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px" onclick="sendMessage(this);" data-message-id="Pain Management">
                                                        Take Class
                                                        <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-0">
                                <div class="card rounded-0 p-0 z-depth-0">
                                    <div class="card-body p-0">
                                        <img src="{{ asset('image/pain_management.jpg') }}" class="w-100">
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
                <div class="card rounded-0 wow fadeInLeft">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <div class="card rounded-0 z-depth-0">
                                    <div class="card-body p-0">
                                        <img src="{{ asset('image/product_3.jpg') }}" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-0">
                                <div class="card w-100 h-100 rounded-0 z-depth-0">
                                    <div class="card-body d-flex justify-content-center align-items-center" style="background-color:#DAE4DE">
                                        <div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:30px; font-weight:600">Kids</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:16px; font-weight:600" class="text-center">
                                                        Teach your children from a young age to have good movement habits and to keep them active,
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="collapse" id="kidsCollapse">
                                                <div class="row">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span class="text-center" style="font-size:16px; font-weight:600">
                                                            especially most of the children do less exercise and
                                                            spend more time of sitting while using tech nowadays.    
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md p-0 rounded z-depth-0 text-capitalize" style="font-size:12px; font-weight:700" data-toggle="collapse" data-target="#kidsCollapse" aria-expanded="false" onclick="openRead(this);" data-id="Kids" data-message="Read More" id="showKids">
                                                        Read More
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md bg-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Kids">
                                                        Take Class
                                                        <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
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
        <div class="row mt-4 mb-5">
            <div class="col-lg-12">
                <div class="card rounded-0 wow fadeInRight">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <div class="card w-100 h-100 rounded-0 z-depth-0">
                                    <div class="card-body d-flex justify-content-center align-items-center" style="background-color:#DAE4DE">
                                        <div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:30px; font-weight:600">Senior</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:16px; font-weight:600" class="text-center">
                                                        Senior program is perfectly fits for seniors who are hardly move their body.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="collapse" id="seniorCollapse">
                                                <div class="row">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span style="font-size:16px; font-weight:600" class="text-center">
                                                            By taking some trainings the body will have a better body connection and get stronger to move. You are never too late to begin the pilates practice due pilates will help
                                                            you maintain and/or gain your Balance, Strength, Flexibility, Focus, Breath and all areas you may notice have changed with age.
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn p-0 rounded-0 z-depth-0 text-capitalize" style="font-size:12px; font-weight:700" data-toggle="collapse" data-target="#seniorCollapse" aria-expanded="false" onclick="openRead(this)" data-id="Senior" data-message="Read More" id="showSenior">
                                                        Read More
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md bg-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Senior">
                                                        Take Class
                                                        <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-0">
                                <div class="card rounded-0 z-depth-0">
                                    <div class="card-body p-0">
                                        <img src="{{ asset('image/product_4.jpg') }}" class="w-100 h-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-size:30px; font-weight:600" class="wow fadeInDown">Teacher Training Program</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-weight:500" class="wow fadeInDown">Want to learn about Body Gravity ?</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="card rounded-0 wow fadeInDown">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class='col-lg-12'>
                                    <img src="{{ asset('image/basic.jpg') }}" class="w-100 h-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 z-depth-0">
                                        <div class="card-body" style="background-color:#DAE4DE">
                                            <div>
                                                <div class="row mt-4">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span style="font-size:30px; font-weight:600">Basic Program</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 d-flex jsutify-content-center">
                                                        <span style="font-size:16px; font-weight:600" class="text-center">A training program for those of you who work in the world of sports, where we will teach you about Body Gravity at the Basic Level.</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <button type="button" class="btn btn-md bg-white rounded text-capitalize rounded-pill" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Basic">
                                                            Take Class
                                                            <i class="fas fa-arrow-right animated fadeInLeft infinite ml-3"></i>
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
                <div class="col-lg-6">
                    <div class="card rounded-0 wow fadeInDown">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class='col-lg-12'>
                                    <img src="{{ asset('image/intermediate.jpg') }}" class="w-100">
                                </div>
                                <div class="col-lg-12">
                                    <div class="card rounded-0 z-depth-0">
                                        <div class="card-body" style="background-color:#DAE4DE">
                                            <div>
                                                <div class="row mt-4">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span style="font-size:30px; font-weight:600">Intermediate Program</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span style="font-size:16px; font-weight:600" class="text-center">A training program for those of you who work in sports field, we will teach you about Body Gravity at the Intermediate Level.</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <button type="button" class="btn btn-md rounded-pill bg-white text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Intermediate">
                                                            Take Class
                                                            <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
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
            <div class="row mt-4 mb-4">
                <div class="col-lg-6">
                    <div class="card rounded-0 wow fadeInDown">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class='col-lg-12'>
                                    <img src="{{ asset('image/advance.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 z-depth-0" style="background-color:#DAE4DE">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <div>
                                                <div class="row mt-4">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span style="font-size:30px; font-weight:600">Advance Program</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <span style="font-size:16px; font-weight:600" class="text-center">A training program for those of you who work in sports field, we will teach you about Body Gravity at the Advance Level.</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 d-flex justify-content-center">
                                                        <button type="button" class="btn btn-md bg-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Advance">
                                                            Take Class
                                                            <i class='fas fa-arrow-right ml-3 animated fadeInLeft infinite'></i>
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
    </div>
</div>

{{-- mobile --}}
<div class="d-block d-lg-none">
    <div class="row">
        <div class="col-12">
            <div id="header_banner">
                <div class="container h-100">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:30px; font-weight:600" class="animated fadeInDown">Our Program</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body p-0 grey-ice">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('image/body_shaping.jpg') }}" class="w-100">
                            </div>
                        </div>
                        <div class="pl-3 pr-3 pb-4">
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:25px; font-weight:700">Body Shaping</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:14px; font-weight:400">To help you achieve your dream body</span>
                                </div>
                            </div>
                            <div class="collapse" id="product_1_details">
                                <div class="row">
                                    <div class="col-12">
                                        <span>To help you achieve your dream body.</span>    
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-md rounded-pill btn-white text-capitalize m-0" onclick="sendMessage(this)" data-message-id="Body Shaping" style="font-weight:600">
                                        Take Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body p-0 grey-ice">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('image/pain_management.jpg') }}" class="w-100">
                            </div>
                        </div>
                        <div class="pl-3 pr-3 pb-4">
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:25px; font-weight:700">Pain Management</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:14px; font-weight:400" class="text-center">There are many pains which caused by having bad posture, such as scoliosis, back pain, pinched nerve, etc.</span>
                                </div>
                            </div>
                            <div class="collapse" id="product_2_details">
                                <div class="row mt-1">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:14px; font-weight:400" class="text-center">
                                            Or anyone of you are on injury recovery process. We suggest you to take this program because Body Gravity will help you to offload the joints and focus on perfect structures of the body which ultimately leading to a reduction of pain and then healed completely.
                                        </span>    
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 d-flex justify-content-center">
                                    <a data-toggle="collapse" href="#product_2_details" aria-expanded="false" aria-controls="product_1_details" class="text-dark" onclick="openRead(this)" data-id="PainManagement" data-message="Read More" id="showPainManagement">
                                        <small style="font-size:10px !important;">
                                            Read More
                                        </small>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-md rounded-pill btn-white text-capitalize m-0" style="font-weight:600" onclick="sendMessage(this)" data-message-id="Pain Management">
                                        Take Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body p-0 grey-ice">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('image/product_3.jpg') }}" class="w-100">
                            </div>
                        </div>
                        <div class="pl-3 pr-3 pb-4">
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:25px; font-weight:700">Kids</span>
                                </div>
                            </div>
                            <div class='row mt-4'>
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:14px; font-weight:400" class="text-center">Teach your children from a young age to have good movement habits and to keep them active,</span>
                                </div>
                            </div>
                            <div class="collapse" id="product_3_details">
                                <div class="row mt-1">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span class="text-center" style="font-size:14px; font-weight:400">especially most of the children do less exercise and spend more time of sitting while using tech nowadays.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 d-flex justify-content-center">
                                    <a data-toggle="collapse" href="#product_3_details" aria-expanded="false" aria-controls="product_3_details" class="text-dark">
                                        <small style="font-size:10px;">
                                            Read More
                                        </small>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-md rounded-pill btn-white text-capitalize m-0" style="font-weight:700" onclick="sendMessage(this);" data-message-id="Kids">
                                        Take Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-12">
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body p-0 grey-ice">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('image/product_4.jpg') }}" class="w-100">
                            </div>
                        </div>
                        <div class="pl-3 pr-3 pb-4">
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:25px; font-weight:700">Senior</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:14px; font-weight:400" class="text-center">Senior program is perfectly fits for seniors who are hardly move their body.</span>
                                </div>
                            </div>
                            <div class="collapse" id="product_4_details">
                                <div class="row mt-1">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:14px; font-weight:400" class="text-center">
                                            By taking some trainings the body will have a better body connection and get stronger to move. You are never too late to begin the pilates practice due pilates will help you maintain and/or gain your Balance, Strength, Flexibility, Focus, Breath and all areas you may notice have changed with age.
                                        </span>    
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 d-flex justify-content-center">
                                    <a data-toggle="collapse" href="#product_4_details" aria-expanded="false" aria-controls="product_4_details" class="text-dark">
                                        <small style="font-size:10px;">
                                            Read More
                                        </small>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-md rounded-pill btn-white text-capitalize m-0" style="font-weight:700" onclick="sendMessage(this);" data-message-id="Senior">
                                        Take Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-weight:30px; font-weight:600" class="wow fadeInDown">
                        Teacher Traning Program
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <small style="font-weight:500" class="wow fadeInDown">
                        Want to learn about Body Gravity ?
                    </small>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card rounded-0 wow fadeInDown">
                        <div class="card-body p-0 grey-ice">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('image/basic.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pr-3 pl-3 pb-4">
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:20px; font-weight:600">Basic Program</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:14px; font-weight:400" class="text-center">A training program for those of you who work in the world of sports, where we will teach you about Body Gravity at the Basic Level.</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-md btn-white rounded-pill m-0 text-capitalize" style="font-weight:700" onclick="sendMessage(this)" data-message-id="Basic">
                                            Take Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card rounded-0 wow fadeInDown">
                        <div class="card-body p-0 grey-ice">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('image/intermediate.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pr-3 pl-3 pb-4">
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:20px; font-weight:600">Intermediate Program</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:14px; font-weight:400" class="text-center">A training program for those of you who work in sports field, we will teach you about Body Gravity at the Intermediate Level.</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-md btn-white rounded-pill text-capitalize m-0" style="font-weight:700" onclick="sendMessage(this)" data-message-id="Intermediate">
                                            Take Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-12">
                    <div class="card rounded-0 wow fadeInDown">
                        <div class="card-body p-0 grey-ice">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('image/advance.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pr-3 pl-3 pb-4">
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size:20px; font-weight:600">Advance Program</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="font-size:14px; font-weight:400">A training program for those of you who work in sports field, we will teach you about Body Gravity at the Advance Level.</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-md btn-white rounded-pill m-0 text-capitalize" style="font-weight:700" onclick="sendMessage(this)" data-message-id="Advance">
                                            Take Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
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


<script type="text/javascript">
    function sendMessage(elem) {
        var generalID = $(elem).data('message-id');

        console.log(generalID);

        window.open("https://api.whatsapp.com/send?phone=628118772283&text=Hi, I saw Body Gravity's Website and i'm interested about "+ generalID +" Program. May i know more about this program ?");
    }

    function openRead(elem) {

        var generalID = $(elem).data("id");

        var message = $(elem).data("message");

        if(message === "Read More") {
            $(elem).data("message", "Less More").change();
            var value = "Less More";
        }
        else
        {
            $(elem).data("message", "Read More").change();
            var value = "Read More";
        }

        $('#show'+generalID).html(value);
    }
</script>


@endsection