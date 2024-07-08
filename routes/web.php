<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HistoriaClinicaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pacientes', PacienteController::class);
Route::resource('turnos', TurnoController::class);
Route::resource('medicos', MedicoController::class);
Route::resource('historiasclinicas', HistoriaClinicaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
