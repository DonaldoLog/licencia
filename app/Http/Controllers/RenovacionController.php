<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;
use App\Models\Folio;
use App\Models\Usuario;
use App\Models\Licencia;
use App\Models\Proceso;


class RenovacionController extends Controller
{
    public function getUser(Request $request){
        $usuario=Licencia::where('numLicencia','=',$request->numLicencia)->get();
        $proceso=Proceso::where('idUsuario','=',$usuario->idUsuario)->get();

        if(count($usuario)>0 && count($proceso>0)){
            if($proceso[0]->estado==0){
                return [true];
            }else {
                return [false];
            }
        }else {
            return [false];
        }
    }

    public function store(Request $request){
        dd($request);
        $usuario=Licencia::where('numLicencia','=',$request->numLicencia)->get()->first();

        $proceso=Proceso::where('idUsuario','=',$usuario->idUsuario)->get()->first();
        $proceso->tipoProceso='Renovacion';

        $referencia=Folio::find(2);
        $referencia->folio=$referencia->folio+1;
        $referencia->save();

        $proceso->referencia=$referencia->folio;





        return ['success'=>true];
    }

}
