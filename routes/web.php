<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', [SecurityController::class, 'login']);
Route::post('/iniciar-sesion', [SecurityController::class, 'signin']);
Route::get('/panel', [DashboardController::class, 'dashboard']);
Route::resource('/roles', RolController::class);
Route::resource('/usuario', UsuarioController::class);
Route::resource('/empleado', EmpleadoController::class);
Route::resource('/cliente', ClienteController::class);
Route::resource('/producto', ProductoController::class);
Route::resource('/categoria', CategoriaController::class);
