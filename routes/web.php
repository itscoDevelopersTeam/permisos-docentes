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

// Grupo de rutas para admins
Route::prefix('admin/{admin_name}')->name('admin.')->group(function() {
    
    Route::get('/', function(){
        return view('admin.registros');
    })->where('admin_name', '[A-Za-z]+')->name('home');

    Route::get('registra-trabajador', function($admin_name) {
        return view('admin.registra-trabajador');
    })->name('registra.trabajador');

    Route::get('registra-area', function($admin_name) {
        return view('admin.registra-area');
    })->name('registra.area');

    Route::get('notificaciones', function($admin_name) {
        return view('admin.notificaciones');
    })->name('notificaciones');

    Route::get('permisos', function($admin_name) {
        return view('admin.permisos');
    })->name('permisos');

    Route::get('consulta-horas', function($admin_name) {
        return view('admin.horas');
    })->name('horas');

    Route::get('cerrar-sesion', function() {
        return redirect('/');
    })->name('logout');
    
});

Route::prefix('rh')->name('rh.')->group(function() {
    // Grupo de rutas para recursos humanos
});

// Grupo de rutas para users
Route::prefix('user/{username}')->name('user.')->group(function() {
    
    // Ruta home para cada usuario
    Route::get('/', function($username) {
        echo 'Home para ' . $username;
    })->where('username', '[A-Za-z]+')->name('index');

    // Devuelve vista para solicitar nuevo permiso
    Route::get('nuevo', function($username) {
        echo 'Nuevo permiso para ' . $username;
    })->where('username', '[A-Za-z]+')->name('nuevo');
    
    // Devuelve vista con histórico de permisos
    Route::get('consulta', function($username) {
        echo 'Consulta permisos para ' . $username;
    })->where('username', '[A-Za-z]+')->name('consultar');
});