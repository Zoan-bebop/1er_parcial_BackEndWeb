<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

// LISTAR todos los estudiantes 
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');

// Mostrar formulario para CREAR estudiante
Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');

// GUARDAR nuevo estudiante
Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');
























Route::get('/', function () {
    return view('welcome');
});
