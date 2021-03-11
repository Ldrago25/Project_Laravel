<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CableUnet</title>
</head>
<body>
    @php
        if($_SESSION["user"]->package_id==''):
    @endphp
    <div >
        <h1>Bienvenido Usuario<h1>
        <h3> {{$_SESSION["user"]->name}}</h3>
    </div>
    <div>
        <form action="{{route("user.packages")}}" method="GET">
            @csrf
            <button type="submit">Comprar paquete</button>
        </form>
    </div>
    @php
        endif;
    @endphp
    @php
        if($_SESSION["user"]->package_id!=''):
    @endphp
    <div >
        <h1>Bienvenido Usuario<h1>
        <h3> {{$_SESSION["user"]->name}}</h3>
    </div>
    <div>
        <form action="{{route("user.factura")}}" method="GET">
             @csrf
             <button type="submit">Ver factura a pagar</button>
        </form>
        <form action="{{route("user.autorizacion")}}" method="GET">
            @csrf
            <button type="submit">Cambiar plan del paquete</button>
       </form>
    </div>
@php
    endif;
@endphp
@php
    if(isset($_SESSION["auto"])&&$_SESSION["auto"]=='finish'):
@endphp
<h3>Solicitud enviada con exito, esperar respuesta por los Administradores</h3>
@php
unset($_SESSION["auto"]);
    endif;
@endphp
</body>
</html>