@extends('layouts.layout')
@section('title', 'Home')

@section('content')

<div class="overlay">
    <div class="inner">
        <h2 class="title">Look the Programation</h2>
        <p>
            Look at the programming of our channels to know which plan suits you best
        </p>
        <a class="btn" href="{{route("canals.all","0")}}">Programation</a>
    </div>
</div>

@endsection
