@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title',$name)
@section('user',$name)

@php
    if(isset($_SESSION["auto"])&&$_SESSION["auto"]=='finish'){
        $btn = "btn disabled";
    }else{
        $btn = "btn";
    }
@endphp

@section('content')

    @php
        if($_SESSION["user"]->package_id==''):
    @endphp

    <div class="overlay">
        <div class="inner">
            <h2 class="title">Welcome {{$name}}</h2>
            <p>
                Welcome, you have not yet bought any package, click on buy package
            </p>
            <a class="btn active" href="{{route("user.packages")}}">Buy Package</a>
        </div>            
    </div>


    @php
        endif;
    @endphp

    @php
        if($_SESSION["user"]->package_id!=''):
    @endphp

    <div class="overlay">

        <div id="aux">
            <div class="inner grid">
                <h2 class="title">Welcome {{$name}}</h2>

                <a class="btn" href="{{route("user.factura")}}">See Invoice</a>
                <a class="{{$btn}}" href="{{route("user.autorizacion")}}">Package Change</a>
            </div>          
        </div>
          
        <div id="message" class="message">
            @php
                endif;
            @endphp
            @php
                if(isset($_SESSION["auto"])&&$_SESSION["auto"]=='finish'):
            @endphp
                <script>viewmessage('Application sent successfully', 'aux')</script>
            @php
                unset($_SESSION["auto"]);
                endif;
            @endphp    
        </div>  
    </div>
@endsection

<script src="{{URL::asset('js/code.js')}}"></script>