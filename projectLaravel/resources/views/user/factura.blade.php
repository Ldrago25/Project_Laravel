@extends('layouts.dashboard')

@php
    $name = $_SESSION["user"]->name;
@endphp

@section('title', $name.' : See Invoice')
@section('user',$name)

@section('content')

    <div class="overlay">

        <div class="cont grid">
            <table class="table table-dark table-striped table-responsive">

                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Package ID</td>
                    <td>Internet Plan</td>
                    <td>Cable Plan</td>
                    <td>Phone Plan</td>
                    <td>Amount</td>
                </tr>
                <tr>
                    <td>
                        @php
                            echo $_SESSION["user"]->name;
                        @endphp
                    </td>
                    <td>
                        @php
                            echo $_SESSION["user"]->email;
                        @endphp
                    </td>
                    <td>
                        @php
                            echo $_SESSION["user"]->package_id;
                        @endphp
                    </td>
                    <td>
                        @php
                            if($package->internet!='')
                                echo $package->internet->plan;
                       @endphp
                    </td>
                    <td>
                        @php
                            if($package->cable!='')
                                echo $package->cable->plan;
                       @endphp
                    </td>
                    <td>
                        @php
                            if($package->telefonia!='')
                                echo $package->telefonia->plan;
                       @endphp
                    </td>
                    <td>
                        @php
                            echo $package->monto;
                        @endphp
                     </td>
                </tr>
            </table>
              
        </div>

        <div class="bot"><a class="btn btn-default active" href="{{route("user.suscriptor")}}">Back</a></div>
        
    </div>

@endsection

<script src="{{URL::asset('js/code.js')}}"></script>