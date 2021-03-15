@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : Package Change')
@section('user',$name)

@section('content')

    <div class="overlay">

        <div class="cont grid">
            <table class="table table-dark table-striped table-responsive">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Pack ID</td>
                    <td>Action</td>
                    <td>Action</td>
                </tr>
                @foreach ($autorizacions as $item)
                <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->package_id_associated}}</td>
                <td><a class="btn btn-default tab" href="{{route("autorizacion.Update",[$item->id,$item->user_id])}}">Yes</a></td>
                <td><a class="btn btn-default tab red" href="{{route("autorizacion.destroy",$item->id)}}">No</a></td>
                </tr>
                @endforeach
            </table>

              
        </div>

        <div class="bot"><a class="btn btn-default active" href="{{route("user.admin")}}">Back</a></div>
        
    </div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>