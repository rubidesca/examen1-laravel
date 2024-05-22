<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaController;

Route::get('/', function () {
    return redirect()->route('vehiculos.index');
});

Route::resource('vehiculos', VehiculoController::class);

Route::resource('entradas', EntradaController::class); 

Route::get('vehiculos/{id}', [VehiculoController::class, 'show'])->name('vehiculos.show');

