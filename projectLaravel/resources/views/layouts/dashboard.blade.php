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
                                <span class="navbar-brand col-xs-9">@yield('user')</span>
                                <a id="logout" class="btn nav-item nav-link" href="{{route("user.close")}}" >Logout</a>
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