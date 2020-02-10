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
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::get('/compras', function () {
    return view('compras');
})->name('compras');
Route::get('/','pruebaController@index')->name('home');


//LOGISTICA
//POVEEDOR
Route::get('proveedor', 'proveedorController@index')->name('proveedorIndex');


Route::get('proveedor/registrar','proveedorController@create')->name('proveedorCreate');
Route::POST('proveedor/create', 'proveedorController@store')->name('proveedorStore');
Route::get('proveedor/buscar/{ruc}/{razon}/{etiqueta}', 'proveedorController@buscar')->name('proveedorBuscar');
Route::get('proveedor/datos/{id}', 'proveedorController@datos')->name('datos');
Route::get('proveedor/show/{proveedor}', 'proveedorController@show')->name('proveedorShow');
Route::get('proveedor/darBaja/{proveedor}', 'proveedorController@darBaja')->name('proveedorDarBaja');
Route::get('sunat/consulta', 'proveedorController@sunat')->name('sunat');
Route::get('proveedor/origen/{id}', 'proveedorController@origen')->name('origen');
Route::get('proveedor/pais/{id}', 'proveedorController@pais')->name('pais');


//CLIENTE
Route::get('cliente', 'clienteController@index')->name('clienteIndex');
Route::GET('cliente/registrar', 'clienteController@create')->name('clienteCreate');
Route::get('cliente/datosCliente/{id}', 'clienteController@datosCliente')->name('datosCliente');
    //Expediente Proveedor
    Route::name('proveedorExpedienteDownload')->get('/proveedor/expediente/{expediente}/download','proveedorController@download');
//PRODUCTO
Route::POST('/producto', 'productoController@index')->name('productoBuscar');

Route::POST('/producto/{id}/ajuste', 'productoController@ajuste')->name('productoAjuste');

