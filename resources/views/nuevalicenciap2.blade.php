@extends('templates.main')
@section('content')
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
		<br> {!!Form::open(['route'=>'datos.licencia','method'=>'post','enctype'=>'multipart/form-data'])!!}
		{!!Form::hidden('idUsuario',$datos->idUsuario)!!}
		<div id="contenedor">
			<div class="col-md-4">
				{!!Form::label('testMedico','Test medico:')!!}

			</div>
			<input name="testMedico" id="testMedico" type="file" value="Search" required>
		</div>
		<br>
		<div id="contenedor">
			<div class="col-md-4">
				{!!Form::label('donar','Donar organos:')!!}
			</div>
			Si <input name="donar" value="1" type="radio" class="archivo" required>
			No <input name="donar" value="0" type="radio" class="archivo" required>
		</div>
		<br>
		<div id="contenedor">
			<div class="col-md-4">
				{!!Form::label('foto','Subir foto:')!!}
			</div>
			<input name="foto" type="file" class="archivo" required>
		</div>
		<br>
		<div id="contenedor">
			<div class="col-md-4">
				{!!Form::label('comprobanteDomicilio','Comprobante de domicilio:')!!}
			</div>
			<input name="comprobanteDomicilio" id="comprobanteDomicilio" type="file" class="archivo" required>
		</div>
		<br>
		<div id="contenedor">
			<div class="col-md-4">
				{!!Form::label('celular','Ingrese telefono celular:')!!}
			</div>
			{!!Form::text('celular',null,['class'=>'form-control input-50','required'])!!}

		</div>
		<br>
		<div id="contenedor">
			<div class="col-md-4">
				{!!Form::label('cp','Codigo postal:')!!}
			</div>
			{!!Form::text('cp',null,['class'=>'form-control input-50','required'])!!}

		</div>
		<br>
		<div align="center">
			{!!Form::submit('Generar licencia')!!}
		</div>

		{!!Form::close()!!}
	</div>
</div>
<div class="container">
	@include ('templates.partials.footer')

</div>
@endsection
