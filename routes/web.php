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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tareas', [TaskController::class, 'index']);

Route::put('/tareas/actualizar', [TaskController::class, 'update']);

Route::post('/tareas/guardar', [TaskController::class, 'store']);

Route::delete('/tareas/borrar/{id}', [TaskController::class, 'destroy']);

Route::get('/tareas/buscar', [TaskController::class, 'show']);

