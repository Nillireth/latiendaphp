<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
    <h1>PAISES DE LA REGIÓN</h1>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($Paises as $pais => $infopais)
            <tr>
                <td rowspan="{{count$infopais['Ciudad'])}}">{{$pais}}</td>
                <td rowspan="{{count$infopais['Ciudad'])}}">{{$infopais["Capital"]}}</td>
                <td rowspan="{{count$infopais['Ciudad'])}}">{{$infopais["Moneda"]}}</td>   
                <td rowspan="{{count$infopais['Ciudad'])}}">{{$infopais["Poblacion"]}} Millones de habitantes</td>
            

                @foreach($infopais ["Ciudades"] as $Ciudad)
                <td>{{$Ciudad}}</td>
            
            </tr>
                @endforeach 
            @endforeach 
            
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>