<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
                <title> Licencia</title>
                <link href="css/bootstrap.css" rel="stylesheet">
                <link href="css/estilos.css" rel="stylesheet">
                <script src="js/jquery.js"></script>
                <script src="js/main.js"></script>




    </head>
    <body><div class="container" style="padding: 30px;">
        <div class="container" style="border-top: 1px solid black;border-left: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-radius: 10px;">


           <div class="col-md-9">
            <div class="col-md-12">
                 <img src="images/logo1.png" style="width: 150px; height: 80px; padding-top: 10px;float:left;">
                <img src="images/logo2.png" style="width: 120px; height: 80px; padding-top: 10px;float:right;">
            </div>

                <div >
                   <div class="col-md-5" align="center">
                    <br><br>
                       <img src="images/chip.png" style="width: 140px; height: 90px;"><br>
                       Estados Unidos Mexicanos <br>
                       <h4>LICENCIA <br> PARA CONDUCIR</h4>
                   </div>
                   <div class="col-md-7">
                       <br><br>
                       <label for="">{!!$usuario->nombre." ".$usuario->primerAp." ".$usuario->segundoAp!!}</label>
                       <br> <br>
                       {!!$usuario->direccion!!}

                       <br>
                       CP {!!$datos->cp!!}
                       <br><br>
                       Nacimiento: <label for="">{!!$usuario->fechaNac!!}</label><br>
                       Nacionalidad: <label for="">MEXICANA</label><br>
                       CURP:<label for="">{!!$usuario->curp!!}</label><br>
                       Folio: <label for="">{!!$usuario->folio!!}</label><br>
                       Sexo: <label for="">{!!$usuario->sexo!!}</label><br>
                       Tipo de sangre: <label for="">{!!$usuario->sangre!!}</label><br>
                       Vigencia: <label for="">{!!$licencia->fechaFin!!}</label><br>
                   </div>
               </div>
           </div>

           <div class="col-md-3" align="center">
            <br><br>
               <img src="../public/storage/fotos/{!!$datos->foto!!}" style="width: 140px; height: 160px;"><br>
               No. de Licencia
               <br>
               <label for="" style="color:red;">{!!$licencia->numLicencia!!}</label>
               <br><br>
               Tipo<br>
               <h1>{!!$licencia->tipoLice!!}</h1>
           </div>

          <img src="images/foter.png" style="width: 1153px;border-radius: 10px"><br>
        </div>
</div>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
