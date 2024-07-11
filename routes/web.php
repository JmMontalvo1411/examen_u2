<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', [AlumnoController::class, 'home'])->name('home');
Route::resource('alumnos', AlumnoController::class);
