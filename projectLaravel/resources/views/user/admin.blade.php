<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CableUnet</title>
</head>
<body>
    <div>
        <h1>Bienvenido Administrador</h1>
        <h3>{{$_SESSION["user"]->name}} {{$_SESSION["user"]->surname}}</h3>
    </div>
    <div>
        <form action="{{route("internet.show")}}" method="GET">
            @csrf
            <button type="submit">Crear servicio de Internet</button>
       </form>
       <form action="{{route("cable.show")}}" method="GET">
           @csrf
           <button type="submit">Crear servicio de Cable</button>
      </form>
      <form action="{{route("telefonia.show")}}" method="GET">
        @csrf
        <button type="submit">Crear servicio de Telefonia</button>
      </form>
      <form action="{{route("package.show")}}" method="GET">
        @csrf
        <button type="submit">Crear paquete de servicios</button>
      </form>
    </div>
    <div>
        <a href="{{route("user.show")}}">Administrar Usuarios</a>
        <br>
        <a href="{{route("autorizacion.show")}}">Solicitudes para cambio de planes</a>
    </div>
</body>
</html>