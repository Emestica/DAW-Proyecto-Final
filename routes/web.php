<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [SecurityController::class, 'login']);
Route::post('/iniciar-sesion', [SecurityController::class, 'signin']);
Route::get('/panel', [DashboardController::class, 'dashboard']);
Route::get('/roles', [CatalogController::class, 'rols']);
