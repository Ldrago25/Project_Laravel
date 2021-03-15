@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : Create Package')
@section('user',$name)

@section('content')

    <div class="create">
        <div id="package" class="inner grid">
            <form class="form" action="{{route("package.form")}}" method="POST">
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
                <div class="mb-2"><h2 class="title">Package Creation</h2></div>
                <div class="mb-2">
                    <label for="internet">Internet Plan</label>
                    <select id="internet" name="internet" class="form-control" onchange="validate();">
                        <option value="" selected>None</option>
                        @foreach ($internets as $item)
                            <option value={{$item->id}}>{{$item->plan}}-{{$item->megas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="cable">Cable Plan</label>
                    <select id="cable" name="cable" class="form-control" onchange="validate();">
                        <option value="">None</option>
                        @foreach ($cables as $item)
                            <option value={{$item->id}}>{{$item->plan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="telefonia">Phone Plan</label>
                    <select id="telefonia" name="telefonia" class="form-control" onchange="validate();">
                        <option value="">None</option>
                        @foreach ($telefonias as $item)
                            <option value={{$item->id}}>{{$item->plan}}-{{$item->minutos}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="monto">Price</label>
                    <input class="form-control" id="monto" type="number" name="monto" required>
                </div>
                <div class="mb-2">
                    <button id="sub" class="btn btn-default active" disabled="true" type="submit">Create Package</button>
                    <a class="btn btn-default active" href="{{route("user.admin")}}">Back</a>
                </div>
            </form>
        </div>   

        <div id="message" class="message">
            @php
                if(isset($_SESSION["package"])&&$_SESSION["package"]=='finish'):
            @endphp
                <script>viewmessage('Successfully created package', 'package')</script>
            @php
                unset($_SESSION["package"]);
                endif;
            @endphp    
        </div>        

    </div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>