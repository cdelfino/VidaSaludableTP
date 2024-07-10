<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HistoriaClinicaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('pacientes', PacienteController::class);
Route::resource('turnos', TurnoController::class);
Route::resource('medicos', MedicoController::class);
Route::resource('users', UserController::class);
Route::resource('historiasclinicas', HistoriaClinicaController::class)->parameters([
    'historiasclinicas' => 'id_historiaclinica'
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('pacientes/{id}', [PacienteController::class, 'show'])->name('pacientes.show');
Route::get('pacientes/{id}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registro de usuarios
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Rutas para historias clínicas
Route::get('historiasclinicas/{historiaclinica}', [HistoriaClinicaController::class, 'show'])->name('historiasclinicas.show');
Route::get('historiasclinicas/{historiaclinica}/edit', [HistoriaClinicaController::class, 'edit'])->name('historiasclinicas.edit');
Route::put('historiasclinicas/{historiaclinica}', [HistoriaClinicaController::class, 'update'])->name('historiasclinicas.update');
