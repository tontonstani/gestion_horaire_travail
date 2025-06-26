<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuartTravailController;
use App\Http\Controllers\VacanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Routege pour le quart de travail
Route::resource("quart_travails",QuartTravailController::class);

//Routage pour vacance
Route::resource("vacances",VacanceController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
