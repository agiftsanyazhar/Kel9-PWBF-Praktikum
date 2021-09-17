<?php

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tumbuhanview', function () {
    return view('tumbuhanview');
});
Route::get('/testview', function () {
    return view('testview');
});

// Controller
Route::get('tumbuhancontroller', 'App\Http\Controllers\TumbuhanController@index');