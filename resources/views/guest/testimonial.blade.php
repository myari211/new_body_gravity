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
        url({{ asset('image/tools.jpg') }});
    }
</style>
<div id="header_banner">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-size:30px; font-weight:600">What they say about us ?</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-4 d-flex">
            <img src="{{ asset('image/body_black.jpeg') }}" class="w-100">
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 d-flex justify-content-center">
            <span style="font-size:20px;">
                What do you think about our service? Leave us comment here
            </span>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-lg-12 d-flex justify-content-center">
            <button type="button" class="btn btn-md rounded-pill blue-gradient z-depth-0 text-capitalize" data-toggle="collapse" data-target="#testimoni" aria-expanded="false" aria-controls="testimoni">
                Click Here
                <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
            </button>
        </div>
    </div>
    <div class="collapse" id="testimoni">
        <form method="post" action="{{ route('testimonial_post') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-4">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-size:20px; font-weight:500" class="text-white">
                        Tell us what is your impression?
                    </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="form-group">
                        <small class="text-white">First Name *</small>
                        <input type="text" class="form-control" name="first_name" placeholder="Type your First Name here ..." required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <small class="text-white">Last Name</small>
                        <input type="text" class="form-control" name="last_name" placeholder="Type your Last Name here ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <small class="text-white">Email *</small>
                        <input type="email" name="email" class="form-control" placeholder="Type your Email here ..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <small class="text-white">Job *</small>
                        <input type="text" name="job" class="form-control" placeholder="Type your Job here ..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <small class="text-white">Your Testimoni *</small>
                        <textarea class="form-control" id="testimony" name="testimony" rows="6" placeholder="Type your review here ..." required></textarea>
                      </div>                      
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <small class="text-white">Choose Image</small>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="in" name="file">
                            <label class="custom-file-label" for="customFileLang">Choose Image</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-md rounded-pill z-depth-0 blue-gradient text-capitalize">
                        Send <i class="fas fa-paper-plane animated rubberBand infinite slow ml-3"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="bg-white pt-4">
    <div class="container">
        <div class="row">
            @foreach($testimonial as $data)
                <div class="col-lg-4 mb-4">
                    <div class="card rounded-0 h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{ asset('image/imelda.png') }}" class="w-100 rounded-circle">
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span style="font-weight:600">{{ $data->first_name }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">                                            
                                            <small style="font-weight:600" class="text-muted font-italic">
                                                {{ $data->job }}
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12">
                                            <small>{{ $data->testimony }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection