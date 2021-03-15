@extends('layouts.layout')
@section('title', 'Programation')

@section('content')

<div class="overlay">

    <form id="search" class="form" action="{{route("search.information")}}" method="post">
        @csrf
        <input class="form-control" type="text" name="name" id="name" placeholder="Search channel or program" required>
        <button  class="btn btn-default active" type="submit"><img id="seb" src="{{URL::asset('img/search.png')}}"></img></button>
    </form>



    <div id="pro" class="programation grid">

        <table class="table table-dark table-responsive">
            <tr>
                <td></td>
                @for($i=0; $i<24; $i++)
                    <td>{{$i}}:00</td>
                @endfor
            </tr>
            @if($valor==0)

                @foreach($canals as $item)

                @php
                    $count = 0;
                @endphp
                    <tr>
                        <td>{{$item->name}}</td>
                        @foreach($item->programations as $item2)
                                @php

                                    if($count<15){
                                        echo "<td>".$item2->name."</td>";
                                    }
                                    $hour = rand(1,3);
                                    
                                    for($j=0; $j<$hour; $j++){
                                
                                        $count ++;
                
                                        if($count<15){
                                            echo "<td></td>";
                                        }
                                    }
                
                                @endphp
                            
                        @endforeach
                    </tr>
                @endforeach
            @endif
                                    
            @if($valor==1)

                <tr>
                    <td>{{$_SESSION['canal']->name}}</td>

                    @php
                        $count = 0;
                        $program = $_SESSION['canal']->programations;
                    @endphp

                    @foreach($program as $item)
                        <td>{{$item->name}}</td>

                        @php 
                            $hour = rand(1,3);
                        
                          
                            for($j=0; $j<$hour; $j++){
                        
                                $count ++;
        
                                if($count<15){
                                    echo "<td></td>";
                                }
                            }
                        @endphp
                    @endforeach
                </tr>
            @endif

            @if($valor==2)

                <tr>
                    <td>{{$_SESSION['canalp']->name}}</td>

                    @php
                        $count = 0;
                    @endphp

                    @foreach($_SESSION['canalp']->programations as $item)
                        

                        @php
                            
                            if($item->name == $_SESSION['programation']->name){
                                echo "<td id='tds'>".$item->name."</td>";
                            }else{
                                echo "<td>".$item->name."</td>";
                            }
                            
                            $hour = rand(1,3);
                        
                            for($j=0; $j<$hour; $j++){
                        
                                $count ++;
        
                                if($count<15){
                                    echo "<td></td>";
                                }
                            }
                        @endphp
                    @endforeach
                </tr>
            @endif
        
        
        </table>

    </div>

    <div id="message" class="message">
            @php
                if(isset($_SESSION['result'])):
            @endphp
                    <script>viewmessage('Channel or program not found', 'pro')</script>
            @php
                    unset($_SESSION['result']);
                endif;
            @endphp
    </div>
</div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>