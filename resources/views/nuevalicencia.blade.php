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
			<h1>Nueva Licencia</h1>
		</div>
		<div id="contenedor">
			Llena los campos con tus datos personales.
		</div>
		<br>
		<div id="contenedor">
				<div>
					<div class="col-md-4">Apellido Paterno : </div>
				
				<input type="text" class="input-50">
				</div><br>
				<div>
						<div class="col-md-4">Apellido Materno : </div>
						<input type="text" class="input-50">
				</div><br>
				<div>
						<div class="col-md-4">Nombre (s) : </div>
						<input type="text" class="input-50">
				</div>
		</div>
		<br>
		<div id="contenedor">
			<div id="contenesdor2">
				<div class="col-md-4">Curp : </div>
				<input type="text" class="input-50">
				</div>
		</div>
		<br>

		<div id="contenedor" align="center">
				<div  class="col-md-6">
				 	<select>
						  <option value="0">Seleccionar tipo de licencia</option>
						  <option value="1">Automovilista</option>
						  <option value="2">Chofer</option>
						  <option value="3">Motocicleta</option>
					</select> 
				</div>

				<div class="col-md-6" align="center">
					 	<select>
						  <option value="0">Seleccionar periodo</option>
						  <option value="1">1 año - $560.00</option>
						  <option value="2">2 año - $1000.00</option>
						  <option value="3">3 año - $1260.00</option>
						</select> 
				</div>
				<br><br>
			<div align="center">
				<button type="button" class="boton" onclick = "location='nuevaLicenciaP2.php'">Aceptar</button></div>
				
			</div>
	<br>
			<div  id="suplente" class="col-md-3"></div>
			<div id="contenedor3" class="col-md-6">
				<div>Tipo de licencia:</div>
				<div>Monto a pagar:</div>
				<div>ID Usuario:</div>
				<div>Referencia:</div>
			</div>
			<div  id="suplente" class="col-md-3"></div>
			
	</div>
			<div align="center">
				 <a type="button" class="btn btn-default" href="{{route('referencia')}}">Ver referencia</a>
			</div>	
@include ('templates.partials.footer')
</div>
</body>
</html>