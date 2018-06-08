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
				<h1>Extravio de Licencia</h1>
			</div>
			<div id="contenedor">
				Llena los campos correctamente
			</div>
			<br>
			<div id="contenedor">
				{!!Form::open(['route'=>'generar.referencia','method'=>'post'])!!}
				<div>
					<div class="col-md-4">
						{!!Form::label('actaExt','Acta de Extrabio escaneada')!!}
					</div>
					{!!Form::file('actaExt',null,['class'=>'form-control input-50','required'])!!}
				</div><br>
				<div>
					<div class="col-md-4"> {!!Form::label('comprobanteDom','Comprobante de domicilio con antigüedad no menos a 5 meses')!!} </div>
					{!!Form::file('comprobanteDom',null,['class'=>'form-control input-50','required'])!!}
				</div><br>
				

				</div>
			<br>

				<br>
				<div align="center">
					<a class="btn btn-succes" id="aceptar">Generar licencia</a>

				</div>
			
			<br>
		

		<div align="center">
			{!!Form::submit('Ver referencia')!!}
		</div>
		{!!Form::close()!!} 
		
</div></div>
@include ('templates.partials.footer')
@endsection