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

Route::get('/', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/dashboardlogin', function () {
    return view('dashboardlogin', [
        "title" => "LOGIN"
    ]);
});

Route::get('/news', function () {
    return view('news', [
        "title" => "NEWS"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT"
    ]);
<<<<<<< HEAD
});
=======
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "DASHBOARD"
    ]);
});
>>>>>>> b1801a6e08cabbae46141b6a6cbba78f173724a9
