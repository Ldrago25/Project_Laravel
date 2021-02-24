<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/userLogin.css')}}" type="text/css" media="all">
    <title>Login</title>
</head>
<body>
    <div id="headerTittle">
        <h1>Login page</h1>
    </div>
    <div id="bodyForm">
        <!-- formulario para los datos del login-->
        <form  id="form" action="{{route("user.validate")}}" method="POST">
            <!--
                se crea un token para que usuarios ajenos no puedan manipular 
                los datos y enviarlos a la base de datos desde un navegador o
                luego de cierto tiempo de estar en la pagina de login y intente
                ingresar le diga servicio caucado 
            -->
            @csrf
            <!--
                se crean los textfield 
            -->
            <label>
                Inicio de sesion
            </label>
            <input type="text" name="email" placeholder="Correo electronico">
            <input type="text" name="password" placeholder="Contraseña">
            <button type="submit" id="buttonLogin">Ingresar</button>
        </form>
    </div>
</body>
</html>