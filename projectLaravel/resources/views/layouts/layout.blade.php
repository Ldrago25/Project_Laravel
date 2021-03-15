<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon"   href="{{URL::asset('img/fav.png')}}" type="image/png" />
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}?v=<?php echo time(); ?>" type="text/css" media="all">
    <link rel="stylesheet" href="{{URL::asset('css/home.css')}}?v=<?php echo time(); ?>" type="text/css" media="all">
    
    <title>@yield('title')</title>
</head>
<body id="layout">
    <header class="header">
        <div class="bg-dark">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
                    <div class="container-fluid row">
                    <span class="navbar-brand col-xs-3" href="#">cableUnet</span>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav w-100 d-flex justify-content-end col-xs-9">

                                @php

                                    use Illuminate\Support\Facades\Route;

                                    if (Route::currentRouteName()=='/home'){
                                        $home = "btn nav-item nav-link active";

                                    }else{
                                        $home = "btn nav-item nav-link";
                                    }
                                    if (Route::currentRouteName()=='/userLogin'){
                                        $log = "btn nav-item nav-link active";
                                    }else{
                                        $log = "btn nav-item nav-link";
                                    }
                                    if (Route::currentRouteName()=='/userCreate'){
                                        $create = "btn nav-item nav-link active";
                                    }else{
                                        $create = "btn nav-item nav-link";
                                    }

                                @endphp
                            
                                <a id="home" class="{{$home}}" href="{{route("/home")}}" >Home</a>
                                <a id="log" class="{{$log}}" href="{{route("/userLogin",'null')}}" >Sign In</a>
                                <a id="create" class="{{$create}}" href="{{route("/userCreate",'null')}}" >Sign Up</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section>
        <div>@yield('content')</div>
    </section>
    
    <section>
        <footer class="text-center footer-style bg-dark">
            <div class="container">
                <div class="text-center">
                    <h6>Brandon Vargas | Carlos Ceballo</h6>
                    <h6>@php echo date('Y'); @endphp</h6>
                </div>
            </div>
        </footer>
    </section>

    <script src="{{URL::asset('js/app.js')}}"></script>
</body>
</html>