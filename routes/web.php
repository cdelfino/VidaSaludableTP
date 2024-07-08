<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HistoriaClinicaController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('pacientes', PacienteController::class);
Route::resource('turnos', TurnoController::class);
Route::resource('medicos', MedicoController::class);
Route::resource('historiasclinicas', HistoriaClinicaController::class);
Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('pacientes/{id}', [PacienteController::class, 'show'])->name('pacientes.show');
Route::get('pacientes/{id}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');
