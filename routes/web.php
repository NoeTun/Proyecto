<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Auth;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [PrincipalController::class, 'login']);
Route::get('/registro', [PrincipalController::class, 'registro']);
Route::post('/agregar',[PrincipalController::class, 'useradd']);
Route::post('/inicio', [PrincipalController::class, 'validador'])->name('login.validate');
Route::get('/inicio', [PrincipalController::class, 'inicio'])->name('inicio');
Route::get('/show', [PrincipalController::class, 'show']);
Route::post('/logout', [PrincipalController::class, 'logout'])->name('logout');
