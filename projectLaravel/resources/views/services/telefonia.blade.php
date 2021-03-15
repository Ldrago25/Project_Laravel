@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : Create Phone Service')
@section('user',$name)

@section('content')

    <div class="overlay">

        <div id="bodyForm" class="inner grid">
        
            <form class="form" id="form" action="{{route("telefonia.form")}}" method="POST">
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
                <div class="mb-2"><h2 class="title">Phone Service</h2></div>
                <div class="mb-3">
                    <label for="text" class="form-label">Plan Name</label>
                    <input id="text" type="text" name="plan" class="form-control" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <label for="minutos">Minutes</label>
                    <input id="minutos" type="number" name="minutos" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-default active" type="submit" id="buttonLogin">Create Service</button>
                    <a class="btn btn-default active" href="{{route("user.admin")}}">Back</a>                
                </div>

            </form>
        </div>

        <div id="message" class="message">
            @php
                if(isset($_SESSION["telefonia"])&&$_SESSION["telefonia"]=='finish'):
            @endphp
                <script>viewmessage('Service created successfully', 'bodyForm')</script>
            @php
                unset($_SESSION["telefonia"]);
                endif;
            @endphp
        </div>


    </div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>