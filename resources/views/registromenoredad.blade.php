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
			<h1>Registro menor de edad</h1>
		</div>
		<br>
		<div id="contenedor">
			{!!Form::open(['route'=>'store.renovacion','method'=>'post'])!!}
			Datos del tutor

			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('direccionT','Ingresar dirección')!!}
				</div>
				{!!Form::text('direccionT',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('cpT','Código postal')!!}
				</div>
				{!!Form::text('cpT',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('compdomicilioT','Subir comprobante de domicilio (tutor)')!!}
				</div>
				{!!Form::file('compdomicilioT',null,['required'])!!}
			</div>
			<div>
			<br>
			<br>
				<div class="col-md-3">
					{!!Form::label('identificacionT','Subir identificación (tutor)')!!}
				</div>
				{!!Form::file('identificacionT',null,['required'])!!}
			</div>
			<div>
			<br>
			<br>
				<div class="col-md-3">
					{!!Form::label('organosT','Donar órganos')!!}
				</div>
				Si {!!Form::radio('organosT','si')!!}
				No {!!Form::radio('organosT','no')!!}
			</div>
			<div>
			<br>
			<br>
				<div class="col-md-3">
					{!!Form::label('telT','Teléfono')!!}
				</div>
				{!!Form::text('telT',null,['required'])!!}
			</div>
		</div>
		<br>
		<div id="contenedor">
			{!!Form::open(['route'=>'store.renovacion','method'=>'post'])!!}
			Datos del menor

			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('curpM','Curp')!!}
				</div>
				{!!Form::text('curpM',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('testMedicoM','Subir test médico')!!}
				</div>
				{!!Form::file('testMedicoM',null,['required'])!!}
			</div>
			<div>
			<br>
			<div id="contenedor">
				<div class="col-md-4">
					{!!Form::label('lentes','¿Usa lentes?:')!!}
				</div>
				Si <input name="lentes" value="1" type="radio" class="archivo" required>
				No <input name="lentes" value="0" type="radio" class="archivo" required>
			</div>
	  	<br>
				<div class="col-md-3">
					{!!Form::label('fotoM','Subir fotografía')!!}
				</div>
				{!!Form::file('fotoM',null,['required'])!!}
			</div>
			<div>
			<br>
				<div class="col-md-3">
					{!!Form::label('telM','Teléfono')!!}
				</div>
				{!!Form::text('telM',null,['required'])!!}
			</div>
		</div>



		<br>
		<br>
	</div>
	<div align="center">
		{!!Form::submit('Generar permiso',['class'=>'btn btn-success','disabled','id'=>'generar'])!!}
	</div>
	{!!Form::close()!!}
	@include ('templates.partials.footer')

</div>
@endsection
