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
					{!!Form::text('fechaNac',null,['class'=>'form-control input-50','required'])!!}
				</div>

				<div>
					<div class="col-md-4"> {!!Form::label('idEstado','Estado de origen:')!!} </div>
					{!!Form::select('idEstado',$catEstados,null,['class'=>'form-control','required','placeholder'=>'Seleccione'])!!}
				</div>

				<div>
					<div class="col-md-4"> {!!Form::label('direccion','Dirección:')!!} </div>
					{!!Form::text('direccion',null,['class'=>'form-control input-50','required'])!!}
				</div>

				<div>
					<div class="col-md-4"> {!!Form::label('sexo','Sexo:')!!} </div>
					{!!Form::select('sexo',['H'=>'HOMBRE','M'=>'MUJER'],null,['class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
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
					{!!Form::label('tipoLic','Seleccione tipo de licencia:')!!}
					{!!Form::select('tipoLic',['A'=>'A','B'=>'B','C'=>'C'],null,['id'=>'tipoLic','class'=>'form-control','placeholder'=>'Seleccione','required'])!!}
				</div>

				<div class="col-md-6" align="center">
					{!!Form::label('tiempo','Seleccione vigencia:')!!}

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


		<div class="col-md-12" align="center">
			{!!Form::submit('Generar referencia',['class'=>'btn btn-success','id'=>'generar','disabled'=>true])!!}
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
		estado=$('#idEstado').val();
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
		if(primerAp=="" ||segundoAp=="" ||nombre=="" ||curp=="" ||tiempo=="" ||tipoLic==""||estado==""){
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
					$('#aceptar').hide();
					 $('#generar').prop('disabled', false);
					 $('#labelTipoLic').html("Tipo de licencia: "+data.tipoLice);
					 $('#labelCosto').html("Monto a pagar: "+data.costo);
					 $('#labelFolio').html("ID Usuario(folio): "+data.folio);
					 $('#labelRefe').html("Referencia: "+data.referencia);
				},
				error(e) {
					console.log(e);
				}
			});
		}

	});

	$( document ).ready(function() {
    console.log( "ready!" );
	$('#fechaNac').datepicker({
		endDate: "06/11/2010",
		startDate: "06/11/1900",
		startView: 2,
		maxViewMode: 2,
		language: "es"
		});
	});

</script>
@endpush
