@extends('guest.layouts.app')
@section('content')
<style type="text/css">
    #header_banner { 
        width: 100%;
        min-height: 100vh;
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
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/BODYSHAPING.jpeg') }});
        background-position:center;
    }

    #program-1 {
        width: 100%;
        min-height: 1200px;
        background-size:cover;
        color: white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.171) 99.53%, rgba(0,0,0, 0.171) 100%),
        url({{ asset('image/BODYSHAPING.jpeg') }});
        /* background-position:center center; */
    }
    #program-2 {
        width: 100%;
        min-height: 1200px;
        background-size:cover;
        color: white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.171) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/PAINMANAGEMENT.jpeg') }});
        background-position:center center;
    }
    #program-3 {
        width: 100%;
        min-height: 1200px;
        background-size:cover;
        color: white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.171) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/KIDS.jpeg') }});
        background-position:center center;
    }
    #program-4 {
        width: 100%;
        min-height: 1200px;
        background-size:cover;
        color: white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.171) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('image/SENIOR.jpeg') }});
        background-position:center center;
    }

    #program_5 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.400) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/BODYSHAPING.jpeg') }});
    }

    #program_6 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.400) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/PAINFREE.jpeg') }});
    }

    #program_7 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.400) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/KIDS.jpeg') }});
    }

    #program_8 {
        width:100%;
        background-size:cover;
        min-height:300px;
        background-image:
        linear-gradient(55.8deg, rgba(0, 0, 0, 0.400) 100%, rgba(0,0,0, 0) 100%),
        url({{ asset('image/SENIOR.jpeg') }});
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
    <div class="row">
        <div class="col-lg-6 p-0 wow fadeInDownBig">
            <div id="program-1">
                <div class="w-100 h-100 p-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center wow fadeIn" data-wow-delay="1s" style="border:1px solid #fff">
                        <div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <span style="font-size: 30px; font-weight: 600">Body Shaping</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <span class="text-center">
                                        To help you achieve your dream body.
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md btn-outline-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Kids">
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
        <div class="col-lg-6 p-0 wow fadeInDownBig" data-wow-delay="0.4s">
            <div id="program-2">
                <div class="w-100 h-100 p-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center wow fadeIn" data-wow-delay="1s" style="border:1px solid #fff">
                        <div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <span style="font-size: 30px; font-weight: 600">Pain Management</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 pr-4 pl-4 d-flex justify-content-center">
                                    <span class="text-center">
                                        There are many pains which caused by having bad posture, such as scoliosis, back pain, pinched nerve, etc.
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md btn-outline-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Kids">
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
    <div class="row">
        <div class="col-lg-6 p-0  wow fadeInDownBig" data-wow-delay="0.6s">
            <div id="program-3">
                <div class="w-100 h-100 p-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center wow fadeIn" data-wow-delay="1s" style="border:1px solid #fff">
                        <div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <span style="font-size: 30px; font-weight: 600">Kids</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 pl-4 pr-4 d-flex justify-content-center">
                                    <span class="text-center">
                                        Teach your children from a young age to have good movement habits and to keep them active,
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md btn-outline-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Kids">
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
        <div class="col-lg-6 p-0 wow fadeInDownBig" data-wow-delay="0.8s">
            <div id="program-4">
                <div class="w-100 h-100 p-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center wow fadeIn" data-wow-delay="1s" style="border:1px solid #fff">
                        <div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <span style="font-size: 30px; font-weight: 600">Senior</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 pl-4 pr-4 d-flex justify-content-center">
                                    <span class="text-center">
                                        Senior program is perfectly fits for seniors who are hardly move their body.
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md btn-outline-white rounded-pill text-capitalize" style="font-weight:600; font-size:14px;" onclick="sendMessage(this);" data-message-id="Kids">
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
    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 z-depth-0 border-0 wow fadeInDown">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="program_5">
                                    <div class="p-4 w-100 h-100">
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center border wow fadeIn" data-wow-delay="1s">
                                            <div>
                                                <div class="row mt-4">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:25px; font-weight:700" class="text-white">Body Shaping</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:14px; font-weight:400" class="text-white">To help you achieve your dream body</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                                        <button type="button" class="btn btn-md rounded-pill btn-outline-white text-capitalize m-0" onclick="sendMessage(this)" data-message-id="Body Shaping" style="font-weight:600">
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
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 z-depth-0 border-0 wow fadeInDown">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="program_6">
                                    <div class="p-4 w-100 h-100">
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center border wow fadeIn" data-wow-delay="1s">
                                            <div>
                                                <div class="row mt-4">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:25px; font-weight:700" class="text-white">Pain Management</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:14px; font-weight:400" class="text-center text-white">There are many pains which caused by having bad posture, such as scoliosis, back pain, pinched nerve, etc.</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                                        <button type="button" class="btn btn-md rounded-pill btn-outline-white text-capitalize m-0" onclick="sendMessage(this)" data-message-id="Pain Management" style="font-weight:600">
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
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 z-depth-0 border-0 wow fadeInDown">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="program_7">
                                    <div class="p-4 w-100 h-100">
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center border wow fadeIn" data-wow-delay="1s">
                                            <div>
                                                <div class="row mt-4">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:25px; font-weight:700" class="text-white">Kids</span>
                                                    </div>
                                                </div>
                                                <div class='row mt-4'>
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:14px; font-weight:400" class="text-center text-white">Teach your children from a young age to have good movement habits and to keep them active,</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                                        <button type="button" class="btn btn-md rounded-pill btn-outline-white text-capitalize m-0" onclick="sendMessage(this)" data-message-id="Kids" style="font-weight:600">
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
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 z-depth-0 border-0 wow fadeInDown">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="program_8">
                                    <div class="p-4 w-100 h-100">
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center border wow fadeIn" data-wow-delay="1s">
                                            <div>
                                                <div class="row mt-4">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:25px; font-weight:700" class="text-white">Senior</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size:14px; font-weight:400" class="text-center text-white">Senior program is perfectly fits for seniors who are hardly move their body.</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                                        <button type="button" class="btn btn-md rounded-pill btn-outline-white text-capitalize m-0" onclick="sendMessage(this)" data-message-id="Senior" style="font-weight:600">
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
            </div>
        </div>
    {{-- </div> --}}
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