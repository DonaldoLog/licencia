<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatEstado;
class NuevaLicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
	{
		$this->middleware('auth');
	} 
    public function index()
    {
        $catEstados=CatEstado::orderBy('id','asc')->pluck('nombre','id');



        return view('nuevalicencia')->with('catEstados',$catEstados);
    }

      public function nuevaLicencia()
    {
        $catEstados=CatEstado::orderBy('id','asc')->pluck('nombre','id');
        return view('nuevalicencia')->with('catEstados',$catEstados);
    }
            public function homex()
    {
        return view('welcome');
    }
      public function documento()
    {
        return view('documentos');
    }
    public function continuarregistro()
    {
        return view('continuarregistro');
    }
    public function renovacion()
    {
        return view('renovacion');
    }
    public function referencia()
    {
        return view('referencia');
    }
    public function nuevalicenciaP2()
    {
        return view('nuevalicenciap2');
    }
    public function generalicencia()
    {
        return view('licencia');
    }
    public function renovacionp2()
    {
        return view('renovacionp2');
    }
    public function extravio()
    {
        return view('extravio');
    }
    public function preextravio()
    {
        return view('preextravio');
    }
    public function premenoredad()
    {
        return view('menoredad');
    }
    public function menoredad()
    {
        return view('registromenoredad');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
