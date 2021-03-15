@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name)
@section('user',$name)

@section('content')


    <div class="overlay">
        <div class="inner grid">
            <h2 class="title">Welcome {{$name}}</h2>

            <div class="mb-2"><a class="btn active" href="{{route("internet.show")}}">Create Internet Service</a></div>
            <div class="mb-2"><a class="btn active" href="{{route("cable.show")}}">Create Cable Service</a></div>
            <div class="mb-2"><a class="btn active" href="{{route("telefonia.show")}}">Create Telephony Service</a></div>
            <div class="mb-2"><a class="btn active" href="{{route("package.show")}}">Create Package</a></div>
            <div class="mb-2"><a class="btn active" href="{{route("user.show")}}">Manage Users</a></div>
            <div class="mb-2"><a class="btn active" href="{{route("autorizacion.show")}}">Requests for Plan Change</a></div>

        </div>            
    </div>


@endsection