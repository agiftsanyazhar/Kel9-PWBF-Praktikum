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
use App\Models\Detail_Kemajuan;
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
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/forgot-password', [Forgot_PasswordController::class, 'index']);

//================================================================================
//================================== Dashboard ===================================
//================================================================================
Route::get('/dashboard-index', [Dashboard_IndexController::class, 'index'])->middleware('auth');
Route::get('/charts', [ChartsController::class, 'index'])->middleware('auth');
Route::get('/buku-table', [BukuController::class, 'index'])->middleware('auth');
Route::get('/detail-kemajuan-table', [Detail_KemajuanController::class, 'index'])->middleware('auth');
Route::get('/detail-peran-table', [Detail_PeranController::class, 'index'])->middleware('auth');
Route::get('/kemajuan-table', [KemajuanController::class, 'index'])->middleware('auth');
Route::get('/pengurus-table', [PengurusController::class, 'index'])->middleware('auth');
Route::get('/peran-table', [PeranController::class, 'index'])->middleware('auth');
Route::get('/santri-table', [SantriController::class, 'index'])->middleware('auth');

//================================================================================
//=================================== Register ===================================
//================================================================================
Route::post('/register', [RegisterController::class, 'store']);
Route::delete('/delete-santri-{id}', [RegisterController::class, 'destroy']);

//================================================================================
//===================================== Login & Logout ====================================
//================================================================================
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//================================================================================
//===================================== CRUD =====================================
//================================================================================
//Bab
Route::get('/form-create-bab-{id}', [BabController::class, 'create'])->middleware('auth');
Route::post('/create-bab', [BabController::class, 'store'])->middleware('auth');
Route::get('/form-edit-bab-{id}', [BabController::class, 'edit'])->middleware('auth');
Route::put('/update-bab-{id}', [BabController::class, 'update'])->middleware('auth');
Route::delete('/delete-bab-{id}', [BabController::class, 'destroy'])->middleware('auth');

//Buku
Route::get('/form-create-buku', [BukuController::class, 'create'])->middleware('auth');
Route::post('/create-buku', [BukuController::class, 'store'])->middleware('auth');
Route::get('/form-edit-buku-{id}', [BukuController::class, 'edit'])->middleware('auth');
Route::put('/update-buku-{id}', [BukuController::class, 'update'])->middleware('auth');
Route::get('/buku-table-bab-{id}', [BabController::class, 'index'])->middleware('auth');
Route::delete('/delete-buku-{id}', [BukuController::class, 'destroy'])->middleware('auth');

//Pengurus
Route::get('/form-create-pengurus', [PengurusController::class, 'create'])->middleware('auth');
Route::post('/create-pengurus', [PengurusController::class, 'store'])->middleware('auth');
Route::get('/form-edit-pengurus-{id}', [PengurusController::class, 'edit'])->middleware('auth');
Route::put('/update-pengurus-{id}', [PengurusController::class, 'update'])->middleware('auth');
Route::delete('/delete-pengurus-{id}', [PengurusController::class, 'destroy'])->middleware('auth');

//Peran
Route::get('/form-create-peran', [PeranController::class, 'create'])->middleware('auth');
Route::post('/create-peran', [PeranController::class, 'store'])->middleware('auth');
Route::get('/form-edit-peran-{id}', [PeranController::class, 'edit'])->middleware('auth');
Route::put('/update-peran-{id}', [PeranController::class, 'update'])->middleware('auth');
Route::delete('/delete-peran-{id}', [PeranController::class, 'destroy'])->middleware('auth');

//Kemajuan
Route::get('/kemajuan-table-{id}', [KemajuanController::class, 'showKemajuanIndex'])->middleware('auth');
Route::get('/form-create-kemajuan-{id}', [KemajuanController::class, 'create'])->middleware('auth');
Route::post('/create-kemajuan', [KemajuanController::class, 'store'])->middleware('auth');
Route::get('/form-edit-kemajuan-{id}', [KemajuanController::class, 'edit'])->middleware('auth');
Route::put('/update-kemajuan-{id}', [KemajuanController::class, 'update'])->middleware('auth');
Route::get('/santri-table-kemajuan-{id}', [KemajuanController::class, 'index'])->middleware('auth');
Route::delete('/delete-kemajuan-{id}', [KemajuanController::class, 'destroy'])->middleware('auth');

//Detail Kemajuan
Route::get('/kemajuan-table-detail-kemajuan-{id}', [Detail_KemajuanController::class, 'index'])->middleware('auth');

//Detail Peran
Route::get('/pengurus-table-peran-{id}', [Detail_PeranController::class, 'index'])->middleware('auth');
Route::get('/form-create-detail-peran-{id}', [Detail_PeranController::class, 'create'])->middleware('auth');
Route::post('/create-detail-peran', [Detail_PeranController::class, 'store'])->middleware('auth');
Route::get('/form-edit-detail-peran-{id}', [Detail_PeranController::class, 'edit'])->middleware('auth');

//================================================================================
//=================================== Profile ===================================
//================================================================================
Route::get('/profile', [SantriController::class, 'showProfileIndex'])->middleware('auth');
Route::post('/update-profile', [SantriController::class, 'update'])->middleware('auth');