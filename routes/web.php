<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sobre', PaginaController::class); 
Route::resource('contatos', ContatoController::class);

