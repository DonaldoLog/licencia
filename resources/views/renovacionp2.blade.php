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
            <div align="center">
                <h3>{!!$usuario->nombre." ".$usuario->primerAp." ".$usuario->segundoAp!!}</h3>
            </div>
            <div>
                <h3>Aviso</h3>
            </div>
            <div id="contenedor5">
                Para la renovacion es necesario presentar la liencia vencida, si no la tiene tendra que tramitar una reposicion, y en el caso de permisos de menos o extranjero que requieran hacer un canje a automovilista chofer o motociclista tendrá que dirigirse al apartado de nueva licencia.
            </div>
            <br>
            <div id="contenedor">
                {!!Form::open(['route'=>'generar.licencia','method'=>'post','enctype'=>'multipart/form-data'])!!}
                {!!Form::hidden('idUsuario',$datos->idUsuario)!!}

                <div>
                    <div class="col-md-3"> {!!Form::label('direccion','Direccion:')!!}</div>

                    {!!Form::text('direccion',null,['class'=>'form-control input-50','required'])!!}

                </div>
            </div>
            <br>
            <div id="contenedor">
                <div class="col-md-3">Comprobante de Domicilio*</div>
                <div>
                    <input type="file" name="comprobanteDomicilio" required>
                </div>
            </div>
            <br>
            <div id="contenedor">
                <div class="col-md-3">Test Médico*</div>
                <div>
                    <input type="file" name="testMedico" required>
                </div>
            </div>
            <br>

            <div id="contenedor">
                <div class="col-md-3">Fotografía*</div>
                <div>
                    <input type="file" name="foto" required>
                </div>
            </div>


            <br>

        </div>
        <div align="center">
            {!!Form::submit('Imprmir licencia')!!}
        </div>
        {!!Form::close()!!}
        @include ('templates.partials.footer')
    </div>
@endsection
