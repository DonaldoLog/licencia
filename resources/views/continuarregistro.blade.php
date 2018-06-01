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
			<h1>Datos de pago</h1>
			</div>
			
			<br>
		<div>
				<div class="col-md-4">
				Ingrese ID Usuario
				</div>
				<input name="idUsuario" type="text" class="input-50">
		</div>
		<br>
		<div>
				<div class="col-md-4">
				Ingrese Referencia
				</div>
				<input name="referencia" type="text" class="input-50">
		</div>
		<br>
		<div align="center">
			 <a type="button" class="btn btn-default" href="{{route('nuevalicenciaP2')}}">Aceptar</a>
		</div>
		

	</div>
	 
</div>
<div class="container">@include ('templates.partials.footer')</div>
</body>
</html>