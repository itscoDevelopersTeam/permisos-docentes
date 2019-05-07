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

Route::get('registrar', function() {
    return view('login.registrar');
})->name('registro');

Route::prefix('admin')->name('admin.')->group(function() {
    // Grupo de rutas para admins
});

Route::prefix('rh')->name('rh.')->group(function() {
    // Grupo de rutas para recursos humanos
});

// Grupo de rutas para users
Route::prefix('{username}')->name('user.')->group(function() {
    
    // Ruta home para cada usuario
    Route::get('/', function($username) {
        echo 'Home para ' . $username;
    })->where('username', '[A-Za-z]+')->name('index');

    // Devuelve vista para solicitar nuevo permiso
    Route::get('/nuevo', function($username) {
        echo 'Nuevo permiso para ' . $username;
    })->where('username', '[A-Za-z]+')->name('nuevo');
    
    // Devuelve vista con histórico de permisos
    Route::get('/consulta', function($username) {
        echo 'Consulta permisos para ' . $username;
    })->where('username', '[A-Za-z]+')->name('consultar');
});