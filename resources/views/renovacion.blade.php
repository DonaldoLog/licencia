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
			<h1>Renovacion de licencia</h1>
		</div>
		<div>
			<h3>Aviso</h3>
		</div>
		<div id="contenedor5">
			Para la renovacion es necesario presentar la liencia vencida, si no la tiene tendra que tramitar una reposicion, y en el caso de permisos de menos o extranjero que requieran hacer un canje a automovilista chofer o motociclista tendrá que dirigirse al apartado de nueva licencia.
		</div>
		<br>
		<div id="contenedor">
				<div>
					<div class="col-md-3">Introducir folio de licencia*</div>
				
				<input type="text" class="input-50">
				<input type="button" value="Buscar">
				</div>
		</div>
		<br>

		<div id="contenedor">
			<div class="col-md-3">Tipo de licencia que solicita*</div>
				<div>
				 	<select>
						  <option value="0">Seleccionar tipo de licencia</option>
						  <option value="1">Automovilista</option>
						  <option value="2">Chofer</option>
						  <option value="3">Motocicleta</option>
					</select> 
				</div>
		</div>
				<br>

				<div id="contenedor">
			<div class="col-md-3">Periodo*</div>
				<div>
					 	<select>
						  <option value="0">Seleccionar periodo</option>
						  <option value="1">1 año - $560.00</option>
						  <option value="2">2 año - $1000.00</option>
						  <option value="3">3 año - $1260.00</option>
						</select> 
				</div>
		</div>
				
			
	<br>
			
	</div>
	<div align="center">
				<button type="button" class="boton" onclick = "location='nuevaLicenciaP2.php'">Generar referencia de pago</button>
			</div>	
@include ('templates.partials.footer')
</div>
</body>
</html>