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

//ruta a la vista por defecto de Laravel
// Route::get('/', function () {
//     return view('welcome');
// });

//ruta para la nueva vista creada
// Route::get('/', function () {
//     return view('inicio');
// });

//funcion with
// Route::get('/', function () {
//     $nombre = "Johnny Mazao";
//     return view('inicial')->with('nombre', $nombre);
// });

//prescindir de with respecto del anterior ejemplo
// Route::get('/', function () {
//     $nombre = "Johnny Mazas1";
//     return view('inicio', ['nombre'=>$nombre]);
// });

//funcion compact
// Route::get('/', function () {
//     $nombre = "Johnny Mazas2";
//     return view('inicio', compact('nombre'));
// });

//recortando para devolver una vista pelà
// Route::view('/', 'inicio', ['nombre'=>'Johnny Mazas3']);

//estructuras de control de blade
// Route::get('/', function () {

//     $arrayElementos = array(
//         'nombre' => 'Fulano',
//         'apellido' => 'de Tal'
//     );
//     return view('inicio',['elementos' => $arrayElementos]);
// });

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
// Route::get(
//     'saludo/{nombre?}/{id?}',
//     function ($nombre = "Invitado", $id = 0) {
//         return "Hola $nombre, tu código es el $id";
//     }
// )->where('nombre', "[A-Za-z]+")
//     ->where('id', "[0-9]+")
//     ->name('saludo');

Route::get('/listado', function() {
    $libros = array(
    array("titulo" => "El juego de Ender",
    "autor" => "Orson Scott Card"),
    array("titulo" => "La tabla de Flandes",
    "autor" => "Arturo Pérez Reverte"),
    array("titulo" => "La historia interminable",
    "autor" => "Michael Ende"),
    array("titulo" => "El Señor de los Anillos",
    "autor" => "J.R.R. Tolkien")
    );
    return view('listado', compact('libros'));
    });
