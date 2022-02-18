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
        min-height: 700px;
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
                <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-weight:700; font-size:62px;" class="animated fadeInDown">Body Gravity</span>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-weight:400; font-size:21px;" class="animated fadeInDown delay-1s">Stabilize your body for a productive life</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="button" class="btn blue-gradient btn-lg rounded-pill text-capitalize d-flex align-items-center animated fadeInDown delay-2s" style="font-weight:600" onclick="location.href='/about';">
                                    Take A Look <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite delay-3s"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div>
            <div class="row" style="margin-top: 100px;">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span class="wow fadeIn" style="font-size:30px; font-weight:500">Why Choose Body Gravity</span>
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
                    <button type="button" class="btn btn-md rounded-pill btn-outline-black text-capitalize wow fadeIn z-depth-0 button_hover_black">
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
                                <div class="col-lg-12">
                                    <img src="{{ asset('image/product_1.jpg') }}" class="w-100 h-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 z-depth-0 indigo lighten-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:30px; font-weight:600">Body Shaping</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:15px; font-weight:500" class="text-center">{{ Str::limit("To Help you achieve your dream body", 70) }}</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3 pr-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <a>
                                                        <small>
                                                            See Details
                                                        </small>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row mt-4 mb-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn bg-white btn-md mb-0 mt-0 ml-0 rounded z-depth-0 text-capitalize" style="font-weight:500">Book Now</button>
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
                    <div class="card rounded-0 wow fadeInUp">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img src="{{ asset('image/product_2.jpg') }}" class="w-100 h-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 z-depth-0 red lighten-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:30px; font-weight:600">Rehabilitation</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:15px; font-weight:500" class="text-center">{{ Str::limit("There are many pains which caused by having bad posture, such as scoliosis, back pain, pinched nerve, etc. Or anyone of you are on injury recovery process. We suggest you to take this program because Body Gravity will help you to offload the joints and focus on perfect structures of the body which ultimately leading to a reduction of pain and then healed completely.", 45) }}</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3 pr-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <a>
                                                        <small>
                                                            See Details
                                                        </small>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row mt-4 mb-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn bg-white btn-md mb-0 mt-0 ml-0 rounded z-depth-0 text-capitalize" style="font-weight:500">Book Now</button>
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
                    <div class="card rounded-0 wow fadeInUp">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 z-depth-0">
                                        <div class="card-body p-0">
                                            <img src="{{ asset('image/product_3.jpg') }}" class="w-100 h-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body blue lighten-3">
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:30px; font-weight:600">Kids</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:15px; font-weight:500">{{ Str::limit("Teach your children from a young age to have good movement habits and to keep them active, especially most of the children do less exercise and spend more time of sitting while using tech nowadays.", 45)}}</small>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <a>
                                                        <small>See Details</small>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row mt-4 mb-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn bg-white rounded btn-md z-depth-0 text-capitalize" style="font-weight:500">Book Now</button>
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
                    <div class="card rounded-0 wow fadeInUp">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body p-0">        
                                            <img src="{{ asset('image/product_4.jpg') }}" class="w-100 h-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body lime lighten-3">
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:30px; font-weight:600">Senior</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <small style="font-size:15px; font-weight:500">
                                                        {{Str::limit("Senior program is perfectly fits for seniors who are hardly moved to the body. By taking some trainings the body will have a better body will have a better body connection and get stronger to move. You are never too late to begin the pillates practice due pillates will help you maintain and/or gain your balance, Strength, Flexibility, Focus, Breath and all areas you may notice have changed with age.", 45) }}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <a>
                                                        <small>See Details</small>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row mt-4 mb-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md bg-white rounded text-capitalize z-depth-0" style="font-weight:500">Book Now</button>
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
                <span style="font-size:30px; font-weight:600" class="wow fadeIn">
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
                                <button type="button" class="btn p-2 rounded-circle btn-outline-grey z-depth-0 button_hover_black" onclick="window.open('https://instagram.com/bodygravityid/');">
                                    <i class="fab fa-instagram" style="font-size:20px;"></i>
                                </button>
                                <button type="button" class="btn p-2 rounded-circle btn-outline-grey z-depth-0 button_hover_black" onclick="window.open('https://api.whatsapp.com/send?phone=628118772283&text=Hallo admin, saya tertarik dengan Body Gravity');">
                                    <i class="fab fa-whatsapp" style="font-size:20px;"></i>
                                </button>
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
                                <img src="{{ asset("image/karen.png") }}" style="width:200px; height:200px;" class="rounded-circle">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-weight:600; font-size:30px;">Karen</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-weight:500">Trainer</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button class="btn btn-outline-grey p-2 rounded-circle z-depth-0 button_hover_black" onclick="window.open('https://instagram.com/bodygravityid/');">
                                    <i class="fab fa-instagram" style="font-size:20px;"></i>
                                </button>
                                <button class="btn btn-outline-grey p-2 rounded-circle z-depth-0 button_hover_black" onclick="window.open('https://api.whatsapp.com/send?phone=628118772283&text=Hallo admin, saya tertarik dengan Body Gravity');">
                                    <i class="fab fa-whatsapp" style="font-size:20px;"></i>
                                </button>
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
                                <span style="font-weight:500">Trainer</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button class="btn p-2 btn-outline-grey rounded-circle z-depth-0 mt-0 button_hover_black" onclick="window.open('https://instagram.com/bodygravityid/');">
                                    <i class="fab fa-instagram" style="font-size:20px;"></i>
                                </button>
                                <button class="btn p-2 btn-outline-grey rounded-circle z-depth-0 mt-0 button_hover_black" onclick="window.open('https://api.whatsapp.com/send?phone=628118772283&text=Hallo admin, saya tertarik dengan Body Gravity');">
                                    <i class="fab fa-whatsapp" style="font-size:20px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-3">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-size:30px; font-weight:600">Our Testimonial</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-weight:500">What they say about us ? </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-1 d-flex align-items-center">
                    <button type="button" class="btn btn-sm p-3 rounded-circle z-depth-0 border" data-target="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                </div>
                <div class="col-lg-10">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="{{ asset('image/andry.png') }}" class="w-100 rounded-circle">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <span style="font-weight:600; font-size:20px;">Andry</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <i>
                                                                    <small class="text-muted italic" style="font-weight:500">CEO of Body Gravity</small>
                                                                </i>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-lg-12">
                                                                <small>{{ Str::limit("Body Gravity its good choice for your Scoliosis problem", 200) }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-12">
                                                                <a href="">
                                                                    <small class="text-dark">Read More</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="{{ asset('image/imelda.png') }}" class="w-100 rounded-circle">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <span style="font-size:20px; font-weight:600">Imelda</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <i>
                                                                    <small class="text-muted" style="font-weight:500">Coach at Body Gravity</small>
                                                                </i>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-lg-12">
                                                                <small>{{ Str::limit("Body Gravity can solve my backpain problem, and my scoliosis geting better and better day by day", 60) }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-12">
                                                                <a href="">
                                                                    <small class="text-dark underline">
                                                                        Read More
                                                                    </small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="{{ asset('image/karen.png') }}" class="w-100 rounded-circle">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <span style="font-weight:600; font-size:20px;">Karen</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <i>
                                                                    <small class="text-muted italic" style="font-weight:500">Coach at Body Gravity</small>
                                                                </i>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-lg-12">
                                                                <small>{{ Str::limit("Body Gravity its good choice for your Scoliosis problem", 200) }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-12">
                                                                <a href="">
                                                                    <small class="text-dark">Read More</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="{{ asset('image/testi1.jpg') }}" class="rounded-circle" style="width:120px; height:120px;">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <span style="font-size:20px; font-weight:600">Jessica</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <i>
                                                                    <small class="text-muted" style="font-weight:500">Coach at Body Gravity</small>
                                                                </i>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-lg-12">
                                                                <small>{{ Str::limit("Body Gravity can solve my backpain problem, and my scoliosis geting better and better day by day", 60) }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-12">
                                                                <a href="">
                                                                    <small class="text-dark underline">
                                                                        Read More
                                                                    </small>
                                                                </a>
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
                <div class="col-lg-1 d-flex align-items-center">
                    <button type="button" class="btn btn-md p-3 rounded-circle border z-depth-0" data-target="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fas fa-arrow-right text-dark"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- mobile --}}


<div class="d-block d-lg-none">
    <div class="row">
        <div class="col-12">
            <div id="header_banner_mobile">
                <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size:40px; font-weight:600" class="wow animated fadeInDown">Body Gravity</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:500" class="wow animated fadeInDown delay-1s">Stabilize your body for a productive life</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md blue-gradient rounded-pill wow animated fadeInDown delay-2s text-capitalize  ">
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
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <span class="text-white wow fadeInDown" style="font-weight:600; font-size:20px;">Why Choose Body Gravity</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 wow animated fadeInLeft">
                <div id="program_1">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="text-white" style="font-weight:600; font-size:25px;">Stronger</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 wow animated fadeInUp">
                <div id="program_2">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="text-white" style="font-weight:600; font-size:25px;">No Pain</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 wow fadeInDown">
                <div id="program_3">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <span class="text-white" style="font-weight:600; font-size:25px;">Agile</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 wow fadeInRight">
                <div id="program_4">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <span class="text-white" style="font-weight:600; font-size:25px;">Posture</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 mb-4 d-flex justify-content-center">
                <button type="button" class="btn btn-md rounded-pill btn-outline-white hover text-capitalize wow animated fadeInDown">
                    Look More
                </button>
            </div>
        </div>
    </div>
    <div class="bg-white pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-weight:600; font-size:25px;" class="wow fadeInDown">Our Program</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card rounded-0 wow fadeInDown">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('image/product_1.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pt-3 pl-3 pb-3">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="font-size:20px; font-weight:500">Body Shaping</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <small>{{ Str::limit("To help you achieve your dream body", 70) }}</small>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <a>
                                            <small>See Details</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-md rounded-0 btn-outline-black m-0">
                                            Book Now
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
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('image/product_2.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pt-3 pl-3 pb-3">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="font-size:20px; font-weight:500">Pain Management</span>
                                    </div>
                                </div>
                                <div class="row mt-4 pr-3">
                                    <div class="col-12">
                                        <small>
                                            {{ Str::limit("There are many pains which caused by having bad posture, such as scoliosis, back pain, pinched nerve, etc. Or anyone of you are on injury recovery process. We suggest you to take this program because Body Gravity will help you to offload the joints and focus on perfect structures of the body which ultimately leading to a reduction of pain and then healed completely.", 70) }}
                                        </small>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <a>
                                            <small>
                                                See Details
                                            </small>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-md rounded-0 btn-outline-black m-0">
                                            Book Now
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
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('image/product_3.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pt-3 pl-3 pb-3">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="font-size:20px; font-weight:500">Kids</span>
                                    </div>
                                </div>
                                <div class="row mt-4 pr-3">
                                    <div class="col-lg-12">
                                        <small>
                                            {{ Str::limit("Teach your children from a young age to have good movement habits and to keep them active, especially most of the children do less exercise and spend more time of sitting while using tech nowadays.", 70) }}
                                        </small>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <a>
                                            <small>See Details</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-md rounded-0 btn-outline-black m-0">
                                            Book Now
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
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('image/product_4.jpg') }}" class="w-100">
                                </div>
                            </div>
                            <div class="pt-3 pl-3 pb-3">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="font-size:20px; font-weight:500">Senior</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <small>{{ Str::limit("Senior program is perfectly fits for seniors who are hardly moved to the body. By taking some trainings the body will have a better body will have a better body connection and get stronger to move. You are never too late to begin the pillates practice due pillates will help you maintain and/or gain your balance, Strength, Flexibility, Focus, Breath and all areas you may notice have changed with age.", 70) }}</small>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <a>
                                            <small>See Details</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-md rounded-0 btn-outline-black m-0">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-4">
                <div class="col-12 d-flex justify-content-center">
                    <button type="button" class="btn btn-md btn-outline-black rounded-pill text-capitalize wow fadeInDown">
                        Look More
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <span style="font-size:25px; font-weight:600" class="text-white wow fadeInDown">Meet Our Teams</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="{{ asset('image/andry.png') }}" style="width:200px; height:200px;" class="rounded-circle">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:600; font-size:20px;">Andry</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:500">Founder</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <span class="text-center">Hi, I'm the founder of Body Gravity. Body Gravity is founded because i see out there that there is no exercise to restore body posture, especially in scoliosis...</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="" class="text-dark">Read More</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md z-depth-0 border-0 p-2 roudned-0">
                                    <i class="fab fa-instagram" style="font-size:30px;"></i>
                                </button>
                                <button type="button" class="btn btn-md z-depth-0 border-0 p-2 rounded-0">
                                    <i class="fab fa-youtube" style="font-size:30px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="{{ asset('image/karen.png') }}" style="width:200px; height:200px;" class="rounded-circle">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:600; font-size:20px;">Karen</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:500">Coach</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <span class="text-center">Hi, since childhood i have had scoliosis with 60 Degree inclination. I have tried many ways to cure it, but none of the result are satisfactory...</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="" class="text-dark">Read More</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md z-depth-0 border-0 p-2 roudned-0">
                                    <i class="fab fa-instagram" style="font-size:30px;"></i>
                                </button>
                                <button type="button" class="btn btn-md z-depth-0 border-0 p-2 rounded-0">
                                    <i class="fab fa-youtube" style="font-size:30px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card rounded-0 mb-4 wow fadeInDown">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="{{ asset('image/imelda.png') }}" style="width:200px; height:200px;" class="rounded-circle">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:600; font-size:20px;">Imelda</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight:500">Coach</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <span class="text-center">I used to have back pain. But everything changed after meeting Body Gravity, the pain in my shoulder was getting better, even no it's 100% gone...</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="" class="text-dark">Read More</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md z-depth-0 border-0 p-2 roudned-0">
                                    <i class="fab fa-instagram" style="font-size:30px;"></i>
                                </button>
                                <button type="button" class="btn btn-md z-depth-0 border-0 p-2 rounded-0">
                                    <i class="fab fa-youtube" style="font-size:30px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-4">
        <div class='container'>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-weight:500; font-size:25px;">What they say about us ? </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <img src="{{ asset('image/andry.png') }}" class="rounded-circle" style="width:200px; height:200px;">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row mt-4">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <span style="font-weight:600; font-size:20px;">Andry</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <i>
                                                                    <small class="text-muted italic" style="font-weight:500">CEO of Body Gravity</small>
                                                                </i>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <small>{{ Str::limit("Body Gravity its good choice for your Scoliosis problem", 200) }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <a href="">
                                                                    <small class="text-dark">Read More</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @for($i = 0; $i < 5; $i++)
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="{{ asset('image/imelda.png') }}" class="rounded-circle" style="width:200px; height:200px;">
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row mt-4">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <span style="font-size:20px; font-weight:600">Imelda</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <i>
                                                                        <small class="text-muted" style="font-weight:500">Coach at Body Gravity</small>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <small>{{ Str::limit("Body Gravity can solve my backpain problem, and my scoliosis geting better and better day by day", 60) }}</small>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <a href="">
                                                                        <small class="text-dark underline">
                                                                            Read More
                                                                        </small>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection