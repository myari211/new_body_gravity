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
        url({{ asset('image/pain.png') }});
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
<div class="d-none d-lg-block">
    <div class="row">
        <div class="col-lg-12">
            <div id="header_banner">
                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:30px; font-weight:600">Contact Us At</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:20px; font-weight:500">Let us know what you want and what you need</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <form>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="first_name" style="font-weight:600">First Name</label>
                        <input type="text" class="form-control rounded-0" id="first_name" placeholder="Type your first name here" style="height:50px;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="last_name"  style="font-weight:600">Last Name</label>
                        <input type="text" class="form-control rounded-0" id="last_name" placeholder='Type your last name here' style="height:50px;">
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="email"  style="font-weight:600">Email</label>
                        <input type="email" class="form-control rounded-0" id="email" placeholder="Type your email here" style="height:50px;">
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="phone"  style="font-weight:600">Phone</label>
                        <input type="number" class="form-control rounded-0" id="phone" placeholder="Type your phone here" style="height:50px;a">
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" style="font-weight:600">Your Message</label>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="Type your message here"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-md rounded-0 btn-outline-black">
                        Submit
                        <i class="fas fa-arrow-right animated fadeInLeft infinite ml-4"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="bg-white pt-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-weight:600; font-size:30px;">Our Contact Us at</span>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-lg-6">
                    <div id="program_1">
                        <div class="row h-100">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6 pl-0">
                                <div class="card rounded-0 z-depth-0 w-100 h-100 red lighten-3">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="fab fa-instagram text-white" style="font-size:100px;"></span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:20px; font-weight:500" class="text-white">@bodygravityid</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md rounded bg-white text-capitalize z-depth-0" style="font-weight:500" onclick="window.open('https://www.instagram.com/bodygravityid/');">
                                                        Follow Us
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
                <div class="col-lg-6 pl-0">
                    <div id="program_4">
                        <div class="row h-100">
                            <div class="col-lg-6">
                                
                            </div>
                            <div class="col-lg-6 pl-0">
                                <div class="card rounded-0 z-depth-0 w-100 h-100 teal accent-3">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="fab fa-whatsapp text-white" style="font-size:100px;"></span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size:20px; font-weight:500" class="text-white">+62 811 877 228 3</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-md rounded bg-white text-capitalize z-depth-0" style="font-weight:500" onclick="window.open('https://api.whatsapp.com/send?phone=628118772283&text=Hallo admin, saya tertarik dengan Body Gravity');">
                                                        Chat Us
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span class="fab fa-whatsapp text-white" style="font-size:100px;"></span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span class="text-white" style="font-weight:600">+62 811 877 228 3</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-md rounded-0 btn-outline-white">
                                            Chat Us
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:30px; font-weight:600">
                                        Contact Us
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-weight:500" class="text-center">
                                        Let us know what do you want, and know what do you need
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <form>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="form-group">
                        <label for="first_name_mobile" style="font-weight:500" class="text-white">First Name</label>
                        <input type="text" class="form-control rounded-0" style="height:50px;" placeholder="Type your first name here...">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="form-group">
                        <label for="last_name_mobile" style="font-weight:500" class="text-white">Last Name</label>
                        <input type="text" class="form-control rounded-0" style="height:50px;" placeholder="Type your last name here...">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="form-group">
                        <label for="email_mobile" style="font-weight:500" class="text-white">Email</label>
                        <input type="email" class="form-control rounded-0" style="height:50px;" placeholder="Type your email here...">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="form-group">
                        <label for="phone" style="font-weight:500" class="text-white">Phone</label>
                        <input type="text" class="form-control rounded-0" style="height:50px;" placeholder="Type your phone here...">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class='text-white' style="font-weight:600">Your Message</label>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="Type your message here"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-sm rounded-pill btn-outline-white">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="bg-white pt-4">
        <div class="container">
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-size:20px; font-weight:500">Or Contact Us at</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div id="program_1">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">    
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span class="fab fa-instagram text-white" style="font-size:100px;"></span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span style="font-size:20px; font-weight:500" class="text-white">@bodygravityid</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-md rounded-0 btn-outline-white">
                                            Follow Us
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div id="program_2">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span class="fab fa-facebook text-white" style="font-size:100px;"></span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span style="font-size:20px; font-weight:600" class="text-white">bodygravityid</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-outline-white btn-md rounded-0">
                                            Visit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div id="program_3">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="fab fa-youtube text-white" style="font-size:100px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div id="program_4">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span class="fab fa-whatsapp text-white" style="font-size:100px;"></span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span class="text-white" style="font-weight:600">+62 811 877 228 3</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-md rounded-0 btn-outline-white">
                                            Chat Us
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </di
        </div>
    </div>
</div>
@endsection