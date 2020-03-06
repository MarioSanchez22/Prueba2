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
Route::get('usuarios', 'UsuariosController@index')->name('usuariosIndex');
Route::get('usuarios/registrar', 'UsuariosController@create')->name('usuariosCreate');
Route::get('usuarios/show/{usuario}', 'UsuariosController@show')->name('personalShow');
Route::POST('usuarios/create', 'UsuariosController@store')->name('usuariosStore');

Route::get('usuarios/buscar/{email}/{PERSONA_identificador}/{ROL_id}', 'UsuariosController@buscar')->name('usuarioBuscar');
////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////Permisos/////////////////////////////////////////
Route::get('privilegios', 'permisoController@index')->name('privilegiosIndex');
Route::get('privilegios/{usuario}', 'permisoController@editar')->name('privilegiosEdit');
Route::POST('privilegios/update/{usuario}','permisoController@update')->name('privilegiosUpdate');

Route::get('privilegios/buscar/{email}/{PERSONA_identificador}/{ROL_id}', 'permisoController@buscar')->name('privilegiosBuscar');
///////////////////////////////////////////////////////////////

////////////////////////////EMPRESA/////////////////////////////////////
Route::get('empresa','empresaController@show')->name('empresaShow');
Route::POST('empresa/{empresa}','empresaController@update')->name('empresaUpdate');

////////////////////////////SUCURSAL/////////////////////////////////////
Route::POST('sucursal/create','empresaController@sucursalCreate')->name('sucursalCreate');

////////////////////////////AREA////////////////////////////////////////
Route::POST('area/create','empresaController@areaCreate')->name('areaCreate');

////////////////////////////////////////////////////////////////////////
//LOGISTICA
//POVEEDOR
Route::get('proveedor', 'proveedorController@index')->name('proveedorIndex');
Route::get('proveedor/registrar','proveedorController@create')->name('proveedorCreate');
Route::get('proveedor/editar/{proveedor}','proveedorController@editar')->name('proveedorEdit');
Route::POST('proveedor/create', 'proveedorController@store')->name('proveedorStore');
Route::POST('proveedor/update/{proveedor}', 'proveedorController@update')->name('proveedorUpdate');

    Route::get('proveedor/datos/{id}', 'proveedorController@datos')->name('datos');
Route::get('proveedor/show/{proveedor}', 'proveedorController@show')->name('proveedorShow');
    Route::POST('proveedor/darBaja', 'proveedorController@darBaja')->name('proveedorDarBaja');
    Route::POST('proveedor/darAlta', 'proveedorController@darAlta')->name('proveedorDarAlta');
    Route::get('sunat/consulta', 'proveedorController@sunat')->name('sunat');
    Route::get('proveedor/origen/{id}', 'proveedorController@origen')->name('origen');
    Route::get('proveedor/pais/{id}', 'proveedorController@pais')->name('pais');

Route::get('proveedor/buscar/{ruc}/{razon}/{etiqueta}', 'proveedorController@buscar')->name('proveedorBuscar');

    //Expediente Proveedor
    Route::name('proveedorExpedienteDownload')->get('/proveedor/expediente/{expediente}/download','proveedorController@download');
    //Contacto Proveedor
    Route::POST('proveedor/{proveedor}/contacto/update', 'proveedorController@contactoUpdate')->name('contactoProveedorUpdate');
    Route::POST('proveedor/{proveedor}/contacto/create', 'proveedorController@contactoStore')->name('contactoProveedorCreate');
    Route::get('contactos/proveedor', 'contactosProvController@index')->name('contactosProvIndex');
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
Route::get('cliente/darBaja/{cliente}', 'clienteController@darBaja')->name('clienteDarBaja');
Route::get('cliente/darAlta/{cliente}', 'clienteController@darAlta')->name('clienteDarAlta');
    //Expediente Proveedor
    Route::name('proveedorExpedienteDownload')->get('/proveedor/expediente/{expediente}/download','proveedorController@download');
//PRODUCTO
Route::get('/productos', 'productoController@index')->name('productosIndex');

Route::POST('/producto/{id}/ajuste', 'productoController@ajuste')->name('productoAjuste');
Route::get('producto/registrar','productoController@create')->name('productoCreate');



Route::get('/categoria', 'categoriaController@index')->name('categoriaIndex');
Route::POST('/categoria/store', 'categoriaController@store')->name('categoriaStore');
Route::get('/categoria/delete/{categoria}', 'categoriaController@delete')->name('categoriaDelete');

//CONFIGURACION ROLES
//ROLES
Route::name('rolesIndex')->get('roles','rolesController@index');
Route::get('roles/registrar','rolesController@create')->name('rolCreate');
Route::POST('roles/create', 'rolesController@store')->name('rolStore');
Route::get('roles/editar/{rol}','rolesController@editar')->name('rolEdit');
Route::POST('roles/update/{rol}','rolesController@update')->name('rolUpdate');
Route::get('/marca', 'marcaController@index')->name('marcaIndex');

Route::get('/unidadMedida', 'umedidasController@index')->name('umedidaIndex');

//MARCA
Route::POST('marca/create', 'marcaController@store')->name('marcaStore');

//COMPRAS
Route::get('/compras', 'comprasController@index')->name('comprasIndex');
Route::POST('compras/showp', 'comprasController@showp')->name('comprasShowp');
Route::POST('compras/showart', 'comprasController@showart')->name('comprasShowart');
Route::POST('/compras/rproducto', 'comprasController@rproductostore')->name('rProductoStore');
Route::POST('/compras/rproductoC', 'comprasController@rproductoCstore')->name('rProductoCStore');
Route::POST('/comprahecha', 'comprasController@comprahecha')->name('comprahecha');
Route::get('/compras/listaCompras', 'comprasController@listacompras')->name('listaComprasIndex');
