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
			<h1>Pre registro menor de edad</h1>
		</div>
		<div>
			<h3>Aviso</h3>
		</div>
		<div id="contenedor5">
			El permiso para menor de edad solo esta vigente por 6 meses y solo sera valido en la licencia B y C
		</div>
		<br>
		<div id="contenedor">
			{!!Form::open(['route'=>'store.renovacion','method'=>'post'])!!}
			Datos del tutor

			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('priApellido','Primer Apellido')!!}
				</div>
				{!!Form::text('priApellido',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('segApellido','Segundo Apellido')!!}
				</div>
				{!!Form::text('segApellido',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('nombreTutor','Nombre del Tutor')!!}
				</div>
				{!!Form::text('nombreTutor',null,['required'])!!}
			</div>
		</div>
		<br>
		<div id="contenedor">
			{!!Form::open(['route'=>'store.renovacion','method'=>'post'])!!}
			Datos del menor

			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('priApellidoM','Primer Apellido')!!}
				</div>
				{!!Form::text('priApellidoM',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('segApellidoM','Segundo Apellido')!!}
				</div>
				{!!Form::text('segApellidoM',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('nombre','Nombre')!!}
				</div>
				{!!Form::text('nombreTutor',null,['required'])!!}
			</div>
		</div>


		
		<br>

		<div id="contenedor">
			<div class="col-md-3">
				{!!Form::label('tipoLic','Tipo de Licencia')!!}
			</div>
			<div class="col-md-3">
				{!!Form::select('tipoLic',['1'=>'Licencia B','2'=>'Licencia C'],null,['id'=>'tipLic','class'=>'form-control','placeholder'=>'Seleccione tipo de licencia','required'])!!}
			</div>
		</div>
		<br>
	</div>
	<div align="center">
		<a class="btn btn-succes" id="aceptar" href="{{route('menoredad')}}">Generar Referencia de Pago</a>
	</div>
	{!!Form::close()!!}
	@include ('templates.partials.footer')

</div>
@endsection