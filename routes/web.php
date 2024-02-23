<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;

// Rutas para el CRUD de chollos
Route::get('/', [CholloController::class, 'index'])->name('index');
Route::get('/create', [CholloController::class, 'create'])->name('create');
Route::post('/', [CholloController::class, 'store'])->name('store');
Route::get('/{chollo}', [CholloController::class, 'show'])->name('show');
Route::get('/{chollo}/edit', [CholloController::class, 'edit'])->name('edit');
Route::put('/{chollo}', [CholloController::class, 'update'])->name('update');
Route::delete('/{chollo}', [CholloController::class, 'destroy'])->name('destroy');
