<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', [ProfileController::class, 'index']);
Route::post('/save', [ProfileController::class, 'store'])->name('image.store');
Route::get('/show', [ProfileController::class, 'display']);
Route::get('delete/{id}',[ProfileController::class, 'delete']);
Route::get('edit/{id}',[ProfileController::class, 'edit']);
Route::post('update/{id}',[ProfileController::class, 'update']);
