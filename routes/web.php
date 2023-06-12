<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SecurityController;
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

Route::get('/', [HomeController::class, 'index']);

Route::post('/inicio-sesion', [SecurityController::class, 'inicarSesion']);

Route::get('/principal', [HomeController::class, 'home']);

Route::get('/roles', [CatalogController::class, 'roles']);
Route::get('/dashboard', [DashboardController::class, 'index']);