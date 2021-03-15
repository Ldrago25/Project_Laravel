@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : Package List')
@section('user',$name)

@section('content')

    <div class="overlay">

        <div id="aux" class="cont grid">

            <table class="table table-dark table-striped table-responsive">

                <tr>
                    <td>Internet Plan</td>
                    <td>Cable Plan</td>
                    <td>Phone Plan</td>
                    <td>Price</td>
                    <td>Option</td>
                </tr>

                @foreach ($packages as $item)
                    <tr>
                        
                        <td>
                            @php
                                if($item->internet!=''):
                            @endphp
                                    {{$item->internet->plan}}-{{$item->internet->megas}}
                            @php
                                endif;
                            @endphp
                            @php
                                if($item->internet==''):
                            @endphp
                                    
                                    No service
                            @php
                                endif;
                            @endphp
                        </td>

                        <td>
                            @php
                                if($item->cable!=''):
                            @endphp
                                    {{$item->cable->plan}}
                            @php
                                endif;
                            @endphp
                            @php
                                if($item->cable==''):
                            @endphp
                                    
                                    No service
                            @php
                                endif;
                            @endphp
                        </td>
                        <td>
                            @php
                                if($item->telefonia!=''):
                            @endphp
                                    {{$item->telefonia->plan}}-{{$item->telefonia->minutos}}
                            @php
                                endif;
                            @endphp
                            @php
                                if($item->telefonia==''):
                            @endphp
                                    
                                    No service
                            @php
                                endif;
                            @endphp
                        </td>
                        <td>{{$item->monto}}</td>
                        <td><a class="btn btn-default tab" href="{{route("user.buy",$item->id)}}">Buy</a></td>
                    </tr>
                @endforeach

            </table>
        </div>

        <div id="message" class="message">
            @php
                if(isset($_SESSION["buy"])&&$_SESSION["buy"]=='update'):
            @endphp
                <script>viewmessage('Successfully purchased package', 'aux')</script>
            @php
                unset($_SESSION["buy"]);
                endif;
            @endphp
        </div>

        <div class="bot"><a class="btn btn-default active" href="{{route("user.suscriptor")}}">Back</a></div>
        
    </div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>