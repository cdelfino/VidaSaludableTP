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


Route::get('pacientes/{id}', [PacienteController::class, 'show'])->name('pacientes.show');

// Rutas user
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

// Rutas para medico
Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
Route::get('medicos/{medico}', [MedicoController::class, 'show'])->name('medicos.show');
Route::get('medicos/{id}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');

//Rutas turnos
Route::get('turnos/medico', [TurnoController::class, 'show'])->name('turnos.show');

// Rutas para mostrar turnos de un médico
Route::get('medicos/{medico}/turnos', [TurnoController::class, 'show'])->name('turnos.show');

// Ruta para la vista de los turnos del paciente
Route::middleware('auth')->group(function () {
    Route::resource('turnos', TurnoController::class);


    Route::get('mis-turnos', [TurnoController::class, 'index'])->name('turnos.index');
});

Route::get('/seleccionar-rol', function () {
    return view('seleccionar-rol');
})->name('seleccionar-rol');


Route::get('register-doctor', [App\Http\Controllers\MedicoController::class, 'create'])->name('register-doctor');
Route::get('register-paciente', [App\Http\Controllers\PacienteController::class, 'create'])->name('register-paciente');

Route::post('register-doctor', [App\Http\Controllers\MedicoController::class, 'store'])->name('medicos.store');
Route::post('register-paciente', [App\Http\Controllers\PacienteController::class, 'store'])->name('pacientes.store');

Route::post('user/update-role/{user}', [UserController::class, 'updateRole'])->name('user.updateRole');