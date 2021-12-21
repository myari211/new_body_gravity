@extends('guest.layout.app')
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
</style>
<div class="row">
    <div class="col-lg-12">
        <div id="header_banner"></div>
    </div>
</div>
@endsection