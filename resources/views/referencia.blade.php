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
 @include ('templates.partials.footer')
</div>
</body>
</html>