<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SuperheroController;
use App\Http\Controllers\Api\GenderController;
use App\Http\Controllers\Api\UniverseController;


// Rutas para Superheroe
Route::get('/superheroes', [SuperheroController::class, 'index']);
Route::get('/superheroes/{id}', [SuperheroController::class, 'show']);

// Rutas para Gender
Route::get('/gender', [GenderController::class, 'index']);
Route::get('/gender/{id}', [GenderController::class, 'show']);

// Rutas para Universe
Route::get('/universe', [UniverseController::class, 'index']);
Route::get('/universe/{id}', [UniverseController::class, 'show']);



///Route::get('/user', function (Request $request) {
  //  return $request->user();
//})->middleware('auth:sanctum');
