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
	<div class="container" align="center">
	<div class="container col-md-12 col-sm-12" id="wrapper3">
		<div>
			<h1 style="color:red;">IMPORTANTE</h1>
		</div>
		<div id="contenedor5">
			De preferencia realizar su pago en tiendas OXXO y bancos participantes: Banorte, Banamex, BBVA Bancomer, Santander, HSBC.
		</div>
		<br>
		<div align="center" class="form-group">
			<div class="col-md-6"><img src="images/logo1.png" style="width: 170px; height: 80px; padding-top: 10px;"></div>
			<div>
				Total a pagar: {!!$proceso->costo!!}
			</div>
			<div>
				Referencia OXXO: {!!$proceso->referencia!!}
			</div>
			<div>
				Folio de Usuario: {!!$usuario->folio!!}
			</div>
			<div class="">
				<img src="images/oxxo.png" style="width: 150px; height: 80px; padding-top: 10px;">

			</div>
			<div class="col-md-12"><img src="images/abajo.jpg" style="width: 700px; height: 100px; padding-top: 10px;"></div>
			<br>
			<br>
			

		</div>

	</div>
</div>
</body>
</html>
