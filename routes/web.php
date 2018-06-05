<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('licencia', 'NuevaLicenciaController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/nueva-licencia', 'NuevaLicenciaController@nuevaLicencia')->name('nueva.licencia');

Route::get('/homex', 'NuevaLicenciaController@homex')->name('casa');

Route::get('/documentos', 'NuevaLicenciaController@documento')->name('documentos');

Route::get('/continuar-registro', 'NuevaLicenciaController@continuarregistro')->name('contregistro');

Route::get('/renovacion', 'NuevaLicenciaController@renovacion')->name('renovacion');

Route::get('/referencia-de-pago', 'NuevaLicenciaController@referencia')->name('referencia');

Route::get('/renovacion-parte2', 'NuevaLicenciaController@renovacionp2')->name('renovacionp2');

// Route::get('/nueva-licencia-paso-2', 'NuevaLicenciaController@nuevalicenciaP2')->name('nuevalicenciaP2');

Route::get('/licencia', 'NuevaLicenciaController@generalicencia')->name('generalicencia');

/*------------------------ RUTAS PARA INICAR LICENCIA---------------------------------*/

    Route::post('licencia-store', 'LicenciaController@store')->name('store.usuario');
    Route::post('nueva-licencia/continuar','LicenciaController@continuarRegistro')->name('continuar.registro');
    Route::post('generar-licencia','LicenciaController@datosLicencia')->name('datos.licencia');
    Route::post('generar-referencia','LicenciaController@generarReferencia')->name('generar.referencia');

/*------------------------ RUTAS PARA INICAR LICENCIA---------------------------------*/
    Route::post('renovacion-store', 'RenovacionController@store')->name('store.renovacion');
    Route::post('get-usuario/renovacion', 'RenovacionController@getUser')->name('get.usuario');
