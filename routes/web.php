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

Route::get('/', 'CarController@home');
Route::get('/ventas', 'CarController@filterCars');
Route::get('/ventas/0km ', 'CarController@salesNew');
Route::get('/ventas/usados', 'CarController@salesUsed');
Route::get('/nosotros', function () {
    return view('about');
});

Auth::routes();

// ADMIN:
Route::prefix("admin")->middleware(['auth'])->group(function() {

    Route::get('/', function() {
        return redirect('admin/autos');
    });

    // Brands:
    // Mostrar listados de marcas que hay en la DB y mostrar vistas de creación y edicion de marcas
    Route::get('/marcas', 'AdminController@showBrands');
    Route::get('/marcas/crear', 'AdminController@showBrandCreate');
    Route::get('/marcas/{id}/editar', 'AdminController@showBrandEdit');

    // Crear, editar y eliminar marcas
    Route::post('/marcas', 'AdminController@createBrand');
    Route::post('/marcas/{id}/editar', 'AdminController@editBrand');
    Route::get('/marcas/{id}/eliminar', 'AdminController@deleteBrand');

    // <---------------------------------------------------------------------> 

    // Cars:
    // Mostrar listados de autos que hay en la DB y mostrar vistas de creación y edicion de autos
    Route::get('/autos', 'AdminController@showCars');
    Route::get('/autos/crear', 'AdminController@showCarCreate');
    Route::get('/autos/{id}/editar', 'AdminController@showCarEdit');

    // Crear, editar y eliminar autos
    Route::post('/autos', 'AdminController@createCar');
    Route::post('/autos/{id}/editar', 'AdminController@editCar');
    Route::get('/autos/{id}/eliminar', 'AdminController@deleteCar');

    // <---------------------------------------------------------------------> 

    // CarModels:
    // Mostrar listados de modelos que hay en la DB y mostrar vistas de creación y edicion de modelos
    Route::get('/modelos', 'AdminController@showModels');
    Route::get('/modelos/crear', 'AdminController@showModelCreate');
    Route::get('/modelos/{id}/editar', 'AdminController@showModelEdit');

    // crear, editar y eliminar marcas
    Route::post('/modelos', 'AdminController@createModel');
    Route::post('/modelos/{id}/editar', 'Admincontroller@editModel');
    Route::get('/modelos/{id}/eliminar', 'AdminController@deleteModel');

});

// Ruta para realizar logout del usuario loggueado:
Route::get('/logout', 'Auth\LoginController@logout');

