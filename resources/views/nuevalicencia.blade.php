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
				<h1>Nueva Licencia</h1>
			</div>
			<div id="contenedor">
				Llena los campos con tus datos personales.
			</div>
			<br>
			<div id="contenedor">
				{{-- {!!Form::open(['route'=>'store.usuario','method'=>'post'])!!} --}}
				<div>
					<div class="col-md-4">
						{!!Form::label('primerAp','Primer Apellido:')!!}
					</div>
					{!!Form::text('primerAp',null,['class'=>'form-control input-50','required'])!!}
				</div><br>
				<div>
					<div class="col-md-4"> {!!Form::label('segundoAp','Segundo Apellido:')!!} </div>
					{!!Form::text('segundoAp',null,['class'=>'form-control input-50','required'])!!}
				</div><br>
				<div>
					<div class="col-md-4"> {!!Form::label('nombre','Nombre:')!!} </div>
					{!!Form::text('nombre',null,['class'=>'form-control input-50','required'])!!}
				</div>
			</div>
			<br>
			<div id="contenedor">
				<div id="contenesdor2">
					<div class="col-md-4">{!!Form::label('curp','Curp:')!!} </div>
					{!!Form::text('curp',null,['class'=>'form-control input-50','required'])!!}
				</div>
			</div>
			<br>

			<div id="contenedor" align="center">
				<div class="col-md-6">
					{!!Form::select('tipoLic',['Automovilista'=>'Automovilista','Chofer'=>'Chofer','Motocicleta'=>'Motocicleta'],null,['id'=>'tipoLic','class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
				</div>

				<div class="col-md-6" align="center">
					{!!Form::select('tiempo',['1'=>'1 año - $560.00','2'=>'2 años - $1000.00','3'=>'3 años - $1260.00'],null,['id'=>'tiempo','class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
				</div>
				<br><br>
				<div align="center">
					{!!Form::submit('Aceptar',['class'=>'btn btn-succes','id'=>'aceptar'])!!}</div>

			</div>
			{{-- {!!Form::close()!!} --}}
			<br>
			<div id="suplente" class="col-md-3"></div>
			<div id="contenedor3" class="col-md-6">
				<div>Tipo de licencia:</div>
				<div>Monto a pagar:</div>
				<div>ID Usuario:</div>
				<div>Referencia:</div>
			</div>
			<div id="suplente" class="col-md-3"></div>

		</div>
		<div align="center">
			<a type="button" class="btn btn-default" href="{{route('referencia')}}">Ver referencia</a>
		</div>
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
	$('#aceptar').on('click', function(event) {
		primerAp=$('#primerAp').val();
		segundoAp=$('#segundoAp').val();
		nombre=$('#nombre').val();
		curp=$('#curp').val();
		tiempo= $("#tiempo option:selected").val();
		tipoLice= $("#tipoLic option:selected").val();
		costo=0;
		años=0;
		if(tiempo=='1'){
			tiempo='1 año';
			años=1;
			costo=560;
		}else if (tiempo=='2') {
			tiempo='2 años';
			costo=1000;
			años=2;
		}else if (tiempo=='3') {
			tiempo='3 años';
			costo=1260;
			años=3;
		}
		if(primerAp=="" ||segundoAp=="" ||nombre=="" ||curp=="" ||tiempo=="" ||tipoLic==""){
			alert('Complete todos los campos');
		}else {
			$.ajax({
				url: route('store.usuario'),
				type: 'POST',
				dataType: 'json',
				data: {
					primerAp: primerAp,
					segundoAp: segundoAp,
					nombre: nombre,
					curp: curp,
					tipoLice:tipoLice,
					tiempo: tiempo,
					costo:costo,
					tipoProceso:'Nueva Licencia',
					años:años
				},
				success(data) {
					console.log(data);
					 $('#aceptar').prop('disabled', true);
				},
				error(e) {
					console.log(e);
				}
			});
		}

	});
</script>
@endpush
