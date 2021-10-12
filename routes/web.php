<?php

use App\Http\Controllers\ChartsController;
use App\Http\Controllers\Dashboard_HomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Internal_Server_ErrorController;
use App\Http\Controllers\Layout_Sidenav_LightController;
use App\Http\Controllers\Layout_Static_NavigationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Not_FoundController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\UnauthorizedController;
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

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

// Dashboard
Route::get('/dashboard', [Dashboard_HomeController::class, 'index']);
Route::get('/layout-static-navigation', [Layout_Static_NavigationController::class, 'index']);
Route::get('/layout-sidenav-light', [Layout_Sidenav_LightController::class, 'index']);
Route::get('/401', [UnauthorizedController::class, 'index']);
Route::get('/404', [Not_FoundController::class, 'index']);
Route::get('/500', [Internal_Server_ErrorController::class, 'index']);
Route::get('/charts', [ChartsController::class, 'index']);
Route::get('/tables', [SantriController::class, 'index']);