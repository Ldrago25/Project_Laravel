


@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : Create Cable Service')
@section('user',$name)

@section('content')

    <div class="overlay">

        <div id="bodyForm" class="inner grid">
        
            <form class="form" id="form" action="{{route("cable.form")}}" method="POST">
                <!--
                    se crea un token para que usuarios ajenos no puedan manipular 
                    los datos y enviarlos a la base de datos desde un navegador o
                    luego de cierto tiempo de estar en la pagina de login y intente
                    ingresar le diga servicio caucado 
                -->
                @csrf
                <!--
                    se crean los textfield 
                -->
                <div class="mb-2"><h2 class="title">Cable Service</h2></div>
                <div class="mb-3">
                    <label for="text" class="form-label">Plan Name</label>
                    <input id="text" type="text" name="plan" class="form-control" placeholder="Name" required>
                </div>

                <div class="mb-3">
                    <button class="btn btn-default active" type="submit" id="buttonLogin">Create Service</button>
                    <a class="btn btn-default active" href="{{route("user.admin")}}">Back</a>                
                </div>

            </form>
        </div>

        <div id="message" class="message">
            @php
                if(isset($_SESSION["cable"])&&$_SESSION["cable"]=='finish'):
            @endphp
                <script>viewmessage('Service created successfully', 'bodyForm')</script>
            @php
                unset($_SESSION["cable"]);
                endif;
            @endphp
        </div>


    </div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>