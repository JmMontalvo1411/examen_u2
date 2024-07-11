<?php
use App\Http\Controllers\AlumnoController;

Route::get('/', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
