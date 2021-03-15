@extends('layouts.layout')
@section('title', 'Sign Up')
@section('content')


    <div class="create grid">

        <div id="bodyFormC">
            <!-- formulario para los datos del login-->
        
            <form id="form" action="{{route("user.form")}}" method="POST">
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
                <div class="mb-1">

                    <label for="name" class="col-sm-10 col-form-label">Name</label>
                    <div class="col-sm-20">
                        <input id="name" class="form-control" type="text" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="surname" class="col-sm-10 col-form-label">Surname</label>
                    <div class="col-sm-20">
                        <input id="surname" class="form-control" type="text" name="surname" placeholder="Surname" required>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="email" class="col-sm-10 col-form-label">Email</label>
                    <div class="col-sm-20">
                        <input id="email" class="form-control" type="email" name="email" placeholder="name@example.com" required>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="password" class="col-sm-10 col-form-label">Password</label>
                    <div class="col-sm-20">
                        <input id="password" class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="password1" class="col-sm-10 col-form-label">Repeat Password</label>
                    <div class="col-sm-20">
                        <input id="password1" class="form-control" type="password" name="password1" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit" id="buttonCreate" class="btn btn-default active">Sign Up</button>

            </form>

            
        </div>


        <div id="message" class="message">

            @php
                if(isset($_SESSION["error"])&&$_SESSION["error"]=='contrasenias no iguales'):
            @endphp
                <script>viewmessage('Passwords do not match', 'bodyFormC')</script>
            @php
                unset($_SESSION["error"]);
                endif;
            @endphp
            @php
                if(isset($_SESSION["error"])&&$_SESSION["error"]=='finish'):
            @endphp
                <script>viewmessage('Registered user successfully', 'bodyFormC')</script>
            @php
                unset($_SESSION["error"]);
                endif;
            @endphp
            @php
                if(isset($_SESSION["error"])&&$_SESSION["error"]=='correo repetido'):
            @endphp
                <script>viewmessage('The email is already in use', 'bodyFormC')</script>
            @php
                unset($_SESSION["error"]);
                endif;
            @endphp
                
        </div>
    </div>
@endsection

<script src="{{URL::asset('js/code.js')}}"></script>