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
Route::get('/proveedor', 'proveedorController@index')->name('proveedorIndex');
Route::get('/proveedor/create', 'proveedorController@store')->name('proveedorStore');



//PRODUCTO
Route::POST('/producto', 'productoController@index')->name('productoBuscar');

Route::POST('/producto/{id}/ajuste', 'productoController@ajuste')->name('productoAjuste');
