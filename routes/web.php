<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/add', [MahasiswaController::class, 'create'])->name('add');
Route::post('/save', [MahasiswaController::class, 'store'])->name('save');
Route::get('/detail/{id}', [MahasiswaController::class, 'show'])->name('detail');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [MahasiswaController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [MahasiswaController::class, 'destroy'])->name('delete');