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

//================================================================================
//===================================== Home =====================================
//================================================================================
Route::get('/', [IndexController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/forgot-password', [Forgot_PasswordController::class, 'index']);

//================================================================================
//================================== Dashboard ===================================
//================================================================================
Route::get('/dashboard-index', [Dashboard_IndexController::class, 'index']);
Route::get('/charts', [ChartsController::class, 'index']);
Route::get('/buku-table', [BukuController::class, 'index']);
Route::get('/pengurus-table', [PengurusController::class, 'index']);
Route::get('/peran-table', [PeranController::class, 'index']);
Route::get('/santri-table', [SantriController::class, 'index']);

//================================================================================
//=================================== Register ===================================
//================================================================================
Route::post('/register', [RegisterController::class, 'store']);
Route::delete('/delete-santri-{id}', [RegisterController::class, 'destroy']);

//================================================================================
//===================================== Login ====================================
//================================================================================
Route::post('/login', [LoginController::class, 'authenticate']);

//================================================================================
//===================================== CRUD =====================================
//================================================================================
//Bab
Route::get('/form-create-bab-{id}', [BabController::class, 'create']);
Route::post('/create-bab', [BabController::class, 'store']);
Route::get('/form-edit-bab-{id}', [BabController::class, 'edit']);
Route::put('/update-bab-{id}', [BabController::class, 'update']);
Route::delete('/delete-bab-{id}', [BabController::class, 'destroy']);

//Buku
Route::get('/form-create-buku', [BukuController::class, 'create']);
Route::post('/create-buku', [BukuController::class, 'store']);
Route::get('/form-edit-buku-{id}', [BukuController::class, 'edit']);
Route::put('/update-buku-{id}', [BukuController::class, 'update']);
Route::get('/buku-table-bab-{id}', [BabController::class, 'index']);
Route::delete('/delete-buku-{id}', [BukuController::class, 'destroy']);

//Pengurus
Route::get('/form-create-pengurus', [PengurusController::class, 'create']);
Route::post('/create-pengurus', [PengurusController::class, 'store']);
Route::get('/form-edit-pengurus-{id}', [PengurusController::class, 'edit']);
Route::put('/update-pengurus-{id}', [PengurusController::class, 'update']);
Route::delete('/delete-pengurus-{id}', [PengurusController::class, 'destroy']);

//Peran
Route::get('/form-create-peran', [PeranController::class, 'create']);
Route::post('/create-peran', [PeranController::class, 'store']);
Route::get('/form-edit-peran-{id}', [PeranController::class, 'edit']);
Route::put('/update-peran-{id}', [PeranController::class, 'update']);
Route::delete('/peran-table/delete/{id}', [PeranController::class, 'destroy']);

//Kemajuan
Route::get('/kemajuan-table-{id}', [KemajuanController::class, 'showIndex']);
Route::get('/form-create-kemajuan', [KemajuanController::class, 'create']);
Route::post('/create-kemajuan', [KemajuanController::class, 'store']);

//Santri
Route::get('/santri-table-kemajuan-{id}', [KemajuanController::class, 'index']);