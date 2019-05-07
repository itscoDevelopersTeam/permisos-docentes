<?php

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
    return view('login.inicio-sesion');
})->name('welcome');

Route::get('inicio-sesion', function() {
    return view('login.inicio-sesion');
})->name('inicio');

Route ::get('registrar', function() {
    return view('login.registrar');
})->name('registro');
