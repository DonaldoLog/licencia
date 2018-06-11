<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;
use App\Models\Folio;
use App\Models\Usuario;
use App\Models\Licencia;
use App\Models\Proceso;
use PDF;
use Carbon\Carbon;

class RenovacionController extends Controller
{
    public function getUser(Request $request){
        $hoy=Carbon::now();


        $usuario=Licencia::where('numLicencia','=',$request->numLicencia)->get();
        //dd($usuario);
        if(count($usuario)>0){
            $proceso=Proceso::where('idUsuario','=',$usuario[0]->idUsuario)->get();
            if(count($proceso)>0){
                // dd($usuario[0]->fechaFin);
                if($proceso[0]->estado==1){
                    if($usuario[0]->fechaFin>$hoy){
                        return [$usuario[0]->fechaFin];
                    }
                    return [true];
                }else {
                    return [false];
                }
            }else {
                return [false];
            }
        }else {
            return [false];

        }

    }

    public function store(Request $request){
       //dd($request);
        $licencia=Licencia::where('numLicencia', '=', $request->numLicencia)->get()->first();

        $proceso=Proceso::where('idUsuario','=',$licencia->idUsuario)->get()->first();
        $usuario=Usuario::where('id', '=', $proceso->idUsuario)->get()->first();

        $proceso->tipoProceso='Renovacion';

        $referencia=Folio::find(2);
        $referencia->folio=$referencia->folio+1;
        $referencia->save();

        $proceso->referencia=$referencia->folio;
        $costo=0;
        if($request->tiempo=="3"){
            $costo=1260;

        }elseif ($request->tiempo=="2") {
            $costo=1000;

        }elseif ($request->tiempo=="1") {
            $costo=560;
        }
        $proceso->costo=$costo;
        $proceso->estado=0;
        $proceso->save();
        //dd($usuario);
        $data=['licencia'=>$licencia,'usuario'=>$usuario,'proceso'=>$proceso];
        $pdf = PDF::loadView('referencia',$data)->setPaper('a4', 'landscape');
        return $pdf->stream('referencia.pdf');

        // AQUI IMPRIME PDF


        return view('welcome');
    }

    public function generarLicencia(Request $request){
        $datos=Datos::where('idUsuario','=',$request->idUsuario)->get()->first();
        //dd($request);
        $file = $request->file('testMedico');
        $name = 'testMedico_'.$request->idUsuario.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\storage\testMedicos\\';
        $file->move($path, $name);

        $datos->testMedico=$name;
        //test foto
        $file = $request->file('foto');
        $name = 'foto'.$request->idUsuario.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\storage\fotos\\';
        $file->move($path, $name);

        $datos->foto=$name;

        //test comprobanteDomicilio
        $file = $request->file('comprobanteDomicilio');
        $name = 'comprobanteDomicilio'.$request->idUsuario.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\storage\comprobantesDomicilio\\';
        $file->move($path, $name);

        $usuario=Usuario::find($request->idUsuario);
        $usuario->direccion=$request->direccion;
        $usuario->save();

        $datos->comprobanteDomicilio=$name;



        $datos->save();

        $proceso=Proceso::where('idUsuario','=',$request->idUsuario)->get()->first();
        $proceso->estado=1;
        $proceso->save();


        $hoy=Carbon::now();


        $usuario=Usuario::find($request->idUsuario);
        $licencia=Licencia::where('idUsuario',$request->idUsuario)->get()->first();
        $fechaFin=new Carbon($licencia->fechaFin);
        $licencia->fechaFin=$fechaFin->addYears($request->tiempo);
        $licencia->save();
        $datetime2 = strtotime($licencia->fechaIni);
        $datetime1 = strtotime($hoy->toDateString());
        $secs = $datetime1 - $datetime2;// == <seconds between the two times>
        $days = $secs / 86400;


        $data=['usuario'=>$usuario,'datos'=>$datos,'licencia'=>$licencia,'dias'=>$days];
            $pdf = PDF::loadView('licencia',$data)->setPaper('a4', 'landscape');
            return $pdf->stream('licencia-nueva.pdf');

        return view('licencia')->with('usuario',$usuario)->with('datos',$datos)->with('licencia',$licencia);

    }

}
