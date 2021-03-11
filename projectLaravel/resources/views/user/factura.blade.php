<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facutra</title>
</head>
<body>
        <div style="width: 100%">
            <h1>Factura de plan</h1>
        </div>
        <div>
            <table style="width: 100%">
                <tr>
                    <td>
                        Nombre de Usuario
                    </td>
                    <td>
                        Email
                    </td>
                    <td>
                        Numero de paquete asociado
                    </td>
                    <td>
                        Plan de internet 
                    </td>
                    <td>
                        Plan de cable
                    </td>
                    <td>
                       Plan de telefonia
                    </td>
                    <td>
                        Monto a pagar
                     </td>
                </tr>
                <tr>
                    <td>
                        @php
                            echo '<h3> </h3>'.$_SESSION["user"]->name;
                        @endphp
                    </td>
                    <td>
                        @php
                         echo '<h3> </h3>'.$_SESSION["user"]->email;
                        @endphp
                    </td>
                    <td>
                        @php
                         echo '<h3> </h3>'.$_SESSION["user"]->package_id;
                        @endphp
                    </td>
                    <td>
                        @php
                        if($package->internet!='')
                        echo '<h3> </h3>'.$package->internet->plan;
                       @endphp
                    </td>
                    <td>
                        @php
                        if($package->cable!='')
                        echo '<h3> </h3>'.$package->cable->plan;
                       @endphp
                    </td>
                    <td>
                        @php
                        if($package->telefonia!='')
                        echo '<h3> </h3>'.$package->telefonia->plan;
                       @endphp
                    </td>
                    <td>
                        @php
                         echo '<h3> </h3>'.$package->monto;
                        @endphp
                     </td>
                </tr>
            </table>
        </div>
</body>
</html>