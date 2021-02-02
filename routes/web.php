<?php

use App\Http\Controllers\TaskController;
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
//binevenida general
Route::get('/', function () {
    return view('layouts.master');
});
//mostrar todas las tares php 
Route::get('/tareas', [TaskController::class, 'inicio']);

//crear una nueva tarea
Route::post('/create', [TaskController::class, 'store']);

Route::get('/tareas/create', [TaskController::class, 'crear']);
//filtrar tareas, muestra según id seleccionado
Route::get('/tareas/show/{key}', [TaskController::class, 'show'])->name('show');
//modificar una tarea
Route::get('/tareas/actualizar/{key}', [TaskController::class, 'update'])->name('update');
//editar una nueva tarea
Route::put('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
//borrar una tarea
Route::delete('/tareas/borrar/{id}', [TaskController::class, 'destroy']);
//coge los datos de la base de datos 
// Route::get('/datos', [TaskController::class, 'index']);


