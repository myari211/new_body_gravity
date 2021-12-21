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
        url({{ asset('image/agile.jpg') }});
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
<div class="row">
    <div class="col-lg-12">
        <div id="header_banner">
            <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                <div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-size:40px; font-weight:600" class="animated fadeInDown">Our Program</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-size:20px; font-weight:500" class="animated fadeInDown delay-1s">Body Gravity was etablished in 2017 and until now we have helped many clients</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-size:20px; font-weight:500" class="animated fadeInDown delay-2s">who have problems with their body posture</span>
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
            <span style="font-size:30px; font-weight:500" class="text-white wow fadeInDown">Program for public</span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card rounded-0 z-depth-0 wow fadeInLeft">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-center">
                            <img src="{{ asset('image/product_1.jpg') }}" class="w-100">
                        </div>
                        <div class="col-lg-8 d-flex flex-column pb-3">
                            <div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:25px; font-weight:600">Body Shaping</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <i class="fas fa-money-bill mr-2"></i> 6 Mill
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 d-flex align-items-center">
                                        <i class="fas fa-user mr-3"></i> 10 Visit
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="product1">
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12">
                                        <small>This program is targeted for people who want an ideal body shape ratio in the arms or thighs, remove fat folds on the back because of bras, shape the buttocks (from flat to round), slim the waist, or remove double chin.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-auto">
                                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                    <a data-toggle="collapse" href="#product1" aria-expanded="false" aria-controls="product1" class="d-flex align-items-center">
                                        <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-black rounded-0 z-depth-0 mr-4">
                                        Take Class <i class="fas fa-arrow-right ml-2 animated fadeInLeft slow infinite"></i>
                                    </button>
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
            <div class="card rounded-0 z-depth-0 wow fadeInRight">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-center">
                            <img src="{{ asset('image/product_2.jpg') }}" class="w-100">
                        </div>
                        <div class="col-lg-8 d-flex flex-column pb-3">
                            <div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:25px; font-weight:600">Rehabilitation</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <i class="fas fa-money-bill mr-2"></i> 6 Mill
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 d-flex align-items-center">
                                        <i class="fas fa-user mr-3"></i> 10 Visit
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="product2">
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12">
                                        <small>This program is targeted for people who need physical rehabilitation so they can restore their body function because of knee injury, hip joint injury, ankle injury, shoulder injury, spinal cord injury, pinched nerve, neck pain, waist, back or stiff shoulder.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-auto">
                                <div class="col-lg-12 d-flex justify-content-between align-items-end">
                                    <a data-toggle="collapse" href="#product2" aria-expanded="false" aria-controls="product2" class="d-flex align-items-center">
                                        <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-black rounded-0 z-depth-0 mr-4">
                                        Take Class <i class="fas fa-arrow-right ml-2 animated fadeInLeft slow infinite"></i>
                                    </button>
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
            <div class="card rounded-0 z-depth-0 wow fadeInLeft">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-center">
                            <img src="{{ asset('image/product_3.jpg') }}" class="w-100">
                        </div>
                        <div class="col-lg-8 d-flex flex-column pb-3">
                            <div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:25px; font-weight:600">Children</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <i class="fas fa-money-bill mr-2"></i> 5 Mill
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 d-flex align-items-center">
                                        <i class="fas fa-user mr-3"></i> 10 Visit
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="product3">
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12">
                                        <small>This program is targeted to building kids’ habit since early age to have good posture as we see nowadays many kids age 8 years old already have back issues due to repeatable bad habits.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-auto">
                                <div class="col-lg-12 d-flex justify-content-between align-items-end">
                                    <a data-toggle="collapse" href="#product3" aria-expanded="false" aria-controls="product3" class="d-flex align-items-center">
                                        <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-black rounded-0 z-depth-0 mr-4">
                                        Take Class <i class="fas fa-arrow-right ml-2 animated fadeInLeft slow infinite"></i>
                                    </button>
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
            <div class="card rounded-0 z-depth-0 wow fadeInRight">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-center">
                            <img src="{{ asset('image/product_4.jpg') }}" class="w-100">
                        </div>
                        <div class="col-lg-8 d-flex flex-column pb-3">
                            <div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:25px; font-weight:600">Senior</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <i class="fas fa-money-bill mr-2"></i> 7 Mill
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 d-flex align-items-center">
                                        <i class="fas fa-user mr-3"></i> 10 Visit
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="product4">
                                <div class="row mt-5 mb-4">
                                    <div class="col-lg-12">
                                        <small>This program is targeted for senior aged people who need rehabilitation so they can restore their body function as many senior people find it difficult to walk or do daily activities and even sleeping because their bodies are stiff or in pain.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-auto">
                                <div class="col-lg-12 d-flex justify-content-between align-items-end">
                                    <a data-toggle="collapse" href="#product4" aria-expanded="false" aria-controls="product4" class="d-flex align-items-center">
                                        <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-black rounded-0 z-depth-0 mr-4">
                                        Take Class <i class="fas fa-arrow-right ml-2 animated fadeInLeft slow infinite"></i>
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
<div class="bg-white pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <span style="font-size:30px; font-weight:600" class="wow fadeInDown">Program For Coach</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <span style="font-weight:500" class="wow fadeInDown">Want to learn about Body Gravity ?</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class='col-lg-4'>
                                <img src="{{ asset('image/basic.jpg') }}" class="w-100">
                            </div>
                            <div class="col-lg-8 d-flex flex-column pb-3">
                                <div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <span style="font-size:25px; font-weight:600">Basic Program</span>
                                        </div>
                                    </div>
                                    <div class="collapse" id="basic">
                                        <div class="row mt-5 mb-4">
                                            <div class="col-lg-12">
                                                <small>A training program for those of you who work in the world of sports, where we will teach you about Body Gravity at the Basic Level.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-auto">
                                    <div class="col-lg-12 d-flex justify-content-between align-items-end">
                                        <a data-toggle="collapse" href="#basic" aria-expanded="false" aria-controls="basic" class="d-flex align-items-center">
                                            <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-black rounded-0 z-depth-0 mr-4">
                                            Take Class <i class="fas fa-arrow-right ml-2 animated fadeInLeft slow infinite"></i>
                                        </button>
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
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class='col-lg-4'>
                                <img src="{{ asset('image/intermediate.jpg') }}" class="w-100">
                            </div>
                            <div class="col-lg-8 d-flex flex-column pb-3">
                                <div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <span style="font-size:25px; font-weight:600">Intermediate Program</span>
                                        </div>
                                    </div>
                                    <div class="collapse" id="intermediate">
                                        <div class="row mt-5 mb-4">
                                            <div class="col-lg-12">
                                                <small>A training program for those of you who work in the world of sports, where we will teach you about Body Gravity at the Intermediate Level.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-auto">
                                    <div class="col-lg-12 d-flex justify-content-between align-items-end">
                                        <a data-toggle="collapse" href="#intermediate" aria-expanded="false" aria-controls="basic" class="d-flex align-items-center">
                                            <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-black rounded-0 z-depth-0 mr-4">
                                            Take Class <i class="fas fa-arrow-right ml-2 animated fadeInLeft slow infinite"></i>
                                        </button>
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
                <div class="card rounded-0 wow fadeInDown">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class='col-lg-4'>
                                <img src="{{ asset('image/advance.jpg') }}" class="w-100">
                            </div>
                            <div class="col-lg-8 d-flex flex-column pb-3">
                                <div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <span style="font-size:25px; font-weight:600">Advance Program</span>
                                        </div>
                                    </div>
                                    <div class="collapse" id="advance">
                                        <div class="row mt-5 mb-4">
                                            <div class="col-lg-12">
                                                <small>A training program for those of you who work in the world of sports, where we will teach you about Body Gravity at the Advance Level.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-auto">
                                    <div class="col-lg-12 d-flex justify-content-between align-items-end">
                                        <a data-toggle="collapse" href="#advance" aria-expanded="false" aria-controls="advance" class="d-flex align-items-center">
                                            <small class="text-dark" style="font-weight:500">Details</small><i class="fas fa-arrow-down ml-2 text-dark animated fadeInDown infinite slow" style="font-size:10px;"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-black rounded-0 z-depth-0 mr-4">
                                            Take Class <i class="fas fa-arrow-right ml-2 animated fadeInLeft slow infinite"></i>
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
@endsection