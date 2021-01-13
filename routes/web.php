<?php

use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\RutasController;
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

//Controladores
//administra una única ruta 
Route::get('/', PeliculaController::class);
//administra más de una ruta 
Route::get('catalog', [RutasController::class, 'index']);

Route::get('catalog/create', [RutasController::class, 'create']);

Route::get('catalog/edit/{key}', [RutasController::class, 'edit']);

Route::get('catalog/show/{key}', [RutasController::class, 'show']);



//Rutas

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('logout', function () {
//     return view('logout');
// });

//login 
// Route::get('login', function () {
//     return view('auth.login');
// });

//vista con parametros 
// Route::get('catalog/show/{id}', function ($id) {
//   return view('catalog/show') -> with('id', $id);
//      });

//vista con parametros 
// Route::get('catalog/edit/{id}', function ($id) {
//     return view('catalog/edit') -> with('id', $id);
//        });