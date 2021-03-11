<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes</title>
</head>
<body>
    <div>
        <h1>
            Solicitudes para cambios de planes
        </h1>
    </div>
    <div>
        <table style="width: 100%">
            <tr>
                <td>Nombre</td>
                <td>Email</td>
                <td>Paquete asociado</td>
                <td>Accion</td>
                <td>Accion</td>
            </tr>
            @foreach ($autorizacions as $item)
            <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->package_id_associated}}</td>
            <td><a href="{{route("autorizacion.Update",[$item->id,$item->user_id])}}">Confirmar</a></td>
            <td><a href="{{route("autorizacion.destroy",$item->id)}}">Denegar</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>