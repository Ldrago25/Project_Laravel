@extends('layouts.layout')

@section('title', 'Login')

@section('content')

    <div class="login">

        <div id="bodyForm">
            <!-- formulario para los datos del login-->
        
            <form class="form" id="form" action="{{route("user.validate")}}" method="POST">
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

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="pass">Password</label>
                    <input id="pass" type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <button class="btn btn-default active" type="submit" id="buttonLogin">Login</button>
            </form>
        </div>

        <div id="message" class="message">
            @php
                if($valueLogin=='contrasenia erronea'):
            @endphp
                <script>viewmessage('Incorrect password', 'bodyForm')</script>
            @php
                endif;
                
                if($valueLogin=='usuario no encontrado'):
            @endphp
                <script>viewmessage('User not found', 'bodyForm')</script>
            @php
                endif;
            @endphp
        </div>


    </div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>