<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compra de paquetes</title>
</head>
<body>
    <div>
        <h1>
            Lista de paquetes para comprar
        </h1>
    </div>
    <div>
        <table>
        <tr>
            <td>Internet plan y megas</td>
            <td> Cable plan</td>
            <td> Telefonia plan y minutos</td>
            <td> Monto del paquete</td>
            <td> Opcion</td>
        </tr>
        @foreach ($packages as $item)
            <tr>
                
                <td>
                    @php
                        if($item->internet!=''):
                    @endphp
                    {{$item->internet->plan}}-{{$item->internet->megas}}
                    @php
                        endif;
                    @endphp
                    @php
                    if($item->internet==''):
                    @endphp
                    <h4>no hay servicio</h4>
                    @php
                        endif;
                    @endphp
                </td>

                <td>
                    @php
                    if($item->cable!=''):
                    @endphp
                    {{$item->cable->plan}}
                    @php
                        endif;
                    @endphp
                    @php
                    if($item->cable==''):
                    @endphp
                    <h4>no hay servicio</h4>
                    @php
                        endif;
                    @endphp
                </td>
                <td>
                    @php
                    if($item->telefonia!=''):
                @endphp
                 {{$item->telefonia->plan}}-{{$item->telefonia->minutos}}
                @php
                    endif;
                @endphp
                @php
                if($item->telefonia==''):
                @endphp
                <h4>no hay servicio</h4>
                @php
                    endif;
                @endphp
                </td>
                <td>{{$item->monto}}</td>
                <td><a href="{{route("user.buy",$item->id)}}">Comprar</a></td>
            </tr>
        @endforeach
        </table>
        @php
            if(isset($_SESSION["buy"])&&$_SESSION["buy"]=='update'):
        @endphp
        <h3>Paquete comprado exitosamente</h3>
        @php
        unset($_SESSION["buy"]);
            endif;
        @endphp
    </div>
</body>
</html>