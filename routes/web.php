<?php

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

// View
// Home
Route::get('/', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/layout-static', function () {
    return view('dashboard.layout-static');
});
Route::get('/layout-sidenav-light', function () {
    return view('dashboard.layout-sidenav-light');
});
Route::get('/401', function () {
    return view('dashboard.401');
});
Route::get('/404', function () {
    return view('dashboard.404');
});
Route::get('/500', function () {
    return view('dashboard.500');
});
Route::get('/charts', function () {
    return view('dashboard.charts');
});
Route::get('/tables', function () {
    return view('dashboard.tables');
});

// Controller
Route::get('/testviewsantri', [SantriController::class, 'index']);