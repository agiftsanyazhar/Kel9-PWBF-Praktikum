<?php

use App\Http\Controllers\ChartsController;
use App\Http\Controllers\Dashboard_HomeController;
use App\Http\Controllers\Dashboard_IndexController;
use App\Http\Controllers\Forgot_PasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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
Route::get('/', [IndexController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/forgot-password', [Forgot_PasswordController::class, 'index']);

// Dashboard
Route::get('/dashboard-index', [Dashboard_IndexController::class, 'index']);
Route::get('/charts', [ChartsController::class, 'index']);
Route::get('/santri-table', [SantriController::class, 'index']);