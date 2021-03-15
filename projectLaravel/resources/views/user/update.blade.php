@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : User Edit')
@section('user',$name)

@section('content')


    <div class="create gird">

        <div id="bodyFormC">

            <form class="form" id="form" action="{{route("user.data")}}" method="POST">
                @csrf

                <div class="mb-1">
                    <label class="form-label" for="name">Name</label>
                    <input id="name" class="form-control" type="text" required value=@php echo $userE->name @endphp  name="nombreE">                  
                </div>
                <div class="mb-1">
                    <label class="form-label" for="surname">Surname</label>
                    <input id="surname" type="text" class="form-control" required value=@php echo $userE->surname @endphp  name="ApellidoE">                    
                </div>

                <div class="mb-1">
                    <label class="form-label" for="email">Email</label>
                    <input id="email" type="email" class="form-control" required value=@php echo $userE->email @endphp  name="correo">
                </div>

                <div class="mb-1">
                    <label class="form-label" for="rol">Rol</label>
                    <input id="rol" type="text" class="form-control" required value=@php echo $userE->rol @endphp  name="rol">
                </div>

                <div class="mb-1">
                    <button class="btn btn-default active" type="submit">Edit</button>
                    <a class="btn btn-default active" href="{{route("user.show")}}">Back</a>
                </div>

                
            </form>

        </div>

    </div>
    
@endsection

<script src="{{URL::asset('js/code.js')}}"></script>