<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'InicioController')->name('inicio');

Route::resource('proyecto','ProyectoController');//rute que encierra todas las rutas de un recurso

// Route::get('/proyecto', 'ProyectoController@index')->name('proyecto.index');
// Route::post('/proyecto', 'ProyectoController@store')->name('proyecto.store');
// Route::get('/proyecto/crear', 'ProyectoController@create')->name('proyecto.create');
// Route::get('/proyecto/{proyecto}/editar', 'ProyectoController@edit')->name('proyecto.edit');
// Route::patch('/proyecto/{proyecto}', 'ProyectoController@update')->name('proyecto.update');
// Route::get('/proyecto/{proyecto}', 'ProyectoController@show')->name('proyecto.show');
// Route::delete('/proyecto/{proyecto}', 'ProyectoController@destroy')->name('proyecto.destroy');

Route::get('cliente', 'ClienteController@index')->name('clientes.index');

Route::get('contacto', 'ContactoController@index')->name('contacto.index');
Route::post('contacto', 'ContactoController@store')->name('contacto.store');

Route::get('usuario', 'UsuarioController@index')->name('usuario.index');

Auth::routes(['register' => false]);


