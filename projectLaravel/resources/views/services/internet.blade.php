<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicio de Internet</title>
</head>
<body>
    <div>
        <h1>Crear servicio de Internet</h1>
    </div>
    <div>
        <form  id="form" action="{{route("internet.form")}}" method="POST">
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
                Plan
            </label>
            <input type="text" name="plan" required>
            <label>
                Megas
            </label>
            <input type="text" name="megas" required>
            <button type="submit" id="buttonLogin">Crear servicio</button>
            @php
                if(isset($_SESSION["internet"])&&$_SESSION["internet"]=='finish'):
            @endphp
            <h3>
                Servicio creado con exito
            </h3>
            @php
            unset($_SESSION["internet"]);
                endif;
            @endphp
        </form>
    </div>
</body>
</html>