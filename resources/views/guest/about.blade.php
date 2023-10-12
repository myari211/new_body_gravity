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
        url({{ asset('image/home1.jpg') }});
    }

    #header_banner_mobile { 
        width: 100%;
        height: 650px;;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/home1.jpg') }});
    }

    #header_footer { 
        width: 100%;
        min-height: 800px;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/take_class_2.jpg') }});
    }

    #header_footer_mobile {
        width:100%;
        min-height:600px;
        background-size:cover;
        background-attachment: fixed;
        color: white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75), rgba(0,0,0,1) 100%),
        url({{ asset('image/take_class_2.jpg') }});
    }

    #button_hover:hover{
        background-color:white !important;
        color:black !important;
    }

    .button_hover_black:hover{
        background-color:black !important;
        color: white !important;
    }

    #program_1 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/strength.jpg') }});
    }

    #program_2 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/no_pain.jpg') }});
    }

    #program_3 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/stronger_image.jpg') }});
    }

    #program_4 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg,rgba(0, 0, 0, 0.726) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/posture.jpeg') }});
    }
</style>
<div class="d-none d-lg-block">
    <div class="row">
        <div class="col-lg-12">
            <div id="header_banner">
                <div class="container h-100 w-100 d-flex justify-content-center align-items-center">   
                    <div>
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="{{ asset('image/body_gravity.png') }}" style="width:400px; margin-top:-40px;" class="wow fadeInRight bg-white rounded-circle">
                            </div>
                            <div class="col-lg-6">
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span class="wow fadeInLeft" style="font-weight:500; font-size: 20px;">Body Gravity is a pilates studio located in South Jakarta established since 2017. What differentiate Body Gravity from another pilates studio is we use different approach that focus on a perfect structure of the body which applied in each of our movement.</span>
                                    </div>
                                </div>
                                <div class='row mt-3'>
                                    <div class="col-lg-12">
                                        <span style="font-weight:500; font-size: 20px">We aim of achieving perfect body connections of our members to gain their maximum strength. We also aim everybody to has knowledge about how a perfect body structure actually is and how to have full body awareness of yours.</span>
                                    </div>
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
            <div class="col-lg-12 d-flex justify-content-center">
                <span class="wow fadeInDown" style="font-size:34px; font-weight:600; color: black">Advantage</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <span class="wow fadeInDown text-dark" style="font-weight:500; font-size: 20px;">Come, join and get these advantages</span>
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
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center p-4">
                                                <div class="border d-flex align-items-center justify-content-center w-100 h-100 wow fadeIn" data-wow-delay="1s">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Strength and Tone</span>
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
                                            <div class="p-4 w-100 h-100">
                                                <div class="w-100 h-100 d-flex align-items-center justify-content-center border wow fadeIn" data-wow-delay="1s">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Agile and Pain-free</span>
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
        <div class="row mt-4 mb-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 z-depth-0 border-0 wow fadeInRight">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="program_3">
                                            <div class="h-100 w-100 p-4">
                                                <div class="w-100 h-100 d-flex align-items-center justify-content-center border wow fadeIn" data-wow-delay="1s">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Balance and Flexible</span>
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
                                            <div class="p-4 w-100 h-100">
                                                <div class="w-100 h-100 d-flex align-items-center justify-content-center border wow fadeIn" data-wow-delay="1s">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Perfect Posture</span>
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
    <div class="row">
        <div class="col-lg-12">
            <div id="header_footer">
                <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:40px; font-weight:600" class="wow fadeInDown">Let's Take Class With Us</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="wow fadeInDown" style="font-size:20px;">
                                    Body Gravity is dedicated to provide the best results for our members especially
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="wow fadeInDown" style="font-size:20px;">
                                    for their posture problems in order to have a better quality of life in the future.
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="wow fadeInDown" style="font-size:20px;">
                                    So what are you waiting for, check out our programs and see you on the studio ! 
                                </span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-lg dusty-grass-gradient rounded-pill wow fadeInDown text-white text-capitalize" style="font-weight: 600" onclick="location.href='{{ route('program') }}';">
                                    Take Class <i class="fas fa-arrow-right ml-4 animated fadeInLeft slow infinite"></i>
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
                <div class="container h-100">
                    <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="{{ asset('image/body_logo.png') }}" style="width:200px;">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span class="text-center">Body Gravity is a pilates studio located in South Jakarta established since 2017. What differentiate Body Gravity from another pilates studio is we use different approach that focus on a perfect structure of the body which applied in each of our movement.</span>
                                </div>
                            </div>
                            <div class='row mt-3'>
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <span class="text-center">We aim of achieving perfect body connections of our members to gain their maximum strength. We also aim everybody to has knowledge about how a perfect body structure actually is and how to have full body awareness of yours.</span>
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
            <div class="col-12 d-flex justify-content-center">
                <span class="text-muted" style="font-size:30px; font-weight:400">Advantage</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <span class="text-muted" style="font-weight:500">Come Join and get this advantage</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div id="program_1">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center p-4">
                        <div class="border d-flex align-items-center justify-content-center w-100 h-100 wow fadeIn" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Strength and Tone</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div id="program_2">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class="w-100 h-100 d-flex align-items-center justify-content-center p-4">
                            <div class="border d-flex align-items-center justify-content-center w-100 h-100 wow fadeIn" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Agile and Pain-free</span>
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
                <div id="program_3">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center p-4">
                        <div class="border d-flex align-items-center justify-content-center w-100 h-100 wow fadeIn" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Balance and Flexible</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-12">
                <div id="program_4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center p-4">
                        <div class="border d-flex align-items-center justify-content-center w-100 h-100 wow fadeIn" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px;">Perfect Posture</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="header_footer_mobile">
                <div class="container h-100">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-weight:600; font-size:25px;">Let's Take Class With Us</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <span class="text-center">
                                        Body Gravity is dedicated to provide the best results for our members especially
                                        for their posture problems in order to have a better quality of life in the future.
                                        So what are you waiting for, check out our programs and see you on the studio !
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md rounded-pill blue-gradient" onclick="location.href='{{ route('program') }}';">
                                        Take A Class <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-2"></i>
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
@endsection