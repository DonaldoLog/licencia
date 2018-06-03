<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Folio;
use App\Models\Licencia;
use App\Models\Proceso;
use Carbon\Carbon;


class LicenciaController extends Controller
{
    public function store(Request $request){
        $añoIni=Carbon::now();
        $finaño=$añoIni->addYears($request->años);
        $usuario= new Usuario($request->all());
        $folio=Folio::find(1);
        $folio->folio=$folio->folio+1;
        $folio->save();
        $usuario->folio=$folio->folio;
        $usuario->save();

        $licencia= new Licencia();
        $licencia->idUsuario=$usuario->id;
        $licencia->tipoLice=$request->tipoLice;
        $licencia->fechaIni=$añoIni->toDateString();
        $licencia->fechaFin=$finaño->toDateString();
        $licencia->save();

        $proceso= new Proceso();
        $proceso->idUsuario=$usuario->id;
        $proceso->tipoProceso='Nueva Licencia';
        $proceso->referencia=rand(1000000, 10000000);
        $proceso->costo=$request->costo;
        $proceso->estado=0;
        $proceso->save();




        return ['tipoLice'=>$licencia->tipoLice,'costo'=>$request->costo,'folio'=>$usuario->folio,'referencia'=>$proceso->referencia];
    }
}
