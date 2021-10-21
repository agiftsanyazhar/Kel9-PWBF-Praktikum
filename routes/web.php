<?php

use App\Http\Controllers\BabController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\Dashboard_IndexController;
use App\Http\Controllers\Detail_KemajuanController;
use App\Http\Controllers\Detail_PeranController;
use App\Http\Controllers\Forgot_PasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KemajuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SantriController;
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
Route::get('/bab-table', [BabController::class, 'index']);
Route::get('/buku-table', [BukuController::class, 'index']);
Route::get('/detail-kemajuan-table', [Detail_KemajuanController::class, 'index']);
Route::get('/detail-peran-table', [Detail_PeranController::class, 'index']);
Route::get('/kemajuan-table', [KemajuanController::class, 'index']);
Route::get('/pengurus-table', [PengurusController::class, 'index']);
Route::get('/peran-table', [PeranController::class, 'index']);
Route::get('/santri-table', [SantriController::class, 'index']);

//Form
//Register
Route::post('/register', [RegisterController::class, 'store']);