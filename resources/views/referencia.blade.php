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
			<h1 style="color:red;">IMPORTANTE</h1>
		</div>
		<div id="contenedor5">
			De preferencia realizar su pago en tiendas OXXO y bancos participantes: Banorte, Banamex, BBVA Bancomer, Santander, HSBC.
		</div>
		<br>
		<div align="center" class="form-group">
			<div>
				Total a pagar:
			</div>
			<div>
				Referencia OXXO:
			</div>
			<div>
				Fecha de pago:
			</div>
			<div>
				Siguiente fecha de pago:
			</div>
			<div class="">
				<img src="images/oxxo.png" style="width: 150px; height: 80px; padding-top: 10px;">

			</div>
			<br>
			<br>
			<div class="col-md-6">
					Convenio BBVA Bancomer <br>
					numero <br><br>
					Convenio Banamex <br>
					numero <br><br>
					Convenio Banorte <br>
					numero <br><br>
					Convenio Santander <br>
					numero <br><br>
					Convenio HSBC <br>
					numero <br><br>
			</div>
			<div class="col-md-6">
					Referencia BBVA Bancomer <br>
					numero <br><br>
					Referencia Banamex <br>
					numero <br><br>
					Referencia Banorte <br>
					numero <br><br>
					Referencia Santander <br>
					numero <br><br>
					Referencia HSBC <br>
					numero <br><br>

			</div>

		</div>

	</div>

</div>
@include ('templates.partials.footer')
</body>
</html>
