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
			<h1>Nueva Licencia Paso 2</h1>
			</div>
			<div>
			<h5 style="color:red;">Llena los campos que se piden.</h5>
		</div>
			<br>
		<div id="contenedor">
				<div class="col-md-4">
				Test medico:
				</div>
				<input name="medico" type="file" value="Search">
		</div>
		<br>
		<div id="contenedor">
				<div class="col-md-4">
				Donar organos:
				</div>
				Si <input name="s" type="radio" class="archivo">
				No <input name="n" type="radio" class="archivo">
		</div>
		<br>
		<div id="contenedor">
				<div class="col-md-4">
				Subir foto:
				</div>
				<input name="foto" type="file" class="archivo">
		</div>
		<br>
		<div id="contenedor">
				<div class="col-md-4">
				Comprobante de domicilio:
				</div>
				<input name="myFile" type="file" class="archivo">
		</div>
		<br>
		<div id="contenedor">
				<div class="col-md-4">
				Ingrese telefono celular:
				</div>
				<input name="cel" type="text" class="input-50">
		</div>
		<br>
		<div id="contenedor">
				<div class="col-md-4">
				Codigo postal:
				</div>
				<input name="cp" type="text" class="input-50">
		</div>
		<br>
		<div align="center"> 
			<a type="button" class="btn btn-default" href="{{route('generalicencia')}}">Generar licencia</a>
		</div>
		

	</div>
</div>
<div class="container">
	@include ('templates.partials.footer')
	
</div>

</body>
</html>