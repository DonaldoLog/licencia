<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
                <title> Licencia</title>
                <link href="css/bootstrap.css" rel="stylesheet">
                <link rel="stylesheet" href="css/estilos.css">
                <script src="js/jquery.js"></script>
                <script src="js/main.js"></script></head>
<body>
	<div class="container">
	<div id="wrapper">
    		@include ('templates.partials.header')
    </div>


	<div class="container col-md-3 col-sm-3" id="wrapper3">
		@include ('templates.partials.sidebar')
	</div>

	<div class="container col-md-9 col-sm-9" id="wrapper3">
		<div>
			<h1>Documentos para tramitar licencia</h1>
		</div>
		<div id="contenedor">
			<div>* Identificacion oficial vigente. Las identificacion que son aceptadas en este caso son:</div>
				- Credencial para votar. 	<br>
				- Cartilla del servicio militar. <br>
				- Cédula profesional o pasaporte. <br>
			En el caso de residentes extranjeros en el pais se solicita un documento que confirme su estancia legal en México.
<br>
			<div>* Comprobante de domicilio. Los que se aceptan son los siquientes: </div>
				- Boleta de impuesto predial. <br>
				- Recibos de luz, agua o telefono, ademas de estado de cuenta bancaria.
<br>
			<div>* Comprobante de pago de derechos.</div>
		</div>
		
		
</div>

</div>
<div class="container">@include ('templates.partials.footer')</div>
</body>
</html>