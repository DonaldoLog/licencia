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
				<h1>Pre-extravío de Licencia</h1>
			</div>
			<div id="contenedor">
				Llena los campos con tus datos personales
			</div>
			<br>
			<div id="contenedor">
				<div id="contenesdor2">
					<div class="col-md-4">{!!Form::label('curp','Curp:')!!} </div>
					{!!Form::text('curp',null,['class'=>'form-control input-50','required'])!!}
				</div>
			</div>
			<br>

				<br>
				<div align="center">
					<a class="btn btn-succes" href="{{route('extravio')}}" id="aceptar">Verificar datos</a>

				</div>

			<br>
			<div id="suplente" class="col-md-3"></div>
			<div id="contenedor3" class="col-md-6">
				<div id='labelTipoLic'>Tipo de licencia: A</div>
				<div id='labelCosto'>Monto a pagar: 1000</div>
				<div id='labelFolio'>ID Usuario: 856546202</div>
				<div id='labelRefe'>Referencia: 956546204</div>
			</div>
			<div id="suplente" class="col-md-3"></div>
		<br>

		<div align="center">
			{!!Form::submit('Generar referencia')!!}
		</div>
		{!!Form::close()!!}

</div></div>
@include ('templates.partials.footer')
@endsection
