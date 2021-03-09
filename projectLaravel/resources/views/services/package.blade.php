<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paquete de servicios</title>
</head>
<body>
    <div>
        <h1>
            Creacion de paquede con servicios
        </h1>
    </div>
    @php
        if(isset($_SESSION["package"])&&$_SESSION["package"]=='finish'):
    @endphp
        <h3>
           Paquete creado con exito
        </h3>
    @php
    unset($_SESSION["package"]);
    endif;
    @endphp
    <form action="{{route("package.form")}}" method="POST">
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
        <div>
            <h1>Internet</h1>
            <h3>plan mas megas</h3>
        </div>
        <div>
            <select name="internet">
                <option value="">No cargar</option>
                @foreach ($internets as $item)
                    <option value={{$item->id}}>{{$item->plan}}-{{$item->megas}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <h1>Cable</h1>
            <h3>plan</h3>
        </div>
        <div>
            <select name="cable">
                <option value="">No cargar</option>
                @foreach ($cables as $item)
                    <option value={{$item->id}}>{{$item->plan}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <h1>Telefonia</h1>
            <h3>plan mas minutos</h3>
        </div>
        <div>
            <select name="telefonia">
                <option value="">No cargar</option>
                @foreach ($telefonias as $item)
                    <option value={{$item->id}}>{{$item->plan}}-{{$item->minutos}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <h2>
                Monto del paquete
            <h2>
            <input type="text" name="monto" required>
        </div>
        <div>
            <button type="submit">
                Crear paquete
            </button>
        </div>
    </form>
    
    
    
</body>
</html>