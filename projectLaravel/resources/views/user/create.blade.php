<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/userValidate.css')}}" type="text/css" media="all">
    <title>Create</title>
</head>
<body>
    <div id="headerTittle">
        <h1>Registrar usuario</h1>
    </div>
    <div id="bodyForm">
        <!-- formulario para los datos del login-->
       
        <form  id="form" action="{{route("user.form")}}" method="POST">
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
                Nombre
            </label>
            <input type="text" name="name" required>
            <label>
                Apellido
            </label>
            <input type="text" name="surname" required>
            <label>
               Email
            </label>
            <input type="text" name="email" required>
            <label>
                Contraseña
             </label>
             <input type="password" name="password" required>
             <label>
              Repita la Contraseña
             </label>
             <input type="password" name="password1" required>
            <button type="submit" id="buttonLogin">Registrar</button>
            @php
            if(isset($_SESSION["error"])&&$_SESSION["error"]=='contrasenias no iguales'):
            @endphp
            <h5>Contraseñas no coinciden </h5>
            @php
            unset($_SESSION["error"]);
            endif;
            @endphp
            @php
            if(isset($_SESSION["error"])&&$_SESSION["error"]=='finish'):
            @endphp
            <h5>Usuario registrado con exito</h5>
            @php
            unset($_SESSION["error"]);
            endif;
            @endphp
            @php
            if(isset($_SESSION["error"])&&$_SESSION["error"]=='correo repetido'):
            @endphp
            <h5>Ya existe este correo</h5>
            @php
            unset($_SESSION["error"]);
            endif;
            @endphp
        </form>
       
    </div>
</body>
</html>