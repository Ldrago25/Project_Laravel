<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <div>
        <h1>
            Editar usuario
        </h1>
    </div>
    <div>
        <form action="{{route("user.data")}}" method="POST">
            @csrf
            <label>
                Nombre
            </label>
            <input required value=@php echo $userE->name @endphp  name="nombreE">
            <label>
                Apellido
            </label>
            <input required value=@php echo $userE->surname @endphp  name="ApellidoE">
            <label>
                Email
            </label>
            <input required value=@php echo $userE->email @endphp  name="correo">
            <label>
                Rol
            </label>
            <input required value=@php echo $userE->rol @endphp  name="rol">
            <button type="submit">Editar</button>
        </form>
    </div>
    
</body>
</html>