<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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


/*
Definimos una ruta extra, solamente para redirigir y confirmar
*/

Route::view('/exito', [FormController::class, 'main']);

/* 
Definimos 2 rutas para el formulario, pues debe abarcar 2 metodos
"view o get" y "post", ambos importantes para visualizar la página y 
enviar los datos no funciona sin los 2
*/

Route::get('/formulario', [FormController::class, 'formulario']);

/*
Tras definir el metodo aplicado a la ruta, definimos el controllador
que vamos a utlizar y luego la función dentro del controlador
*/

Route::post('/formulario', [FormController::class, 'store']);
