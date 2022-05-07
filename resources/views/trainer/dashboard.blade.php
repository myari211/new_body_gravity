@extends('trainer.layouts.app')
@section('content')
    <span>{{ Auth::user()->email }}</span>
@endsection