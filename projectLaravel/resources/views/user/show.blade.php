<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <div>
        <h1>
            Lista de usuarios
        </h1>
    </div>
    <div>
        <table style="width: 100%">
            <tr>
                <td><h3>Nombre</h3></td>
                <td><h3>Apellido</h3></td>
                <td><h3>Email</h3></td>
                <td><h3>Numero de paquete asociado</h3></td>
                <td><h3>Rol</h3></td>
                <td><h3>Accion</h3></td>
                <td><h3>Accion</h3></td>
            </tr>
        @foreach ($users as $item)
        <tr>
            <td><h4>{{$item->name}}</h4></td>
            <td><h4>{{$item->surname}}</h4></td>
            <td><h4>{{$item->email}}</h4></td>
            <td><h4>{{$item->package_id}}</h4></td>
            <td><h4>{{$item->rol}}</h4></td>
            <td><a href="{{route("user.edit",$item->id)}}">Editar</a></td>
            <td><a href="{{route("user.destroy",$item->id)}}">Borrar</a></td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>