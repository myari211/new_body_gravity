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
        url({{ asset('image/strong.png') }});
    }

    #header_footer { 
        width: 100%;
        min-height: 800px;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
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
</style>
<div class="row">
    <div class="col-lg-12">
        <div id="header_banner">
            <div class="h-100 w-100 d-flex align-items-center justify-content-center">
                <div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-size:40px; font-weight:600" class="animated fadeInUp">All About Body Gravity</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="text-white animated fadeInUp delay-1s" style="font-size:20px; font-weight:500">Find out the root cause, help the body recover on its own.</span>
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
            <span class="text-white wow fadeInUp" style="font-size:30px; font-weight:500">What is Body Gravity ?</span>
        </div>
    </div>
    <div class="row mt-5 pb-5">
        <div class="col-lg-6 d-flex align-items-center">
            <img src="{{ asset('image/body_logo.png') }}" style="width:400px;" class="wow fadeInRight">
        </div>
        <div class="col-lg-6">
            <div class="row wow fadeInLeft">
                <div class="col-lg-12">
                    <span class="text-white" style="font-weight:500">
                        Body Gravity is a new way of viewing and training the body with the aim of achieving perfect body connections to produce maximum strength that will keep the body from injury or pain and increase physical abilities quickly as never imagined.
                    </span>
                </div>
            </div>
            <div class="row mt-3 wow fadeInLeft">
                <div class="col-lg-12">
                    <span class="text-white" style="font-weight:500">
                        Body Gravity is a method of changing the body's movement system with the aim of changing the formation / arrangement of the bones of the body.
                    </span>
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <span class="text-white" style="font-weight:500">
                            This movement system will provide the body's ability to be able to express truly / deeply / completely / completely by itself without being ordered or thought about, at every joint can be open, free and wide so that it will create a condition that is very possible to train the body to its maximum capacity. so far.
                        </span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <span class="text-white" style="font-weight:500">
                            Creating space that didn't exist before, creating energy that was previously incapable of, creating shapes that were previously difficult...
                        </span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <span class="text-white" style="font-weight:500">
                            which over time will teach the body to use its body weight as a burden to train and use in a better way and become more independent with without assistance or machines to assist in generating or enhancing the body's abilities. Which will make the body to be ready to face every condition or environmental situation that exists even though it is extreme.
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <button type="button" class="wow fadeIn btn btn-sm rounded-pill btn-outline-white text-capitalize m-0" id="button_hover" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Read More <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite slow"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-white wow fadeInDown" style="font-size:30px; font-weight:500">Advantage</span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-white wow fadeInDown" style="font-weight:500">Come Join and get this advantage</span>
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
    <div class="row mt-4 mb-5">
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
</div>
<div class="bg-white pt-5 pb-5">
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
                            <span class="wow fadeInDown">
                                Body Gravity aimed and is dedicated to providing the best results for our customers
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="wow fadeInDown">
                                for their posture problems so that they can have a better quality of life in future
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
@endsection