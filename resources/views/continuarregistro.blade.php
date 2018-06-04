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
				<h1>Datos de pago</h1>
			</div>

			<br>
			{!!Form::open(['route'=>'continuar.registro','method'=>'post'])!!}
			<div>
				<div class="col-md-4">
						{!!Form::label('folio','Ingrese folio:')!!}
				</div>
				{!!Form::text('folio',null,['class'=>'form-control input-50','required'])!!}
			</div>
			<br>
			<div>
				<div class="col-md-4">
						{!!Form::label('referencia','Ingrese Referencia:')!!}
				</div>
				{!!Form::text('referencia',null,['class'=>'form-control input-50','required'])!!}
			</div>
			<br>
			<div align="center">
				{!!Form::submit('Continuar')!!}
			</div>
			{!!Form::close()!!}


		</div>

	</div>
	<div class="container">@include ('templates.partials.footer')</div>
@endsection
