<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

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



//Rutas de curso: Ruta de Lista
Route::get('/', [LibroController::class,'listaLibro'])->name('listaLibro');

//Ruta de Formulario Guardar
Route::get('/formLibro', [LibroController::class,'formLibro']);

//Ruta para Guardar al categoryController
Route::post('/crearLibro', [LibroController::class,'guardarLibro'])->name('Libro.save');

//eliminar
Route::delete('/deleteLibro/{id}', [LibroController::class,'destroy'])->name('deleteLibro');

//editar
Route::patch('/editLibro/{id}', [LibroController::class, 'editLibro'])->name('editLibro');
Route::get('/editformLibro/{id}', [LibroController::class,'editformLibro'])->name('editformLibro');