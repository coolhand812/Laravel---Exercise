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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/tarea', function() {
    //return 'esta es la pagina de tareas';

//    return redirect()->route('catX');
//});

//Route::get('/tarea/{id}/{nombre}', function($id, $nombre) {
//    return 'Pagina de la tarea' . $id . 'con el nombre' . $nombre;
//});

//Route::get('/menu1/submenu3/categoriaX', function() {
//    return 'pagina de prueba';
//})->name('catX');

Route::get('/test', 'TestController@index'); //empty controller