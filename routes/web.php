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











Route::get('/','Auth\LoginController@showLoginForm')->middleware('guest');

Route::name('login')->post('login','Auth\LoginController@login');
Route::name('logout')->post('logout','Auth\LoginController@logout');

Route::name('Dashboard')->get('dashboard','HomeController@index');



Route::get('/compras', function () {
    return view('compras');
})->name('compras');


//Usuarios
Route::get('usuarios', 'proveedorController@index')->name('usuariosIndex');


/////////////////////////
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
    Route::get('contactos/proveedor', 'contactosProvController@index')->name('contactosProvIndex');
    Route::get('contactos/buscar/{nombre}/{razon}/{etiqueta}', 'contactosProvController@buscar')->name('contactoProveedorBuscar');

//CLIENTE
Route::get('cliente', 'clienteController@index')->name('clienteIndex');
Route::GET('cliente/registrar', 'clienteController@create')->name('clienteCreate');
Route::get('cliente/datosCliente/{id}', 'clienteController@datosCliente')->name('datosCliente');
    //Expediente Proveedor
    Route::name('proveedorExpedienteDownload')->get('/proveedor/expediente/{expediente}/download','proveedorController@download');
//PRODUCTO
Route::POST('/producto', 'productoController@index')->name('productoBuscar');

Route::POST('/producto/{id}/ajuste', 'productoController@ajuste')->name('productoAjuste');


//CONFIGURACION ROLES
//ROLES
Route::name('rolesIndex')->get('roles','rolesController@index');
Route::get('roles/registrar','rolesController@create')->name('rolCreate');
Route::POST('roles/create', 'rolesController@store')->name('rolStore');
Route::get('roles/editar/{rol}','rolesController@editar')->name('rolEdit');
Route::POST('roles/update/{rol}','rolesController@update')->name('rolUpdate');
