@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : User List')
@section('user',$name)

@section('content')

    <div class="overlay">
        <div class="cont grid">
            <table class="table table-dark table-striped table-responsive" style="width: 100%">
                <tr>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Email</td>
                    <td>Package ID</td>
                    <td>Rol</td>
                    <td>Action</td>
                    <td>Action</td>
                </tr>
                @foreach ($users as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->surname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->package_id}}</td>
                        <td>{{$item->rol}}</td>
                        <td><a class="btn btn-default tab" href="{{route("user.edit",$item->id)}}">Edit</a></td>
                        <td><a class="btn btn-default tab red" href="{{route("user.destroy",$item->id)}}">Delete</a></td>
                    </tr>
                @endforeach
                
            </table>

        </div>

        <div class="bot"><a class="btn btn-default active" href="{{route("user.admin")}}">Back</a></div>

    </div>



@endsection

<script src="{{URL::asset('js/code.js')}}"></script>