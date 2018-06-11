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
			<h1>Renovacion de licencia</h1>
		</div>
		<div>
			<h3>Aviso</h3>
		</div>
		<div id="contenedor5">
			Para la renovacion es necesario presentar la liencia vencida, si no la tiene tendra que tramitar una reposicion, y en el caso de permisos de menos o extranjero que requieran hacer un canje a automovilista chofer o motociclista tendrá que dirigirse al
			apartado de nueva licencia.
		</div>
		<br>
		<div id="contenedor">
			{!!Form::open(['route'=>'store.renovacion','method'=>'post'])!!}
			<div>
				<div class="col-md-3">
					{!!Form::label('numLicencia','Introducir folio de licencia*:')!!}
				</div>
				{!!Form::text('numLicencia',null,['required'])!!}
				<input type="button" id="buscar" value="Buscar">
			</div>
		</div>
		<br>
		<div id="contenedor">
			<div class="col-md-3">
				{!!Form::label('tipoLice','Tipo de licencia que solicita:')!!}
			</div>
			<div class="col-md-3">
				{!!Form::select('tipoLice',['A'=>'A','B'=>'B','C'=>'C'],null,['id'=>'tipoLic','class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
			</div>
		</div>
		<br>

		<div id="contenedor">
			<div class="col-md-3">
				{!!Form::label('tiempo','Periodo:')!!}
			</div>
			<div class="col-md-3">
				{!!Form::select('tiempo',['1'=>'1 año - $560.00','2'=>'2 años - $1000.00','3'=>'3 años - $1260.00'],null,['id'=>'tiempo','class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
			</div>
		</div>
		<br>
	</div>
	<div align="center">
		{!!Form::submit('Generar referencia de pago',['class'=>'btn btn-success','disabled','id'=>'generar'])!!}
	</div>
	{!!Form::close()!!}
	@include ('templates.partials.footer')

</div>
@endsection
@push('scripts')
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$('#buscar').on('click', function(event) {
		numLicencia = $("#numLicencia").val();

		if (numLicencia == "") {
			alert('Complete todos los campos');
		} else {
			$.ajax({
				url: route('get.usuario'),
				type: 'POST',
				dataType: 'json',
				data: {
					numLicencia: numLicencia
				},
				success(data) {
					if(data[0]==true){
						$('#generar').prop('disabled', false);
						$('#buscar').prop('disabled', true);
						$('#numLicencia').prop('readonly', true);
					}else {
						alert('No existe este usuario.')
						$('#generar').prop('disabled', true);
					}
				},
				error(e) {
					console.log(e);
				}
			});
		}
	});
</script>

@endpush
