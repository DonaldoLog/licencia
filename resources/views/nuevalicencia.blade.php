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
				{!!Form::open(['route'=>'generar.referencia','method'=>'post'])!!}
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

				<div>
					<div class="col-md-4"> {!!Form::label('fechaNac','Fecha Nacimiento:')!!} </div>
					{!!Form::date('fechaNac',null,['class'=>'form-control input-50','required'])!!}
				</div>

				<div>
					<div class="col-md-4"> {!!Form::label('direccion','Direccion:')!!} </div>
					{!!Form::text('direccion',null,['class'=>'form-control input-50','required'])!!}
				</div>

				<div>
					<div class="col-md-4"> {!!Form::label('sexo','Sexo:')!!} </div>
					{!!Form::select('sexo',['HOMBRE'=>'HOMBRE','MUJER'=>'MUJER'],null,['class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
				</div>

				<div>
					<div class="col-md-4"> {!!Form::label('sangre','Tipo de sangre:')!!} </div>
					{!!Form::select('sangre',['O+'=>'O+','O-'=>'O-','A+'=>'A+','A-'=>'A-'],null,['class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
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
				</div>

				<br><br>
				<div align="center">
					<a class="btn btn-succes" id="aceptar">Aceptar</a>

				</div>
			
			<br>
			<div id="suplente" class="col-md-3"></div>
			<div id="contenedor3" class="col-md-6">
				<div id='labelTipoLic'>Tipo de licencia:</div>
				<div id='labelCosto'>Monto a pagar:</div>
				<div id='labelFolio'>ID Usuario:</div>
				<div id='labelRefe'>Referencia:</div>
			</div>
			<div id="suplente" class="col-md-3"></div>
		

		<div align="center">
			{!!Form::submit('Generar referencia')!!}
		</div>
		{!!Form::close()!!} 
		
</div></div>
@include ('templates.partials.footer')
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
		fechaNac=$('#fechaNac').val();
		direccion=$('#direccion').val();
		sexo=$("#sexo option:selected").val();
		sangre=$("#sangre option:selected").val();
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
					años:años,
					sexo:sexo,
					fechaNac:fechaNac,
					direccion:direccion,
					sangre:sangre
				},
				success(data) {
					console.log(data);
					 $('#aceptar').prop('disabled', true);
					 $('#labelTipoLic').append(data.tipoLice);
					 $('#labelCosto').append(data.costo);
					 $('#labelFolio').append(data.folio);
					 $('#labelRefe').append(data.referencia);
				},
				error(e) {
					console.log(e);
				}
			});
		}

	});
</script>
@endpush
