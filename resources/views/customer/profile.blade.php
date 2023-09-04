@extends('customer.layouts.app')
@section('content')
    <div class="d-block d-lg-none">
        <div class="row">
            <div class="col-12">
                <div class="card bg-primary">
                    <div class="card-body bg-primary">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                @if(Auth::user()->avatar != null)
                                    <img src="{{ asset(url('/').'/avatar/'.Auth::user()->avatar) }}" style="width: 70px; height: 70px;" class="rounded-circle">
                                @else
                                    <img src="{{ asset(url('/').'/image/body_black.jpeg') }}" style="width: 70px; height: 70px;" class="rounded-circle">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <span class="text-white">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 d-flex justify-content-center">
                                <span class="text-white" style="font-size: 10px;">{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px;" class="text-white">All Session</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span class="text-white">{{ $package }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px;" class="text-white">Session on This Month</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span class="text-white">{{ $package }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
           <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <span style="font-size: 10px;">Profile</span>
                        </div>
                    </div>
                </div>
           </div>
           <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <span style="font-size: 10px;">Change Password</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card" onClick="event.preventDefault(); document.getElementById('logout').submit();">
                        <div class="card-body">
                            <span style="font-size: 10px;">Log Out</span>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" id="logout" action="{{ route('logout') }}">
                @csrf
            </form>
        </div>
    </div>
@endsection