<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Folio;
use App\Models\Licencia;
use App\Models\Proceso;
use App\Models\Datos;
use Carbon\Carbon;

class LicenciaController extends Controller
{
    public function store(Request $request)
    {
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
        $referencia=Folio::find(2);
        $referencia->folio=$referencia->folio+1;
        $referencia->save();
        $proceso->referencia=$referencia->folio;
        $proceso->costo=$request->costo;
        $proceso->estado=0;
        $proceso->save();


        return ['tipoLice'=>$licencia->tipoLice,'costo'=>$request->costo,'folio'=>$usuario->folio,'referencia'=>$proceso->referencia];
    }

    public function continuarRegistro(Request $request)
    {
        $datos=Proceso::where('referencia', '=', $request->referencia)->get();
        $usuario=Usuario::where('folio', '=', $request->folio)->get();

        if (count($datos)>0 && count($usuario)>0) {
            if ($datos[0]->idUsuario==$usuario[0]->id && $datos[0]->status==0) {
                if ($datos[0]->tipoProceso=='Nueva Licencia') {
                    return view('nuevalicenciap2')->with('datos', $datos[0]);
                } elseif ($datos[0]->tipoProceso=='Reposicion') {
                    return view('welcome');
                }
            } else {
                return view('welcome');
            }
        } else {
            return view('welcome');
        }
    }

    public function datosLicencia(Request $request)
    {
        // dd($request);
        $datos=new Datos();
        $datos->idUsuario=$request->idUsuario;
        //test medico
        $file = $request->file('testMedico');
        $name = 'testMedico_'.$request->idUsuario.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\storage\testMedicos\\';
        $file->move($path, $name);

        $datos->testMedico=$name;
        //test medico
        $file = $request->file('foto');
        $name = 'foto'.$request->idUsuario.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\storage\fotos\\';
        $file->move($path, $name);

        $datos->foto=$name;

        //test medico
        $file = $request->file('comprobanteDomicilio');
        $name = 'comprobanteDomicilio'.$request->idUsuario.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\storage\comprobantesDomicilio\\';
        $file->move($path, $name);

        $datos->comprobanteDomicilio=$name;

        if($request->donar=="1"){
            $datos->donar=1;
        }else if($request->donar=="0"){
            $datos->donar=0;
        }
        $datos->celular=$request->celular;
        $datos->cp=$request->cp;
        $datos->save();

        $proceso=Proceso::where('idUsuario','=',$request->idUsuario)->get()->first();
        $proceso->estado=1;
        $proceso->save();

        $usuario=Usuario::find($request->idUsuario);
        $licencia=Licencia::where('idUsuario',$request->idUsuario)->get()->first();

        return view('licencia')->with('usuario',$usuario)->with('datos',$datos)->with('licencia',$licencia);
    }
}
