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
Route::get('proveedor/editar/{proveedor}','proveedorController@editar')->name('proveedorEdit');
Route::POST('proveedor/create', 'proveedorController@store')->name('proveedorStore');
Route::POST('proveedor/update/{proveedor}', 'proveedorController@update')->name('proveedorUpdate');

    Route::get('proveedor/datos/{id}', 'proveedorController@datos')->name('datos');
Route::get('proveedor/show/{proveedor}', 'proveedorController@show')->name('proveedorShow');
    Route::get('proveedor/darBaja/{proveedor}', 'proveedorController@darBaja')->name('proveedorDarBaja');
    Route::get('proveedor/darAlta/{proveedor}', 'proveedorController@darAlta')->name('proveedorDarAlta');
    Route::get('sunat/consulta', 'proveedorController@sunat')->name('sunat');
    Route::get('proveedor/origen/{id}', 'proveedorController@origen')->name('origen');
    Route::get('proveedor/pais/{id}', 'proveedorController@pais')->name('pais');

Route::get('proveedor/buscar/{ruc}/{razon}/{etiqueta}', 'proveedorController@buscar')->name('proveedorBuscar');

    //Expediente Proveedor
    Route::name('proveedorExpedienteDownload')->get('/proveedor/expediente/{expediente}/download','proveedorController@download');
    //Contacto Proveedor
    Route::POST('proveedor/{proveedor}/contacto/create', 'proveedorController@contactoStore')->name('contactoProveedorCreate');
    Route::get('contactos/proveedor', 'contactosProvController@index')->name('contactosProv');
    Route::get('contactos/buscar/{nombre}/{razon}/{etiqueta}', 'contactosProvController@buscar')->name('contactoProveedorBuscar');

//CLIENTE
Route::get('cliente', 'clienteController@index')->name('clienteIndex');
Route::GET('cliente/registrar', 'clienteController@create')->name('clienteCreate');
Route::get('cliente/datosCliente/{id}', 'clienteController@datosCliente')->name('datosCliente');
Route::get('cliente/buscar/{ruc}/{tprove}/{user}', 'clienteController@buscar')->name('clienteBuscar');
Route::POST('cliente/create', 'clienteController@store')->name('clienteStore');
Route::get('cliente/show/{cliente}', 'clienteController@show')->name('clienteShow');
Route::get('cliente/editar/{cliente}','clienteController@editar')->name('clienteEdit');
Route::POST('cliente/update/{cliente}', 'clienteController@update')->name('clienteUpdate');
    //Expediente Proveedor
    Route::name('proveedorExpedienteDownload')->get('/proveedor/expediente/{expediente}/download','proveedorController@download');
//PRODUCTO
Route::POST('/producto', 'productoController@index')->name('productoBuscar');

Route::POST('/producto/{id}/ajuste', 'productoController@ajuste')->name('productoAjuste');



