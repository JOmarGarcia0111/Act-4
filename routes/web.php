<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperheroeController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GenderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Superhero Routes
    Route::resource('superheroe',SuperheroeController::class);

    // Universe Routes
    Route::resource('universe', UniverseController::class);

    // Gender Routes
    Route::resource('gender', GenderController::class);
});

require __DIR__.'/auth.php';
