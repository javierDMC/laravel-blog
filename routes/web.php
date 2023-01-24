<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

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

Route::get('/posts', function () {
    echo ("Listado de posts");
});

//rutas con parametros validados
// Route::get('saludo/{nombre?}', function ($nombre="Invitado") {
//     return "Hola, " . $nombre;
// })->where('nombre',"[A-Za-z]+");

//rutas con nombre o named routes
Route::get('contacto', function () {
    return "Página de contacto";
})->name('ruta_contacto');

//combinacion de elementos en rutas
Route::get(
    'saludo/{nombre?}/{id?}',
    function ($nombre = "Invitado", $id = 0) {
        return "Hola $nombre, tu código es el $id";
    }
)->where('nombre', "[A-Za-z]+")
    ->where('id', "[0-9]+")
    ->name('saludo');
