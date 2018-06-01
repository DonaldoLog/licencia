<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <title>Licencia</title>

    </head>
    <body>
         <body>
        <div class="container">
            <div id="wrapper">
                @include ('templates.partials.header')
                @include ('templates.partials.navbar')
            </div>
        <div id="wrapper2">
            <a type="button" class="btn btn-default" href="{{route('documentos')}}" style="float: left;">DOCUMENTOS</a>
             <a type="button" class="btn btn-default" href="{{route('contregistro')}}" style="float: right;">CONTINUAR REGISTRO</a>
        </div>

        <div>
            <h1>Tramita la licencia de conducir en Veracruz</h1>
            <hr width="75%"/>
            <hr width="85%"/>

        </div>
        <div id="wrapper2" align="center">
            <img src="images/tramita.jpg" alt="" style="height: 500px; width: 800px;">
        </div>
        <br>
        <div class="container" id="wrapper">
            Para circular por las calles del estado de Veracruz es necesario contar con una licencia de conducir. Una licencia te permite conducir cualquier tipo de vehiculo automotor que no exceda las 12 plazas y que transporte personas unicamente de manera particular, es decir, que a menos que seas chofer, esta es la licencia que nesecitas para circular

            Cualquier vehiculo que no cumpla con lo anterios, o que ademas exceda las 3.5 toneladas debe portar una licencia diferente, la tipo B.
        </div>

            @include ('templates.partials.footer')
        </div>

    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
