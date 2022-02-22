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

    #header_footer { 
        width: 100%;
        min-height: 800px;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/take_class.jpg') }});
    }

    #header_footer_mobile {
        width:100%;
        min-height:400px;
        background-size:cover;
        background-attachment: fixed;
        color: white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75), rgba(0,0,0,1) 100%),
        url({{ asset('image/pain.png') }});
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
                                <img src="{{ asset('image/body_white.png') }}" style="width:400px; margin-top:-40px;" class="wow fadeInRight">
                            </div>
                            <div class="col-lg-6">
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span class="wow fadeInLeft" style="font-weight:400">Body Gravity is a pilates studio located in South Jakarta established since 2017. What differentiate Body Gravity from another pilates studio is we use different approach that focus on a perfect structure of the body which applied in each of our movement.</span>
                                    </div>
                                </div>
                                <div class='row mt-3'>
                                    <div class="col-lg-12">
                                        <span style="font-weight:400">We aim of achieving perfect body connections of our members to gain their maximum strength. We also aim everybody to has knowledge about how a perfect body structure actually is and how to have full body awareness of yours.</span>
                                    </div>
                                </div>
                                {{-- <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span class="font-weight-bold">So, what are you waiting for, go check out our programs !</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span class="font-weight-bold">Let us know goal and See you on the studio !</span>
                                    </div>
                                </div> --}}
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
                <span class="wow fadeInDown text-muted" style="font-size:34px; font-weight:400">Advantage</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <span class="wow fadeInDown text-muted" style="font-weight:500">Come, Join and get these advantages</span>
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
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px; font-weight:600">Agile And Pain-free</span>
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
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px; font-weight:600">Balance And Flexible</span>
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
                                                            <span class="text-white wow fadeIn" data-wow-delay="1s" style="font-size:30px; font-weight:600">Perfect Posture</span>
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
    {{-- <div class="bg-white pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-size:30px; font-weight:500" class="wow fadeIn">
                        Body Gravity Teams
                    </span>
                </div>
            </div>
            <div class="row mt-4 wow fadeInLeft">
                <div class="col-lg-3">
                    <img src="{{ asset('image/andry.png') }}" style="width:250px; height:250px;" class="rounded-circle wow">
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:30px; font-weight:600">Andry</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                Hi, I'm the founder of Body Gravity. Body Gravity is founded because i see out there that there is no exercise to restore body posture, especially in scoliosis.
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                The method that i developed uses the concept of Physics, especially Gravity, which aims to return the center of gravity of the body to the correct position, so that our posture and body structure become more balanced.
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                This method can be applied to our daily activities so that the body is trained in stability or in posture that we want such as study, tall, slim, and propotional.
                            </span>
                        </div>
                    </div>
                    <div class='row mt-3'>
                        <div class="col-lg-12">
                            <span style="font-weight:500">Train the body as a whole, healthy & fit always.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 wow fadeInRight">
                <div class="col-lg-3">
                    <img src="{{ asset('image/karen.png') }}" style="width:250px; height:250px;" class="rounded-circle">
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:30px; font-weight:600">Karen</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                Hi, I'm Karen Zheng Weng Fang. Since childhood, i had scoliosis with an inclination of about 60 degrees.
                                I have tried many ways to cure it, but none of the results are satisfactory. Then, in 2011 i started a session
                                with Andry Chang & learned a lot about the human body.
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                Over time, i began to experience the benefits of Body Gravity for myself & fell in love with it. No my scoliosis has
                                reduced. I am proud to tell my friends, BOdy Gravity has changed my life.
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                Starting from scoliosis to accepting myself as who i am, becoming a more pantient person, and living a healthier lifestyle.
                                I have prove myself, that scoliosis as something that can be use for good, not a drawback. Whoever we are, no matter how old
                                are you, it's never too late to accept & change our shortcomings.
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                Body Gravity, always ready to help.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 wow fadeInLeft">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('image/imelda.png') }}" style="width:250px; height:250px;" class="rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:30px; font-weight:600">Imelda</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                I have shoulder pain. But everything changed after i found Body Gravity, the pain at my shoulderwas get better. and now 100% gone.
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <span style="font-weight:500">
                                I was very interested in exploring Body Gravity, becoming a Coach & helping all those who had the same issue like me.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
                                <span class="wow fadeInDown">
                                    Body Gravity is dedicated to providing the best results for our customers intense
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="wow fadeInDown">
                                    of for their posture problems in order to have a better quality of life in the future.
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="wow fadeInDown">
                                    So What are you waiting for, Check out our programs, and see you on the studio ! 
                                </span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md blue-gradient rounded-pill wow fadeInDown">
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
            <div id="header_banner">
                <div class="container h-100">
                    <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:40px; font-weight:600" class="text-center">All About Body Gravity</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:20px; font-weight:500" class="text-center">Find out the root cause, help the body recover on its own.</span>
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
                <span style="font-size:30px; font-weight:500" class="text-white">What is Body Gravity ?</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <img src="{{ asset('image/body_logo.png') }}" class="w-100">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 wow fadeInLeft">
                <span class="text-white" style="font-weight:500">
                    Body Gravity is a pilate studio located in South Jakarta established since 2017. What differentiate Body Gravity from
                    another pilates studio is we use different approach that focus on a perfect structure of the body which applied in
                    each of our movement
                </span>
            </div>
        </div>
        <div class="collapse" id="show-more">
            <div class="row mt-3">
                <div class="col-12">
                    <span style="font-weight:500" class="text-white">
                        We aim of achieving perfect body connections of our members to gain their maximum strenght. We also aim every body to
                        has knowledge about how a perfect body structure actually is and how to have full body awareness of yours.
                    </span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <span class="font-weight-bold text-white">So, what are you waiting for, go check out our programs !</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <span class="font-weight-bold text-white">Let Us know your goal and See you on the studio !</span>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <button type="button" class="wow fadeIn btn btn-sm rounded-pill btn-outline-white text-capitalize m-0" id="button_hover" data-toggle="collapse" href="#show-more" aria-expanded="false" aria-controls="collapseExample">
                    Read More <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite slow"></i>
                </button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <span style="font-size:30px; font-weight:600" class="text-white">Advantage</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <span class="text-white" style="font-weight:500">Come Join and get this advantage</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div id="program_1">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:30px; font-weight:600" class="text-white">Stronger</span>
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
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:30px; font-weight:600" class="text-white">No Pain</span>
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
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:30px; font-weight:600" class="text-white">Agile</span>
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
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:30px; font-weight:600" class="text-white">Posture</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-size:25px; font-weight:600">Body Gravity Teams</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <img src="{{ asset('image/andry.png') }}" class="rounded-circle" style="width:200px; height:200px;">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-size:25px; font-weight:500">Andry</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-weight:500" class="text-center">
                        Hi, I'm the founder of Body Gravity. Body Gravity is founded because i see out there that there is no exercise to restore body posture, especially in scoliosis.
                    </span>
                </div>
            </div>
            <div class="collapse" id="andry">
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">
                            The method that i developed uses the concept of Physics, especially Gravity, which aims to return the center of gravity of the body to the correct position, so that our posture and body structure become more balanced.
                        </span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">
                            This method can be applied to our daily activities so that the body is trained in stability or in posture that we want such as study, tall, slim, and propotional.
                        </span>
                    </div>
                </div>
                <div class='row mt-3'>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">
                            Train the body as a whole, healthy & fit always.
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <a data-toggle="collapse" href="#andry" aria-expanded="false" aria-controls="andry">
                        <i class="fas fa-chevron-down animated fadeInDown slow infinite"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <img src="{{ asset('image/karen.png') }}" class="rounded-circle" style="width:200px; height:200px;">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-size:25px; font-weight:500">Karen</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-weight:500" class="text-center">
                        Hi, I'm Karen Zheng Weng Fang. Since childhood, i had scoliosis with an inclination of about 60 degrees.
                    </span>
                </div>
            </div>
            <div class="collapse" id="karen">
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">
                            I have tried many ways to cure it, but none of the results are satisfactory. Then, in 2011 i started a session
                            with Andry Chang & learned a lot about the human body.
                        </span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">
                            Over time, i began to experience the benefits of Body Gravity for myself & fell in love with it. No my scoliosis has
                            reduced. I am proud to tell my friends, BOdy Gravity has changed my life.
                        </span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">
                            Starting from scoliosis to accepting myself as who i am, becoming a more pantient person, and living a healthier lifestyle.
                            I have prove myself, that scoliosis as something that can be use for good, not a drawback. Whoever we are, no matter how old
                            are you, it's never too late to accept & change our shortcomings.
                        </span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">
                            Body Gravity, always ready to help.
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <a data-target="#karen" data-toggle="collapse" href="#karen" aria-expanded="false" aria-controls="karen">
                        <i class="fas fa-chevron-down animated fadeInDown slow infinite"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <img src="{{ asset('image/imelda.png') }}" style="width:200px; height:200px;" class="rounded-circle">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-size:25px; font-weight:500">Imelda</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-weight:500" class="text-center">I have shoulder pain. But everything changed after i found Body Gravity, the pain at my shoulderwas get better. and now 100% gone.</span>
                </div>
            </div>
            <div class="collapse" id="imelda">
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-center">
                        <span style="font-weight:500" class="text-center">I was very interested in exploring Body Gravity, becoming a Coach & helping all those who had the same issue like me.</span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <a data-toggle="collapse" href="#imelda" aria-expanded="false" aria-controls="imelda">
                        <i class="fas fa-chevron-down animated fadeInDown slow infinite"></i>
                    </a>
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
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span class="text-center">Body Gravity aimed and is dedicated to providing the best results for our customers for their posture problems so that they can have a better quality of life in future</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md rounded-pill blue-gradient">
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